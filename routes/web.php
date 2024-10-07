<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

use App\Http\Controllers;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class);


Route::controller(CursoController::class)->group(function(){
    //crear una ruta
Route::get('cursos', 'index' );
Route::get('cursos/create', 'create' );
Route::get('cursos/{cursos}', 'show' );

});


