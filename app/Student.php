<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Student extends Model
{
    use FormAccessible;     

    // tables name
    protected $table = 'students';

    // primary key 
    public $primaryKey = 'id';

    // time stamp
    public $timestamp = true;

    /**
     * Get the user's first name for forms.
     *
     * @param  string  $value
     * @return string
     */
    public function formDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

     /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }



    
}
