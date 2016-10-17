<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextField extends Model
{
	public $table = "text_field";

    public function form_component() {
        return $this->belongsTo('App\FormComponent');
    }//
}
