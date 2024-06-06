@extends('template/template')

@section('content')

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="underline-heading inter-heading">
                        HOBBY
                    </h1>
                    <!-- Tambahkan gambar di bawah garis -->
                    <div class="hobby-images">
                        <img src="{{ asset('img/basketball.jpeg') }}" alt="Hobby Image 1" class="hobby-image">
                        <img src="{{ asset('img/song.jpeg') }}" alt="Hobby Image 2" class="hobby-image">
                        <img src="{{ asset('img/shop.jpeg') }}" alt="Hobby Image 3" class="hobby-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection