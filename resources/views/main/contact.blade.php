<x-main-layout>
    {{-- <x-corousel /> --}}
    <div class="container py-5 mt-5">
        <div class="card my-5 ">
            <h5 class="card-header bg-primary text-white text-uppercase text-center">Contact Me</h5>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="masukan username anda ">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="masukan no hp anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Pesan</label>
                        </div>
                    </div>




                    <button type="submit" class="btn bg-primary text-white"
                        style="float: right !important">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-main-layout>
