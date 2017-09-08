<?php

namespace EasyCrud\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class Crud extends Controller
{
    public function getIndex($model)
    {
        $className = str_replace('-', '\\', $model);

        $model = App::make($className);

        return view('easy-crud::table', [
            'table_content' => $model->all(),
            'models' => config('easy-crud.models'),
            'url_base' => config('easy-crud.url_base'),
        ]);
    }

    public function getCreate($model)
    {
        $className = str_replace('-', '\\', $model);

        $model = App::make($className);

        return view('easy-crud::form', [
            'models' => config('easy-crud.models'),
            'url_base' => config('easy-crud.url_base'),
        ]);
    }
}
