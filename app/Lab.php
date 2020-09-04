<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    //
    protected $table = 'labs';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

}
