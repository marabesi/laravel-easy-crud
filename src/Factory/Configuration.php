<?php

namespace EasyCrud\Factory;

class Configuration
{
    public function create($option = null)
    {
        if ($option) {
            return config('easy-crud.' . $option);
        }

        return config('easy-crud');
    }
}