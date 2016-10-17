@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Customize Your Resource</div>

                            <form id="contact-form" method="post" action="{{ URL('resource/store_resource') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="module-holder" class="panel-body">
                                </div>
                                <div class="panel-body">
                                    <button type="submit" class="btn btn-success">Create</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>

                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Choose Modules</div>
                    <div class="panel-body">
                        <button name="heading-module" type="button" class="btn btn-primary">Heading Module</button>
                        <br><br>
                        <button name="image-module" type="button" class="btn btn-primary">Image Module</button>
                        <br><br>
                        <button name="text-module" type="button" class="btn btn-primary">Text Module</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection