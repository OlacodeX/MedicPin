<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    //
    // Table name
    protected $table = 'records';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;


}
