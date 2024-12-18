<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       return view('Clients.index'); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.create');}
    
        //
    }
