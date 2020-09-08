<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    //
    protected $table = 'prescriptions';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
