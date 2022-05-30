<div class="row">

    <div class="col-md-6 col-sm-6 ">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="x_panel">
            <div class="x_title">

                <h4>Kategori</h4>
                <div class="clearfix"></div>
            </div>
            <button wire:click="formAdd()" class="btn btn-primary" style="float: right">Tambah</button>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Dibuat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <td>
                                    <button wire:click="getCategory({{ $category->id }})"
                                        class="badge badge-primary border-0">Edit</button>
                                    <button wire:click="getUsr({{ $category->id }})"
                                        class="badge badge-danger border-0">hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- @if ($showFormUpdate)
                            <hr>
                            <button wire:click="back()" class="border-0"><i class="fa fa-times"></i></button>
                            <livewire:user-update>
                            @else
                        @endif --}}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        @if ($form)
            <div>
                <div class="card">
                    <div class="card-header">
                        <button wire:click=back()>
                            <span class="text-right"><i class="fa fa-arrow-circle-left"> Kembali</i></span>
                        </button>
                    </div>
                    <div class="card-body">
                        @if ($edit)
                            @livewire('category.update')
                        @else
                            @livewire('category.created')
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
