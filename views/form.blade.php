@extends('easy-crud::layout')

@section('content')
<div class="row">
    <div class="x_panel">
        <div class="x_content">
            <br>
            <form method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                @foreach($properties as $property)
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $property }}">
                            {{ ucfirst($property) }}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="{{ $property }}" 
                                name="{{ $property }}" 
                                class="form-control col-md-7 col-xs-12" 
                                type="text"
                                value="{{ isset($model) ? $model->$property : '' }}">
                        </div>
                    </div>
                @endforeach

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection