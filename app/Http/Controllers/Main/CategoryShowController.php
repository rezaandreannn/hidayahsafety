<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class CategoryShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $produksByCategory = Produk::with('category')
            ->where('category_id', $id)
            ->get();
        // $category = Category::find($id)->withCount('produks');
        $category = Category::withCount('produks')->find($id);
        return view('main.category-show', compact('produksByCategory', 'category'));
        // dd($id);
    }
}
