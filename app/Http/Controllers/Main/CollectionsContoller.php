<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class CollectionsContoller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cari = $request->search;
        // dd($cari);
        if ($cari) {
            $produks = Produk::with('category')
                ->where('produk', 'like', "%" . $cari . "%")->paginate(12);
        } else {
            $produks = Produk::with('category')->paginate(12);
        }

        return view('main.collection', [
            'produks' => $produks,
            'categories' => Category::all()
        ]);
    }
}
