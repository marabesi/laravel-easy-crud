<?php

namespace EasyCrud\Controllers;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{

    public function getIndex()
    {
        $models = config('easy-crud.models');
        
        return view('easy-crud::dashboard', [
            'models' => $models,
            'url_base' => config('easy-crud.url_base'),
        ]);
    }
}
