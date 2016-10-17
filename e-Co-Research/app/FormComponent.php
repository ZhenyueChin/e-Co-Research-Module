<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormComponent extends Model
{
    public $table = "form_components";


    public function form_specification(){
    	return $this->belongsTo('App\FormSpecification');

    }

    public function component_sequences(){
    	return $this->hasMany('App\ComponentSequence');
    }

    public function license_agreement() {
        return $this->hasOne('App\LicenseAgreement');
    }
    public function text_field(){
    	return $this->hasOne('App\TextField');
    }

    public function form_values(){
        return $this->hasMany('App\FormValue');
    }

    public function image_module() {
        return $this->hasOne('App\ImageModule');
    }
}
