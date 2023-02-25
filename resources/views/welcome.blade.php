@extends('main')
@section('title','HomePage')

@section('content')
<!-- Registration form and image -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Register</h3>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" onclick="submitForm()" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="https://pixlr.com/images/index/remove-bg.webp" alt="My Image" class="img-fluid">
        </div>
    </div>

</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    function submitForm(formId) {
            // Get the form element
            // var form = document.getElementById(formId);

            // // Submit the form
            // form.submit();

            // // Execute your command (e.g. using AJAX)
            // ...

            // Display the alert
            alert('Form submitted successfully!');
            }
</script>

@endsection