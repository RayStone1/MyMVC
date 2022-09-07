<?php

use App\Controllers\MainController;
use App\Route;

Route::get('/',[MainController::class,'index']);

$REQUEST_URI = explode('?', $_SERVER['REQUEST_URI'])[0];
if(!in_array($REQUEST_URI, Route::$routes)){
    echo '<h1>Страница не существует</h1>';
}
