@extends('layout.index')

@section('content')

<header class="masthead text-dark text-center" style="background: rgb(188, 191, 238);">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="img-fluid img-thumbnail rounded-circle" style="width:300px; height:300px;" src="assets/img/avatar.png" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Websiteku</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-dark">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Mahasiswa | Pemrograman Web LARAVEL</p>
    </div>
</header>
@endsection
