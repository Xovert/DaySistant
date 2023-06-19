@extends('layout.logged-in')
@section('title','Payment Final')
@section('style')
<link rel="stylesheet" href="{{asset('css/payment-page.css')}}">
@endsection

@section('content')
    <section id="payment-final">
        <h1>Your Order is Being Processed !</h1>
        <div class="payment-button">
            <a href="{{route('home')}}">
                <button class="btn btn-success">Confirm</button>
            </a>
        </div>
    </section>
@endsection