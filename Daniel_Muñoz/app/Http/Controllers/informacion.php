<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informacion extends Controller
{
    public function index(){
        return view('home');
    }
    public function contactos(){
        return view('Contactenos');
    }
}
