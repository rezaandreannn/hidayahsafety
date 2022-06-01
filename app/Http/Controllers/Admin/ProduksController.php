<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data produk
        return view('admin.index', [
            'produks' => Produk::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('produk-images');
        $validated = $request->validate([
            'produk' => 'required',
            'category_id' => 'required',
            'harga' => 'd',
            'image' => 'image|file',
            'spesial' => 'required'
        ]);

        if ($request->file('image')) {
            # code...
            $validated['image'] = $request->file('image')->store('produk-images');
        }

        Produk::create($validated);
        return redirect('produk')->with('success', 'berhasil menambah data produk !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produk::find($id);
        return view('admin.show', [
            'produk' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {

        // $data = Produk::find($produk->id);
        // $data->delete();

        if ($produk->image) {
            Storage::delete($produk->image);
        }

        Produk::destroy($produk->id);

        return redirect('produk')->with('success', 'berhasil menghapus data produk !');
    }
}
