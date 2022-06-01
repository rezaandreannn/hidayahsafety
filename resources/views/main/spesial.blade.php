<x-main-layout title="Spesial">
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block mt-5">Special Selection</h2>
            </div>

            <div class="special-list row g-0">

                {{-- gambar spesial --}}
                @foreach ($produksSpesials as $items)
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                        <div class="special-img position-relative overflow-hidden">
                            <img src="{{ asset('storage/' . $items->image) }}" class="w-100">
                            <span
                                class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                <i class="fas fa-award"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <p class="text-capitalize mt-3 mb-1">{{ $items->produk }}</p>
                            <span class="fw-bold d-block">$ 45.50</span>
                            {{-- <a href="#" class="btn btn-primary mt-3">Add to Cart</a> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-main-layout>
