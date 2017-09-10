<?php

namespace EasyCrud\Controllers;

use Illuminate\Routing\Controller as Controller;

class Dashboard extends Controller
{

    public function getIndex()
    {
        return view('easy-crud::dashboard');
    }
}
