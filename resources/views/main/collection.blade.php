<x-main-layout>
    <x-corousel />
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type="button" class="btn m-2 text-dark active-filter-btn" data-filter="*">All</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".feat">Featured</button>
                    <button type="button" class="btn m-2 text-dark" data-filter=".new">New Arrival</button>
                </div>

                {{-- <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="images/c_formal_gray_shirt.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div> --}}

                {{-- <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="images/c_pant_girl.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div> --}}

                <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                    <div class="collection-img position-relative">
                        <img src="{{ asset('assets/guest/images/c_polo-shirt.png') }}" class="w-100">
                        <span
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class="text-center">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <p class="text-capitalize my-1">gray shirt</p>
                        <span class="fw-bold">$ 45.50</span>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="images/c_shirt-girl.png" class="w-100">
                            <span
                                class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                        </div>
                        <div class="text-center">
                            <div class="rating mt-3">
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                                <span class="text-primary"><i class="fas fa-star"></i></span>
                            </div>
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div> --}}






                <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection-img position-relative">
                        <img src="{{ asset('assets/guest/images/c_western-shirt.png') }}" class="w-100">
                        <span
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class="text-center">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <p class="text-capitalize my-1">gray shirt</p>
                        <div class="d-block">
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 1</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 2</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection-img position-relative">
                        <img src="{{ asset('assets/guest/images/c_western-shirt.png') }}" class="w-100">
                        <span
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class="text-center">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <p class="text-capitalize my-1">gray shirt</p>
                        <div class="d-block">
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 1</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 2</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection-img position-relative">
                        <img src="{{ asset('assets/guest/images/c_western-shirt.png') }}" class="w-100">
                        <span
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class="text-center">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <p class="text-capitalize my-1">gray shirt</p>
                        <div class="d-block">
                            <a href="https://api.whatsapp.com/send?phone=6282269710878"
                                class="badge rounded-pill bg-primary" target="blink">
                                <span class="text-white text-sm">Call Me 1</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6282269710878"
                                class="badge rounded-pill bg-primary" target="blink">
                                <span class="text-white">Call Me 2</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                    <div class="collection-img position-relative">
                        <img src="{{ asset('assets/guest/images/c_western-shirt.png') }}" class="w-100">
                        <span
                            class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                    </div>
                    <div class="text-center">
                        <div class="rating mt-3">
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                            <span class="text-primary"><i class="fas fa-star"></i></span>
                        </div>
                        <p class="text-capitalize my-1">gray shirt</p>
                        <div class="d-block">
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 1</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=6282269710878" class="btn bg-primary"
                                target="blink">
                                <span class="text-white">Call Me 2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-main-layout>
