# easy-crud

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ef2320108a8747efbdd32cb36294c2e7)](https://www.codacy.com/app/matheus-marabesi/easy-crud?utm_source=github.com&utm_medium=referral&utm_content=marabesi/easy-crud&utm_campaign=badger)
[![Build Status](https://travis-ci.org/marabesi/laravel-easy-crud.svg?branch=master)](https://travis-ci.org/marabesi/laravel-easy-crud)
[![Latest Stable Version](https://poser.pugx.org/marabesi/easy-crud/v/stable)](https://packagist.org/packages/marabesi/easy-crud)
[![Total Downloads](https://poser.pugx.org/marabesi/easy-crud/downloads)](https://packagist.org/packages/marabesi/easy-crud)
[![Latest Unstable Version](https://poser.pugx.org/marabesi/easy-crud/v/unstable)](https://packagist.org/packages/marabesi/easy-crud)
[![License](https://poser.pugx.org/marabesi/easy-crud/license)](https://packagist.org/packages/marabesi/easy-crud)
[![composer.lock](https://poser.pugx.org/marabesi/easy-crud/composerlock)](https://packagist.org/packages/marabesi/easy-crud)

(Laravel 5+) Simple and effective way to generate CRUD from your models or database

## Version Compatibility

 Laravel  | EasyCrud
:---------|:----------
 4.x.x    | Not supported
 5.0.x    | Not supported
 5.1.x    | Not supported
 5.2.x    | 1.0.x
 5.3.x    | Not supported
 5.4.x    | Not supported
 5.5.x    | Not supported

# What you can do?

- Generate CRUD from Laravel models
- Generate CRUD from database table (not ready)

# Powered by Gentelella theme
![Gentelella Bootstrap Admin Template](https://cdn.colorlib.com/wp/wp-content/uploads/sites/2/gentelella-admin-template-preview.jpg "Gentelella Theme Browser Preview")

# Features

- Friendly admin to manage your data (CRUD)
- Prevent collisions with defined routes
- Beautiful admin template

# Installing

```
composer require marabesi/easy-crud
```

Update the service provider list

```php
'providers' => [
    EasyCrud\Providers\EasyCrud::class,
]
```

Publish the vendor assets to you current project

```
artisan vendor:publish
```

Now, you should have a file called `easy-crud.php` inside your config folder, open it and edit as you wish.

```php
<?php

return [
    /**
     * All models that should have a CRUD. The key of the element will
     * appear as the menu label in the admin area
     */
    'models' => [
        'Users' => \App\User::class
    ],

    /**
     * URL that should be used to access the gentella admin
     * where you can manage all models that have CRUD
     */
    'url_base' => '/admin',

    /**
     * You might want to have some validation before accessing
     * the gentela admin, to achieve that, just inform the middleware 
     * class name in the array. It will go through each middleware declared 
     * above.
     */
    'middlewares' => [
    ]
];
```

Add every model that you want to see in the admin in the `models` array, the 
key should be the label name. It will appear in the admin area.
