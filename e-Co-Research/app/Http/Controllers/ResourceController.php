<?php

namespace App\Http\Controllers;

use App\HeadingModule;
use App\Resource;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class ResourceController extends Controller
{
    public function index() {
        return view('resource.create_resource');
    }

    public function store_resource() {
        $resource = new Resource;

        $heading_modules = Input::get('heading_module');
        if (is_array($heading_modules)) {
            for($i = 0; $i < count($heading_modules); $i++) {
                $heading_module = new HeadingModule;
                $heading_module->content = $heading_modules[$i];
                $heading_module->resource_id = $resource->id;

                if ($resource->save() && $resource->heading_modules()->save($heading_module)) {
                } else {
                    return Redirect::back()->withInput()->withErrors('Save Failed！');
                }
            }
        }
    }
}
