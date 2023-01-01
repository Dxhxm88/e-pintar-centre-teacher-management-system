@extends('layout.app')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
                <div class="card-body p-5">
                <form class="mb-3 mt-md-4">
                    <h2 class="fw-bold mb-2 text-uppercase ">Teacher Sign up</h2>
                    <p class=" mb-5">Please enter your email and password!</p>
                    <div class="mb-3">
                        <label for="name" class="form-label ">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label ">Phone</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label ">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="*******">
                    </div>
                    <p class="small">Already have an account? <a class="text-primary" href="#">Login here</a></p>
                    <div class="d-grid">
                        <button class="btn btn-outline-dark" type="submit">Sign up</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
