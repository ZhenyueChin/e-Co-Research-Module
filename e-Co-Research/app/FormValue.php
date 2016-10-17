<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormValue extends Model
{
	public $table = "form_values"
	;
    public function form() {
        return $this->belongsTo('App\Form');
    }

    public function license_agreement_data() {
        return $this->hasOne('App\LicenseAgreementData');
    }
    public function text_field_data(){
    	return $this->hasOne('App\TextFieldData');
    }

    public function formcomponent(){
        return $this->belongsTo('App\FormComponent');
    }
}
