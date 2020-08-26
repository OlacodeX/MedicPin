<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreCart extends Model
{
    //
     // Table name
     protected $table = 'store_cart';
     // primary key
     public $primaryKey = 'id';
     //timestamps
     public $timestamps = true;


     public function user(){
         return $this->belongsTo('App\User');
        }
}
