@extends('layout.layout')
@section('title','Register-Page')
@section('style')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<section id="Register">
    <div class="container">
        <div class="row2">
            <div class="col">
                <h1>Registration</h1>
            </div>
            <div class="col">
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>General Information</h3>
                    <hr>
                    <div class="col-12 mb-3">
                        <label class="visually-hidden" for="inlineFormSelectPref">Sign up as a</label>
                        <select name="role" class="form-select" id="inlineFormSelectPref">
                            <option selected>Sign up as a</option>
                            <option value="User">User</option>
                            <option value="Assistant">Assistant</option>
                        </select>
                    </div>
                    @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" id="formGroupExampleInput"
                            placeholder="Username" value="{{old('username')}}">
                    </div>
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="firstname" class="form-control" placeholder="First name"
                                aria-label="First name" value="{{old('firstname')}}">
                        </div>
                        <div class="col">
                            <input type="text" name="lastname" class="form-control" placeholder="Last name"
                                aria-label="Last name" value="{{old('lastname')}}">
                        </div>
                    </div>
                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control"
                            value="{{old('password_confirmation')}}" placeholder="Re-Password">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <h3>Details</h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Birth Date</label>
                        <input type="date" name="dob" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old('dob')}}">
                    </div>
                    @error('dob')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <textarea type="text" name="address" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old('address')}}" placeholder="e.g. 356 August Lane, Louisiana 71301"></textarea>
                    </div>
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old('phone')}}" placeholder="011122224444">
                    </div>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{old('email')}}" placeholder="example@gmail.com">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-light"><b>Register</b></button>
                    </div>
                </form>
            </div>
            <div class="bottom-reg col">
                <p>Already have an account? <a href="{{route('login')}}">Log In</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
