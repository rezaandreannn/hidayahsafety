@if (session('pesan'))
    <div class="card">
        <div class="card-body bg-danger">
            <blockquote class="blockquote mb-0">
                <p class="text-center text-white"><strong>Maaf !</strong> {{ session('pesan') }}</p>
            </blockquote>
        </div>
    </div>
@endif
