<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KPEvent extends Model
{
    public $table = "events";
    public $timestamps = false;
    protected $fillable = ['phonenumber', 'email' ,'date' ,'start' ,'end'];
}
