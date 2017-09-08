<?php

$base = config('easy-crud.url_base');

Route::controller($base . '/{model}', 'EasyCrud\Controllers\Crud');
Route::controller($base, 'EasyCrud\Controllers\Dashboard');
