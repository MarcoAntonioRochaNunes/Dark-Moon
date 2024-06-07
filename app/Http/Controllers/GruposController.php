<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    public function index()
    {
        return view('lista');
    }
}
