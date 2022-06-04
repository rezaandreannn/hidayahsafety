<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | {{ $title }}</title>
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/guest/images/logo.ico') }}">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/guest/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/guest/css/main.css') }}">
    @livewireStyles
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.html">
                <img src="{{ asset('assets/guest/images/title-logo.png') }}" alt="site icon">
                <span class="text-uppercase fw-lighter ms-2 judul">Hidayah safety indonesia</span>
            </a>

            <div class="order-lg-2 nav-btns">
                {{-- <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-heart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-search"></i>
                </button> --}}
            </div>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{ route('collection') }}">home</a>
                    </li>
                    {{-- <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="/collection">collection</a>
                    </li> --}}
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{ route('spesial') }}">specials</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{ route('about') }}">about us</a>
                    </li>
                    {{-- <li class="nav-item px-2 py-2 border-0">
                        <a class="nav-link text-uppercase text-dark" href="#popular">popular</a>
                    </li> --}}
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="{{ route('contact') }}">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->




    <!-- about us -->
    {{ $slot }}
    <!-- end of about us -->





    <!-- footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white"
                        href="index.html">{{ config('app.name') }}</a>
                    <p class="text-white text-muted mt-3">Kami Juga termasuk Supplier dan Distributor Perlengkapan
                        Safety dan Peralatan Keselamatan Kerja
                        di Jakarta. Berbagai macam alat keselamatan kerja kami sediakan untuk memenuhi kebutuhan anda.
                    </p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="{{ route('collection') }}" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('spesial') }}" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Spesial
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('about') }}" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('contact') }}" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i> Contact Me
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Contact Us</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="fw-light">
                            LTC Glodok, Lantai GF1, Blok C8, No. 6, Jl. Hayam Wuruk No.127, RT.1/RW.6, Mangga Besar,
                            Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11180
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                            hidayahsafetyindonesia16@gmail.com
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            +628 9649 9335 42
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->




    <!-- jquery -->
    <script src="{{ asset('assets/guest/js/jquery-3.6.0.js') }}"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/guest/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/guest/js/script.js') }}"></script>
    @livewireScripts
</body>

</html>
