<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(){
        $talleres = [
            'Danza',
            'Baile',
            'Oratoria',
            'Liderazgo',
        ];
        return view('talleres', compact('talleres'));
    }
}