<?php

namespace EasyCrud\Factory;

class Model
{
    public function create($class)
    {
        $className = str_replace('-', '\\', $class);

        return new $className();
    }
}
