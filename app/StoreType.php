<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    protected $table = 'store_types';

    public $timestamps = false;
	
	
	public function Seller() {
        return $this->belongsTo('App\Seller', 'store_type_id', 'id' );
    }

    public function getAllActiveStoreType(){
    	$cateArr=array();
    	$catObj = StoreType::where('status','=','1');
	    $catObjRes = $catObj->get();
        foreach ($catObjRes as $obj) {
           $cateArr[]=array('id'=>$obj->id,'name'=>$obj->name,'image'=>$obj->image,'description'=>$obj->description);
        }
        return $cateArr;
    }
	
}
