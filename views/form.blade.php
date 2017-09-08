@extends('easy-crud::layout')

@section('content')
<div class="row">
    <div>
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Design <small>different form elements</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    @foreach($properties as $property)
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $property }}">
                                {{ $property }}
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
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection