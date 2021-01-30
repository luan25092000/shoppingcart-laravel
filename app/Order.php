<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','address','city','state','zip','total','cart','note'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
