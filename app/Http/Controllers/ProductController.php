<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Busca todos os produtos carregando os itens vinculados
        $products = Product::with('itens')->get();

        return view('products.index', compact('products'));
    }
}