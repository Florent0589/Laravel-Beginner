<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // tables name
    protected $table = 'subjects';

    // primary key 
    public $primaryKey = 'id';

    // time stamp
    public $timestamp = true;

    public function lecturers(){

        return $this->belongsTo('App\Lecturer');
    }

}
