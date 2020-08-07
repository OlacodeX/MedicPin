<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    //
    // Table name
    protected $table = 'notifications';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function patient(){
        return $this->belongsTo('App\patients');
    }

}
