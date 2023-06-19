@extends('layout.logged-in')
@section('title','FAQ Final')
@section('style')
<link rel="stylesheet" href="{{asset('css/payment-page.css')}}">
@endsection

@section('content')
    <section id="payment-final">
        <h1>Your Question has been submitted !</h1>
        <div class="payment-button">
            <a href="{{route('home')}}">
                <button class="btn btn-success">Back to Main Page</button>
            </a>
        </div>
    </section>
@endsection