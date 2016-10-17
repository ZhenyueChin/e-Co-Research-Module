<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public $table = "resources";


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function requests(){
    	return $this->hasMany('App\Request');
    }

    public function forms_specification(){
        return $this->hasOne('App\FormSpecification');
    }

    public function heading_module(){
        return $this->hasOne('App\HeadingModule');
    }
}
