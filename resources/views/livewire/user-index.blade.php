<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="col-md-6 col-sm-6  ">
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
                <h4>Users</h4>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>
                                    <button wire:click="getUser({{ $user->id }})"
                                        class="badge badge-primary border-0">Edit</button>
                                    <button wire:click="getUsr({{ $user->id }})"
                                        class="badge badge-danger border-0">hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($showFormUpdate)
                    <hr>
                    <button wire:click="back()" class="border-0"><i class="fa fa-times"></i></button>
                    <livewire:user-update>
                    @else
                @endif
            </div>
        </div>
    </div>
</div>
