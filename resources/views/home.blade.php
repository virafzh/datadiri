@extends('template/template')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Depan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
</head>
@section('content')

<body>
    <div class="head">
        <img src="{{ asset('img/vra.jpg') }}" alt="me" class="w-100 h-auto">
    </div>
    <div class="container pb-2 pt-4">
        <div class="card-body border rounded-4 shadow p-3">
        <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="underline-heading inter-heading">
                        HOBBY
                    </h1>
                </div>
        </div>  
        <div id="carousel-foto-dua" data-aos="fade-up" data-aos-duration="1500" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="2" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/basketball.jpeg') }}" class="d-block w-100" onclick="util.modal(this)">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/song.jpeg') }}" class="d-block w-100" onclick="util.modal(this)">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/shop.jpeg') }}" class="d-block w-100" onclick="util.modal(this)">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/editing.jpeg') }}" class="d-block w-100" onclick="util.modal(this)">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="underline-heading inter-heading">
                        DAILY ACTIVITY
                    </h1>
                    <!-- Tambahkan gambar di bawah garis -->
                    <div class="hobby-images">
                        <img src="{{ asset('img/coding.jpeg') }}" alt="activity 1" class="hobby-image">
                        <img src="{{ asset('img/drakor.jpeg') }}" alt="activity 2" class="hobby-image">
                        <img src="{{ asset('img/makeup.jpeg') }}" alt="activity 3" class="hobby-image">
                        <img src="{{ asset('img/scrolltiktok.jpeg') }}" alt="activity 1" class="hobby-image">                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection