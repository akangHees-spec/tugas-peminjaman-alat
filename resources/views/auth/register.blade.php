@extends('layouts.app')

@section('title', 'register')
@section('content')
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="assets/img/logo.png" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Username</label>
                                    <input class="form-control" type="text" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <input class="form-control" type="text" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input class="form-control" type="password" name="password" required>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
