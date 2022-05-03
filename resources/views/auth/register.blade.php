@extends('layouts.layout')
@section('container')
    <div class="container-fluid h-custom login">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="/register" method="post">
                @csrf
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <a type="button" class="btn btn-primary btn-floating mx-1" href="/auth/google">
                        <i class="bi bi-google"></i>
                        </a>
                        <a type="button" class="btn btn-primary btn-floating mx-1" href="/auth/facebook">
                        <i class="bi bi-facebook"></i>
                        </a>

                        <a type="button" class="btn btn-primary btn-floating mx-1" href="/auth/linkedin">
                        <i class="bi bi-linkedin"></i>
                        </a>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Enter an username" name="name"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter a valid email address" name="email"/>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password"/>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="/login"
                            class="link-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection