<x-app-layout>
    view detail
    <div class="card" style="width: 50%">
        <img src="{{ asset('storage/' . $produk->image) }}" class="card-img-top" alt="{{ $produk->produk }}">
        <div class="card-body">
            <h5 class="card-title">{{ $produk->produk }}</h5>
            <p class="card-text">{{ $produk->category->name }}</p>
            <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</x-app-layout>
