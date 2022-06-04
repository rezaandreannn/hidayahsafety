<x-app-layout>


    <!-- page content -->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail Produk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="row">
                        <div class="media">
                            <div class="col-md-4">

                                <img src="{{ asset('storage/' . $produk->image) }}" class="card-img-top">

                            </div>
                            <div class="col-md-8">
                                <div class="media-body">
                                    <h5 class="mt-0 ">
                                        {{ $produk->produk }}</h5>
                                    <p class="text-muted"> {{ $produk->category->name }}</p>
                                    <p class="text-muted"> {{ $produk->deskripsi }}</p>
                                    <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
</x-app-layout>
