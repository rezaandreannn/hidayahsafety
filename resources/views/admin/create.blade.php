<x-app-layout>
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Kategori</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <!-- start form for validation -->
            <form id="demo-form" method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="produk">Produk*</label>
                    <input type="text" id="produk" class="form-control @error('produk') is-invalid @enderror"
                        name="produk" value="{{ old('produk') }}" />
                    @error('produk')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

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

                {{-- <img class="img-preview mb-2 col-sm-5"> --}}
                <div class="form-group mt-2">
                    <label for="image">Image*</label>
                    <img class="img-preview mb-2" style="width: 300px">
                    <input class="d-block @error('image') is-invalid @enderror" type="file" id="image" name="image"
                        onchange="Live()">
                    {{-- @error('image') --}}
                    <span class="invalid-feedback">
                        test
                    </span>
                    {{-- @enderror --}}
                </div>

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

                <br />
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
                {{-- <button type="reset" class="btn btn-danger">kembali</button> --}}

            </form>
            <!-- end form for validations -->

        </div>
    </div>
    @push('scripts')
    @endpush
</x-app-layout>
