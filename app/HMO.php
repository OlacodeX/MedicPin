<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HMO extends Model
{
    //
       // Table name
       protected $table = 'h_m_o_s';
       // primary key
       public $primaryKey = 'id';
       //timestamps
       public $timestamps = true;
}
