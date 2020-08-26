<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'events';
    // primary key
    public $primaryKey = 'id';
    protected $fillable = ['title','start_date','end_date'];
}
