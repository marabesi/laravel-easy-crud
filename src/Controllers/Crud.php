<?php

namespace EasyCrud\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EasyCrud\Factory\Model;

class Crud extends Controller
{
    public function getIndex($modelName, Model $factory)
    {
        $model = $factory->create($modelName);

        return view('easy-crud::table', [
            'table_content' => $model->all(),
            'models' => config('easy-crud.models'),
            'url_base' => config('easy-crud.url_base'),
            'properties' => $model->getFillable(),
            'model' => $modelName,
        ]);
    }

    public function getCreate($model, Model $factory)
    {
        $model = $factory->create($model);

        return view('easy-crud::form', [
            'models' => config('easy-crud.models'),
            'url_base' => config('easy-crud.url_base'),
            'properties' => $model->getFillable(),
        ]);
    }

    public function postCreate($model, Model $factory, Request $request)
    {
        $modelClass = $factory->create($model);

        $modelClass->create($request->all());

        $route = config('easy-crud.url_base') . '/' . $model;

        return redirect($route);
    }

    public function getUpdate($model, $id, Model $factory)
    {
        $model = $factory->create($model);
        
        return view('easy-crud::form', [
            'models' => config('easy-crud.models'),
            'url_base' => config('easy-crud.url_base'),
            'properties' => $model->getFillable(),
            'model' => $model->find($id),
        ]);
    }

    public function postUpdate(
        $modelClass,
        $id,
        Model $factory,
        Request $request
    ) {
        $model = $factory->create($modelClass);

        $model = $model->find($id);

        foreach ($request->all() as $property => $value) {
            $model->$property = $value;
        }

        $model->save();

        $route = config('easy-crud.url_base') . '/' . $modelClass;

        return redirect($route);
    }

    public function getDelete(
        $modelClass,
        $id,
        Model $factory
    ) {
        $model = $factory->create($modelClass);

        $model->find($id)->delete();

        $route = config('easy-crud.url_base') . '/' . $modelClass;

        return redirect($route);
    }
}
