<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdukRequest;
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
        //menampilkan data produk with n+1
        return view('admin.index', [
            'produks' => Produk::with('category')->latest()->get()
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
    public function store(ProdukRequest $request)
    {
        // vaildasi inputan produk dari Produk request
        $validated = $request->validated();

        // cek apakah ada gambar, jika ada simpan ke storage 
        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('produk-images');
        }

        // simpan ke dalam database
        Produk::create($validated);

        // jika sukses, kembali ke page dan return alert
        return redirect('produk')->with('success', 'berhasil menambah data produk!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // cek id yang dikirem dari params
        $data = Produk::find($id);

        // mengirimkan data detail berdasarkan id ke view
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
        // cek id yang dikirem dari params
        $data = Produk::find($id);

        // menampilkan data berdasarkan id ke form edit
        return view('admin.edit', [
            'produk' => $data,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
        //validasi inputan dari produk request
        $validated = $request->validated();

        // cek apakah ada gambar baru, jika ada simpan ke storage 
        if ($request->file('image')) {
            // hapus gambar lama
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('produk-images');
        }

        // simpan ke db berdasarkan param
        Produk::where('id', $id)
            ->update($validated);

        // kembali ke page index with alert
        return redirect('produk')->with('success', 'berhasil mengubah data produk!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        // cek jika ada gambar, hapus dulu gambar yg ada di storage 
        if ($produk->image) {
            Storage::delete($produk->image);
        }

        // proses hapus
        Produk::destroy($produk->id);

        // kembali ke page produk with alert
        return redirect('produk')->with('success', 'berhasil menghapus data produk!');
    }
}
