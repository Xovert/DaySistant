@extends('layout.layout')
@section('title','Login-Page')
@section('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<section id="Register">
    <div class="login-bg"></div>
    <div class="login-content">
        <div class="login-heading">
            <h1>LOG IN:</h1>
        </div>
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
                <div class="register-bottom">
                    <button class="submitBtn" type="" submit>Sign In</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection