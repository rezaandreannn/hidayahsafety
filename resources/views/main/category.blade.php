<x-main-layout title="category">
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block mt-5">Kategori Produk</h2>
            </div>

            <div class="special-list row g-0">

                {{-- gambar spesial --}}
                {{-- @forelse ($produksSpesials as $items) --}}

                {{-- @empty --}}
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                            <a href="{{ route('categories.show', $category->id) }}">
                                <li class="list-group-item text-decoration-none">
                                    {{ $category->name }}({{ $category->produks_count }})</li>
                            </a>
                        @endforeach

                    </ul>
                </div>
                {{-- @endforelse --}}
            </div>
        </div>
    </section>

</x-main-layout>
