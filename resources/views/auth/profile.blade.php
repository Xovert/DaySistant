@extends('layout.logged-in')
@section('title','Profile')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<section id="Profile">
    <div class="container">
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
            @if ($user->role == 'Assistant')
            <a id="edit" href="{{route('assistantHome')}}">Assistant Page</a>
            @else
            <a id="edit" href="#"></a>
            @endif
            <a id="edit" href="{{route('editProfilePage')}}">Edit Profile</a>
        </div>
        <div class="profile-content">
            <div class="row col-12">
                <h3 class="col-3 menus">Username</h3>
                <h3 class="col-9 contents">{{$user->username}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Full name</h3>
                <h3 class="col-9 contents">{{$user->firstname}} {{$user->lastname}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Birth Date</h3>
                <h3 class="col-9 contents">{{ \Carbon\Carbon::parse($user->dob)->format('d-m-Y')}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Phone Num.</h3>
                <h3 class="col-9 contents">{{$user->phone}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Address</h3>
                <h3 class="col-9 contents">{{$user->address}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Email</h3>
                <h3 class="col-9 contents">{{$user->email}}</h3>
            </div>
            <div class="row col-12">
                <h3 class="col-3 menus">Password</h3>
                <h3 class="col-9 contents">*************</h3>
            </div>
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
        <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="logout mt-5">
                <button type="submit" class="btn btn-danger btn-lg">Logout</button>
            </div>
        </form>
    </div>
</section>
@endsection