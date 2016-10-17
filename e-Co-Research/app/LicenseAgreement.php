<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseAgreement extends Model
{
	public $table = "license_agreement";
    public function form_component() {
        return $this->belongsTo('App\FormComponent');
    }
}
