<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    // tables name
    protected $table = 'grades';

    // primary key 
    public $primaryKey = 'id';

    // time stamp
    public $timestamp = true;

}
