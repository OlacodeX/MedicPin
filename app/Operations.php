<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    //
    // Table name
    protected $table = 'operations';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
