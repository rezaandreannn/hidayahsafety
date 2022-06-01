<?php

namespace App\Http\Controllers\Main;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SpesialsContoller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $data = Produk::where('spesial', false);
        $data = DB::table('produks')->where('spesial', true)->get();

        return view('main.spesial', [
            'produksSpesials' => $data
        ]);
    }
}
