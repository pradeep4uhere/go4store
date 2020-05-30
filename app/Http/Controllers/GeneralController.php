<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\StoreType;

class GeneralController extends Controller
{
    //
    public function register(Request $request){
    	echo "<pre>";
    	print_r($request->all());
    	die;

    }


    public static function getStoreTypeIdByName($name){
    	$storeType = StoreType::where('name','=',$name)->first();
    	return $storeType;
    } 


    
}
