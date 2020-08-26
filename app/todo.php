<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //
     // Table name
     protected $table = 'todos';
     // primary key
     public $primaryKey = 'id';
     //timestamps
     public $timestamps = true;
}
