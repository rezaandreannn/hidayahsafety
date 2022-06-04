<x-app-layout title="Edit-Produk">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit Produk</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <!-- start form for validation -->
            <form id="demo-form" method="POST" action="{{ route('produk.update', $produk->id) }}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- <input type="hidden" name="id" value="{{ $produk->id }}"> --}}
                {{-- inputan produk --}}
                <div class="form-group">
                    <label for="produk">Produk*</label>
                    <input type="text" id="produk" class="form-control @error('produk') is-invalid @enderror"
                        name="produk" value="{{ old('produk', $produk->produk) }}" />
                    @error('produk')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- end inputan produk --}}

                {{-- inputan kategori --}}
                <div class="form-group">
                    <label for="heard" class="mt-2">Kategori*</label>
                    <select id="heard" class="form-control @error('category_id') is-invalid @enderror"
                        name="category_id">
                        <option value="">pilih kategori..</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- end inputan kategori --}}

                {{-- inputan gambar --}}
                <div class="form-group mt-2">
                    <label for="image">Gambar*</label>
                    {{-- cek apakah gambar ada --}}
                    @if ($produk->image)
                        <img src="{{ asset('storage/' . $produk->image) }}" class="img-preview mb-2 d-block"
                            style="width: 300px">
                    @else
                        <img class="img-preview mb-2" style="width: 300px">
                    @endif
                    <input type="hidden" value="{{ $produk->image }}" name="oldImage">
                    <input class="d-block @error('image') is-invalid @enderror" type="file" id="image" name="image"
                        onchange="Live()">
                </div>
                {{-- end inputan gambar --}}

                {{-- inputan spesial --}}
                <div class="form-group">
                    <label for="heard" class="mt-2">Spesial*</label>
                    <select id="heard" class="form-control @error('spesial') is-invalid @enderror" name="spesial">
                        <option value="">pilihan..</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    @error('spesial')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- end inputan spesial --}}

                {{-- deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi" class="mt-2">Deskripsi*</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi"
                        rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                {{-- end deskripsi --}}

                <br />

                {{-- tombol --}}
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
                {{-- end tombol --}}
            </form>
            <!-- end form for validations -->

        </div>
    </div>
    @push('scripts')
    @endpush
</x-app-layout>
