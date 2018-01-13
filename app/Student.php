<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //table asociates with the model
    //protected $table = 'students'
    /**
    *timestamped
    *@var bool
    */
    public $timestamps = false;
}
