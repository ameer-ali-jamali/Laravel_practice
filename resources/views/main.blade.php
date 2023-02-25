<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">IG Students</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')









        <section>
            <footer class="bg-dark text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>About Us</h5>
                            <p>We are a company dedicated to providing the best products and services to our customers.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h5>Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5>Follow Us</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram fa-lg"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </section>


    </body>

</html>