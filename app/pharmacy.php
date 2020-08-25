<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    //    // Table name
    protected $table = 'pharmacies';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

}
