<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // cuando creamos un metodo invoke solo controla una ruta
    public function __invoke(){

        return view('home');
    

    }
        
    
}
