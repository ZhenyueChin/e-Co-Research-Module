<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseAgreementData extends Model
{
	public $table = "license_agreement_data";
    public function form_value() {
        return $this->belongsTo('App\FormValue');
    }
}
