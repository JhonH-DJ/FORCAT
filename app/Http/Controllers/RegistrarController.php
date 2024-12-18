<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function Registrar()
    { 
        return view('Partials.registrar');
    }
    
}
