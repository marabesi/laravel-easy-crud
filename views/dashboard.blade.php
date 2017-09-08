@extends('easy-crud::layout')

@section('content')
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Registered models</span>
            <div class="count">{{ count(config('easy-crud.models')) }}</div>
        </div>
    </div>
@endsection