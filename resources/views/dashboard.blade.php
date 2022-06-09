<x-app-layout title="Dashboard">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <div id="reportrange" class="pull-right ml-auto"
                style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="fa fa-calendar"></i>
                <span>Jun 07, 2022 - {{ date('M') }} {{ date('d') }}, {{ date('Y') }} </span> <b
                    class="caret"></b>
            </div>
        </div>
    </div>
    <div class="row mt-4" style="display: inline;">
        <div class="tile_count">
            <div class="col-md-4 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Produk</span>
                <div class="count">{{ $produk->count() }}</div>
                <span class="count_bottom">
                    <a href="{{ route('produk.index') }}">
                        <i class="green">Lihat ♐</i>
                    </a>
                </span>
            </div>
            <div class="col-md-4 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Kategori Produk</span>
                <div class="count">{{ $category->count() }}</div>
                <span class="count_bottom">
                    <a href="{{ route('category.index') }}">
                        <i class="green">Lihat ♐</i>
                    </a>
                </span>
            </div>
            <div class="col-md-4 col-sm-6  tile_stats_count">
                <span class="count_top"><i class="fa fa-envelope"></i> Pesan Masuk</span>
                <div class="count">{{ $pesan->count() }}</div>
                <span class="count_bottom">
                    <a href="{{ route('message.index') }}">
                        <i class="green">Lihat ♐</i>
                    </a>
                </span>
            </div>
        </div>
    </div>

</x-app-layout>
