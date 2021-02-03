<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratories extends Model
{
    //
    protected $table = 'laboratories';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
