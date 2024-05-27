<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produtos;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ofertas = Produtos::limit(5)->where('oferta', '!=', null)->get();
        $dataUmMesDepois = Carbon::now()->addMonths(1);
        $dataFormatada = $dataUmMesDepois->format('Y-m-d H:i:s');
        $lancamentos = Produtos::limit(5)->where('created_at', '<', $dataFormatada)->get();
        $categorias = Category::all();

        return view('home', compact('ofertas', 'lancamentos', 'categorias'));
    }
}
