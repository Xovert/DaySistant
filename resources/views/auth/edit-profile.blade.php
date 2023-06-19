@extends('layout.logged-in')
@section('title','Profile')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<section id="Profile">
    <div class="container">
        <form action="{{route('editProfile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row profile-top">
                <div class="col-2">
                    <img src="{{asset('assets/tate.png')}}" alt="picture">
                </div>
                <div class="col-10 gy-5">
                    <h3>{{$user->firstname}} {{$user->lastname}}</h3>
                    <h3>Member since: <span>{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</span></h3>
                </div>
            </div>
            <div id="edit-profile" class="mb-3">
                <a id="edit" href="#"></a>
                <a id="edit" href="{{route('profilePage')}}">Profile</a>
            </div>
            <div class="profile-content">
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Username</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="username" type="text" class="col-9 contents" value="{{$user->username}}"></input>
                </div>
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Full name</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="fullname" type="text" class="col-9 contents" value="{{$user->firstname}} {{$user->lastname}}"></input>
                </div>
                @error('fullname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Birth Date</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="dob" type="date" class="col-9 contents" value="{{$user->dob}}"></input>
                </div>
                @error('dob')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Phone Num.</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="phone" type="number" class="col-9 contents" value="{{$user->phone}}"></input>
                </div>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Address</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="address" type="text" class="col-9 contents" value="{{$user->address}}"></input>
                </div>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row col-12">
                    <h3 class="col-2 menus-edit">Email</h3>
                    <h3 class="col-1 menus-edit">:</h3>
                    <input name="email" type="email" class="col-9 contents" value="{{$user->email}}"></input>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <div class="col-3 menus">
                    <h3>Username</h3>
                    <h3>Full name</h3>
                    <h3>Birth Date</h3>
                    <h3>Phone Num.</h3>
                    <h3>Address</h3>
                    <h3>Email</h3>
                    <h3>Password</h3> 
                </div>
                <div class="col-9 contents">
                    <h3>{{$user->username}}</h3>
                    <h3>{{$user->firstname}} {{$user->lastname}}</h3>
                    <h3>{{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y')}}</h3>
                    <h3>{{$user->phone}}</h3>
                    <h3>{{$user->address}}</h3>
                    <h3>{{$user->email}}</h3>
                    <h3>*************</h3>
                </div> --}}
            </div>
            <div class="logout mt-5">
                <button type="submit" class="btn btn-success btn-lg">Save</button>
                <a href="{{route('profilePage')}}">
                    <div type="" class="btn btn-danger btn-lg">Cancel</div>
                </a>
            </div>
        </form>
    </div>
</section>
@endsection