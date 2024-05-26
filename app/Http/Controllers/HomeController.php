<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ofertas = Produtos::limit(5)->get();

        return view('home', compact('ofertas'));
    }
}
