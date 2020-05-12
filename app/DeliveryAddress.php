<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_type', 
        'mobile',
        'email_address',
        'full_name',
        'address_1',
        'address_2',
        'pincode'
    ];

    public function State() {
         return $this->belongsTo('App\State', 'state_id', 'id' );
    }

     public function City() {
         return $this->belongsTo('App\City', 'city_id', 'id' );
    }
}
