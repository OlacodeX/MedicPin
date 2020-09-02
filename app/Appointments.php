<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    //
    protected $table = 'appointments';
    // primary key
    public $primaryKey = 'id';
}
