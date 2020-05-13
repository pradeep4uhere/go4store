<?php

namespace App\Http\Controllers\Import;
use App\Product;
use App\Http\Controllers\Master;
use App\CsvData;
use App\Http\Requests\CsvImportRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\UserProduct;
use Auth;

class ImportController extends Master
{

    public function getImport()
    {
        return view(Master::loadFrontTheme('import.import'));
    }

    public function parseImport(CsvImportRequest $request)
    {

        $path = $request->file('csv_file')->getRealPath();

        if ($request->has('header')) {
            $data = Excel::load($path, function($reader) {})->get()->toArray();
        } else {
            $data = array_map('str_getcsv', file($path));
        }

        if (count($data) > 0) {
            if ($request->has('header')) {
                $csv_header_fields = [];
                foreach ($data[0] as $key => $value) {
                    $csv_header_fields[] = $key;
                }
            }
            $csv_data = array_slice($data, 0, 1000);

            $csv_data_file = CsvData::create([
                'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
                'csv_header' => $request->has('header'),
                'csv_data' => json_encode($data)
            ]);
        } else {
            return redirect()->back();
        }

        return view(Master::loadFrontTheme('import.import_fields'), compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

    }

    public function processImport(Request $request)
    {
        $data = CsvData::find($request->csv_data_file_id);
        $csv_data = json_decode($data->csv_data, true);
        $count =0;
        $error = [];
        foreach ($csv_data as $row) {
            $Product = new Product();
            foreach (config('import.products') as $field) {
                if($field=='default_price') { continue; }
                if($field=='price')     { continue; }
                if($field=='discount')  { continue; }
                if($field=='selling_price')  { continue; }
                if ($data->csv_header) {
                    $Product->$field = $row[$request->fields[$field]];
                } else {
                    $Product->$field = $row[$request->fields[$index]];
                }
                
            }
            $Product->save();
            $last_id = $Product->id;
            if($this->UpdateUserProducts($last_id,$row)){
                $count++;
            }else{
                $error[]= $row;
            }
        }

        return view(Master::loadFrontTheme('import.import_success'),array('count'=>$count,'error'=>$error));
    }




    //Update User Products
    public function UpdateUserProducts($last_product_id,$row){
        //dd($row);
        $userProduct = new UserProduct();
        $userProduct->user_id = Auth::user()->id;
        $userProduct->seller_id = $this->getSeller('id');
        $userProduct->product_id =  $last_product_id;
        $userProduct->quantity_in_unit =  $last_product_id;
        $userProduct->default_price = ($row['default_price']>0)?$row['default_price']:'0.00';
        $userProduct->price = ($row['price']>0)?$row['price']:'0.00';
        $userProduct->selling_price = ($row['selling_price']>0)?$row['selling_price']:'0.00';
        $userProduct->discount_value = ($row['discount']>0)?$row['discount']:'0.00';
        if($row['discount']>0){
            $userProduct->isDiscounted = 1;
        }
        $userProduct->status = '0';
        $userProduct->created_at = self::getCreatedDate();
        if($userProduct->save()){
            return true;
        }else{
            return false;
        }
    }
}
