<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    //
    protected $table = 'admissions';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
