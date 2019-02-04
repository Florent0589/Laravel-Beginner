<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    public function subjects(){

        return $this->hasMany('App\Subject');
    }
}
