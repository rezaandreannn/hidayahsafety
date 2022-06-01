<x-app-layout>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            @if (session('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $title ?? 'produk' }}</h2>
                    {{-- <ul class="nav navbar-right panel_toolbox">
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
                        </li> --}}
                    </ul>
                    <a href="{{ route('produk.create') }} " class="btn btn-primary" style="float: right">Tambah</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="max-width: 5px">No</th>
                                            <th>Produk</th>
                                            <th>kategori</th>
                                            <th>Image</th>
                                            <th>Spesial</th>
                                            <th>Opsi</th>
                                            {{-- <th>Salary</th> --}}
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($produks as $produk)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $produk->produk }}</td>
                                                <td>{{ $produk->category->name }}</td>

                                                <td>detail
                                                    {{-- <img src="{{ asset('storage/' . $produk->image) }}" alt=""
                                                        style="width: 300px"> --}}
                                                </td>

                                                <td>
                                                    @if ($produk->spesial)
                                                        <span>yes</span>
                                                    @else
                                                        <span>No</span>
                                                    @endif
                                                </td>
                                                <td class="">
                                                    <a href="{{ route('produk.show', $produk->id) }}"><i
                                                            class="fa fa-info fa-2x text-primary"></i></a>
                                                    <a href="http://"><i
                                                            class="fa fa-pencil fa-2x text-warning ml-2"></i></a>
                                                    <form action="{{ route('produk.destroy', [$produk->id]) }}"
                                                        method="post" class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="badge badge-danger border-0 d-inline"
                                                            type="submit"><i
                                                                class="fa fa-trash fa-2x text-white"></i></button>

                                                    </form>
                                                </td>
                                                {{-- <td>$320,800</td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    @endpush
</x-app-layout>
