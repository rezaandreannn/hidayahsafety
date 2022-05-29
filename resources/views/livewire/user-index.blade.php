<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="col-md-6 col-sm-6  ">
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
                                    {{-- <a href="http://" class="badge badge-primary">Edit</a>
                                    <a href="http://" class="badge badge-danger">delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($showFormUpdate)
                    <hr>
                    <button wire:click="back()" class="border-0 justify-content-end"><i
                            class="fa fa-times"></i></button>
                    <livewire:user-update>
                    @else
                @endif
            </div>
        </div>
    </div>
</div>
