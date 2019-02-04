<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // tables name
    protected $table = 'posts';

    // primary key 
    public $primaryKey = 'id';

    // time stamp
    public $timestamp = true;

    public function user(){

        return $this->belongsTo('App\User');
    }
}
