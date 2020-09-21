<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
       // Table name
       protected $table = 'bills';
       // primary key
       public $primaryKey = 'id';
       //timestamps
       public $timestamps = true;
}
