<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index($id)
    {

        $produto = $this->produto($id);
        return view('products', compact('produto'));
    }

    public function produto($id)
    {
        $data = Produtos::find($id);

        return $data;
    }
}
