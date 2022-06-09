<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {


        $produk = Produk::all();
        $category = Category::all();
        $pesan = Message::all();
        return view('dashboard', compact('produk', 'category', 'pesan'));
    }
}
