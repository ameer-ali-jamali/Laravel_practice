@extends('main')
@section('title','About Us')

@section('content')

<style>
    /* Custom styles */
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f5f5f5;
    }

    .jumbotron {
        background-image: url('https://picsum.photos/id/1018/1200/600');
        background-size: cover;
        height: 300px;
        margin-bottom: 0;
        color: #fff;
        text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.7);
    }

    .jumbotron h1 {
        font-size: 4rem;
    }

    .fa-quote-left,
    .fa-quote-right {
        font-size: 2rem;
        color: #f39c12;
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">IT Students</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">About Us</h1>
        <p class="lead"><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Donec euismod urna eu quam elementum, sit amet semper elit gravida. Sed semper posuere orci,
            eu fermentum massa imperdiet sed. <i class="fas fa-quote-right"></i></p>
    </div>
</div>

<!-- Main content -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Who We Are</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod urna eu quam elementum,
                sit amet semper elit gravida. Sed semper posuere orci, eu fermentum massa imperdiet sed.


                @endsection