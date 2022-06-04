<x-main-layout>
    <x-corousel />

    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>



            <div class="row g-0">
                <div class="d-flex flex-wrap my-5 ">

                    <ul class="nav">
                        @foreach ($categories as $category)
                            <li class="nav-item ">
                                <a class="nav-link text-decoration-none text-muted"
                                    href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    {{-- <div class="row">
                        <div class="col-md-6">
                            <form action="" method="GET">
                                @csrf
                                <div class="row ml-auto">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control w-auto">
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn bg-primary d-inline">Submit</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded" placeholder="Cari"
                                    aria-label="Recipient's username">
                                <button class="border-0 rounded bg-primary text-white" type="submit"
                                    id="button-addon2">Button</button>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button> --}}
                    {{-- @foreach ($categories as $category)
                        <button type="button" class="btn m-2 text-dark"
                            data-filter=".slug">{{ $category->name }}</button>
                    @endforeach --}}
                    {{-- {{-- <button type="button" class="btn m-2 text-dark" data-filter=".best">best</button> --}}
                    {{-- <button type="button" class="btn m-2 text-dark" data-filter=".best">Featured</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrival</button> --}}
                </div>

                @foreach ($produks as $produk)
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
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">{{ $produk->produk }}</p>
                            {{-- <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et,
                                tenetur eaque deleniti illo
                                eius quas labore nihil ipsam culpa perferendis!</p> --}}
                            <p class="text-muted" style="font-weight: 200">category :
                                {{ $produk->category->name }}</p>
                            <span class="fw-bold">
                                <div class="row">
                                    {{-- <a href="http://" class="badge bg-primary">Call me</a> --}}
                                    {{-- <a href="http://" class="badge bg-primary">Call me</a> --}}
                                </div>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- </div> --}}
    </section>
    <!-- end of collection -->
</x-main-layout>
