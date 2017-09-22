<?php

namespace EasyCrud\Controllers;

use Illuminate\Routing\Controller as Controller;

class Dashboard extends Controller
{

    public function __construct()
    {
        $middlewares = config('easy-crud.middlewares');

        foreach ($middlewares as $middleware) {
            $this->middleware($middleware);
        }
    }

    public function getIndex()
    {
        return view('easy-crud::dashboard');
    }
}
