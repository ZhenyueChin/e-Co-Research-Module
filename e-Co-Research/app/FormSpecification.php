<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSpecification extends Model
{
	public $table = "form_specifications";



    public function forms() {
        return $this->hasMany('App\Form');
    }


    public function formcomponents(){
    	return $this->hasMany('App\FormComponent');
    }

    public function component_sequence(){
    	return $this->hasOne('App\ComponentSequence');
    }


     public function resource(){
        return $this->belongsTo('App\Resource');
    }
}
