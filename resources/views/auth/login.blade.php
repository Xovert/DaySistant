@extends('layout.layout')
@section('title','Login-Page')
@section('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<section id="Register">
    <div class="login-bg"></div>
    <div class="login-content">
        <div class="login-logo">
            <img src="{{asset('assets/dayumsistant2 1.png')}}" alt="">
        </div>
        <div class="login-heading">
            <h5>LOG IN:</h5>
        </div>
        <div class="form">
            <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="register-form">
                    <div class="register-input">
                        <label for="username">Username</label>
                        <br>
                        <input id="username" type="text" name="username" required>
                    </div>
                    <div class="register-input">
                        <label for="password">Password</label>
                        <br>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="forgot">
                        <a href="{{route('password.request')}}">Forgot Password?</a>
                    </div>
                    <div class="register-bottom">
                        <button class="submitBtn" type="submit">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="other">
            <div class="connect">
                <hr>
                <p>or connect with</p>
                <hr>
            </div>
            <div class="other-button">
                <a href="">
                    <img src="{{asset('assets/Google logo.png')}}" alt="">
                    <p>Continue with Google</p>
                </a>
                <a href="">
                    <img src="{{asset('assets/facebook-oval.png')}}" alt="">
                    <p>Continue with Facebook</p>
                </a>
            </div>
            <div class="regist-text">
                Don't have an account? <a href="{{route('register')}}">Sign Up</a> here.
            </div>
        </div>
    </div>
</section>
@endsection