<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Produk $produk)
    {
        $categories = Category::withCount('produks')->get();
        return view('main.category', compact('categories'));
    }
}
