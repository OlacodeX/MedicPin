<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // Table name
    protected $table = 'orders';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
