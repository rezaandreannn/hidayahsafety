<x-main-layout title="Contact-Me">
    {{-- <x-corousel /> --}}
    <div class="container py-5 mt-5">
        @if (session('success'))
            <div class="alert bg-primary text-white text-center alert-dismissible fade show mt-5" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card my-5 ">
            <h5 class="card-header bg-primary text-white text-uppercase text-center">Contact Me</h5>
            <div class="card-body">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Hidayah safety indonesia" value="{{ old('username') }}">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="089649933542"
                            value="{{ old('no_hp') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                            placeholder="hidayahsafetyindonesia16@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                name="body"></textarea>
                            {{-- <label for="floatingTextarea2">Pesan</label> --}}
                        </div>
                    </div>
                    <button type="submit" class="btn bg-primary text-white"
                        style="float: right !important">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.882053100003!2d106.816755!3d-6.14654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7e13ecd82d1%3A0x945ac288221e4cba!2sSEPATU%20SAFETY%20-%20HIDAYAH%20SAFETY%20INDONESIA!5e0!3m2!1sid!2sid!4v1654355355146!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</x-main-layout>
