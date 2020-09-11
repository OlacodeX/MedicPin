<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    //
    // Table name
    protected $table = 'visitors';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
