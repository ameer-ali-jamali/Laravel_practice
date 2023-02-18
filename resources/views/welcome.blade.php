@extends('main')
@section('title','HomePage')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid bg-primary text-white">
                <div class="container">
                    <h1 class="display-4">Welcome to My Website!</h1>
                    <p class="lead">This is a website landing page built using Bootstrap classes in a Laravel .blade
                        file syntax.</p>
                    <hr class="my-4">
                    <p>Learn more about what we do and how we can help you.</p>
                    <a class="btn btn-light btn-lg" href="#" role="button">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="https://picsum.photos/500/300?random=1" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card Title 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="https://picsum.photos/500/300?random=2" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card Title 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                        Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection