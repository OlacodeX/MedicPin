<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address','username','pin','gender','phone','nok','nok_phone',
    ];
    // Table name
    protected $table = 'patients';
    // primary key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function patient(){
        return $this->belongsTo('App\patients');
    }
}
