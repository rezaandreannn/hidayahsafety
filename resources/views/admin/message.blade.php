<x-app-layout title="Produk">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            {{-- pesan flashdata --}}
            @if (session('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            {{-- end pesan flashdata --}}
            <div class="x_panel">
                <div class="x_title">
                    </ul>
                    {{-- tombol tambah produk --}}
                    {{-- <a href="{{ route('produk.create') }} " class="btn btn-primary" style="float: right">Tambah</a> --}}
                    {{-- end tombol tambah produk --}}
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
                                            <th>Username</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th>Pesan</th>
                                            {{-- <th>Opsi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($message as $items)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $items->username }}</td>
                                                <td>{{ $items->no_hp }}</td>
                                                <td>{{ $items->email }}</td>
                                                <td>{{ $items->body }}</td>
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

    {{-- scripts data table --}}
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
    {{-- end scripts data table --}}
</x-app-layout>
