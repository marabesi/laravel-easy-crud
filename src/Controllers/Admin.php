<?php

namespace EasyCrud\Controllers;

use App\Http\Controllers\Controller;

class Admin extends Controller
{

    public function getIndex()
    {
        $config = config('easy-crud.models');
        
        return view('easy-crud::layout');
    }
}