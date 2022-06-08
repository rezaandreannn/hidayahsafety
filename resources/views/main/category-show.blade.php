<x-main-layout title="Spesial">
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block mt-5">Produk By Kategori {{ $category->name }}
                    @if ($category->produks_count)
                        <a href="{{ route('categories') }}" class="btn btn-info mt-1">Kembali</a>
                    @endif
                </h2>
            </div>

            <div class="special-list row g-0">
                {{-- gambar spesial --}}
                @forelse ($produksByCategory as $items)
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                        <div class="special-img position-relative overflow-hidden">
                            <img src="{{ asset('storage/' . $items->image) }}" class="w-100">
                            @if ($items->spesial)
                                <span
                                    class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                    <i class="fas fa-award"></i>
                                </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <p class="text-capitalize fw-bold mt-3 mb-1">
                                {{ $items->produk }}
                                <a href="#" class="badge bg-primary border-0 text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal{{ $items->id }}">detail</a>
                            </p>
                            <p>
                                <a href="http://" class="badge bg-primary text-decoration-none fst-italic fw-light">call
                                    1</a>
                                <a href="http://" class="badge bg-primary text-decoration-none fst-italic fw-light">call
                                    2</a>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-body bg-primary">
                            <blockquote class="blockquote mb-0">
                                <p class="text-center">kategori belum tersedia. 😓
                                    <a href="{{ route('categories') }}">
                                        Kembali
                                    </a>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>



    <!-- Modal -->
    @foreach ($produksByCategory as $items)
        <div class="modal fade" id="exampleModal{{ $items->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail : {{ $items->produk }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="special-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $items->image) }}" class="w-100">
                                    <span
                                        class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                        <i class="fas fa-award"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                    <span class="fw-bold">Category</span> <br><span
                                        class="text-muted">{{ $items->category->name }}</span>
                                </p>
                                <hr>
                                <p><span class="fw-bold">Deskripsi</span> <br><span
                                        class="text-muted">{{ $items->deskripsi }}</span></p>
                                <p>
                                    <a href="http://" class="badge bg-primary text-decoration-none">call 1</a>
                                    <a href="http://" class="badge bg-primary text-decoration-none">call 2</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="badge bg-primary border-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-main-layout>
