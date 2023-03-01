@extends('main')
@section('title', 'About Us')

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

<!-- Jumbotron -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">About Us</h1>
        <p class="lead"><i class="fas fa-quote-left"></i>Welcome to IT Students, a platform dedicated to helping
            students learn and excel in the field of information technology.

            Our mission is to provide students with the tools and resources they need to succeed in their academic and
            professional
            pursuits. Whether you are just starting out in your IT education or you are a seasoned professional, our
            website offers
            a wealth of information and support to help you reach your goals.<i class="fas fa-quote-right"></i></p>
    </div>
</div>

<!-- Main content -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Who We Are</h2>
            <P>Our team consists of experienced IT professionals and educators who are passionate about sharing their
                knowledge and
                expertise with others. We strive to create a supportive and collaborative community where students can
                learn from one
                another and grow together.

                At IT Students, we offer a wide range of resources and services to support your learning journey. Our
                website features
                articles, tutorials, and guides on a variety of IT topics, from programming and web development to
                cybersecurity and
                data analytics. We also offer online courses and certification programs to help you gain the skills and
                credentials you
                need to advance


                <!-- Jumbotron -->
            <div class="jumbotron">
                <div class="container-fluid">
                    <h1 class="display-3">About Us</h1>
                    <p class="lead"><i class="fas fa-quote-left"></i>Our team consists of experienced IT professionals
                        and educators who are passionate about sharing their
                        knowledge and
                        expertise with others. We strive to create a supportive and collaborative community where
                        students can
                        learn from one
                        another and grow together.<i class="fas fa-quote-right"></i></p>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Who We Are</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod urna eu
                        quam elementum,
                        sit amet semper elit gravida. Sed semper posuere orci, eu fermentum massa
                        imperdiet sed.</P>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection