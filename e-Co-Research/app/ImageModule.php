<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageModule extends Model {
    public $table = "image_module";

    public function form_component() {
        return $this->belongsTo('App\FormComponent');
    }//
}

