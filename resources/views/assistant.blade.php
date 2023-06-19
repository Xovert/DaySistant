@extends('layout.logged-in')
@section('title','Assistant Page')
@section('style')
    <link rel="stylesheet" href="{{asset('css/assistant.css')}}">
@endsection
@section('content')
    <section id="main">
        <div class="left-bar">
            <div class="top-content">
                <p>New Order</p>
                @foreach ($orders as $order)
                    <a href="{{route('selectOrder',['id'=>$order->id])}}">
                        <div class="order">
                            <h3>{{$order->specification}} - {{$order->id}}</h3>
                            <p>{{$order->customer->firstname}} {{$order->customer->lastname}}</p>
                        </div>
                    </a>
                @endforeach
                <p>In Progress</p>
                @foreach ($in_progress as $progress)
                    <a href="{{route('selectOrder',['id'=>$progress->id])}}">
                        <div class="order">
                            <h3>{{$progress->specification}} - {{$progress->id}}</h3>
                            <p>{{$progress->customer->firstname}} {{$progress->customer->lastname}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="bottom-content">
                <p>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
                <img src="{{asset('assets/Ellipse 15.png')}}" alt="profile">
            </div>
        </div>
        <div class="the-content">
            
        </div>
    </section>
@endsection