<x-main-layout>
    <x-corousel />

    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">Produk Kami</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6">
                        <form action="" method="get">
                            <div class="input-group mb-3 mt-2">
                                <input type="text" class="form-control" name="search"
                                    placeholder="Cari nama produk">
                                <button class="btn bg-primary text-white border-0" type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                {{-- <div class="d-flex flex-wrap my-5 ">
                </div> --}}

                @forelse ($produks as $produk)
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 {{ $produk->category->name }}">
                        <div class="collection-img position-relative">
                            <a href="http://">
                                <img src="{{ asset('storage/' . $produk->image) }}" class="w-100 img-fluid">

                            </a>
                            {{-- kondisi jika ada produk yang spesisl --}}
                            @if ($produk->spesial == true)
                                <span
                                    class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center"><i
                                        class="fas fa-award fa-2x"></i></span>
                            @endif
                        </div>
                        <div class="text-center">
                            <p class="text-capitalize my-2">
                                {{ $produk->produk }}
                                <a href="http://" class="badge bg-primary border-0 text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal{{ $produk->id }}">detail</a>
                            </p>
                            <x-call />

                            </p>
                            <span class="fw-bold">
                                <div class="row">
                                    {{-- <a href="http://" class="badge bg-primary">Call me</a> --}}
                                    {{-- <a href="http://" class="badge bg-primary">Call me</a> --}}
                                </div>
                            </span>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center">Data Tidak ada. </h5>
                @endforelse
                <div class="row d-flex ">

                    <div class="col justify-content-center">
                        {{ $produks->links() }}

                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </section>
    <!-- end of collection -->

    <!-- Modal -->
    @foreach ($produks as $produk)
        <div class="modal fade" id="exampleModal{{ $produk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail : {{ $produk->produk }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="special-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $produk->image) }}" class="w-100">
                                    {{-- <span
                                        class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
                                        <i class="fas fa-award"></i>
                                    </span> --}}
                                    @if ($produk->spesial == true)
                                        <span
                                            class="position-absolute text-white d-flex align-items-center justify-content-center"><i
                                                class="fas fa-award fa-2x text-primary"></i></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                    <span class="fw-bold">Category</span> <br><span
                                        class="text-muted">{{ $produk->category->name }}</span>
                                </p>
                                <hr>
                                <p>
                                    <span class="fw-bold">Deskripsi</span> <br><span
                                        class="text-muted">{{ $produk->deskripsi }}</span>
                                </p>
                                <p>
                                    <x-call />
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
