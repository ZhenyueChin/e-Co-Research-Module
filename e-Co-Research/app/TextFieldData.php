<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextFieldData extends Model
{
	public $table = "text_field_data";
	
    public function form_value() {
        return $this->belongsTo('App\FormValue');
    }//
}
