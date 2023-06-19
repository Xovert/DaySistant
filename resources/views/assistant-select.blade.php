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
                        <div class="order" @if($orderSelect->id == $order->id) style="background-color: #14FA00" @endif>
                            <h3>{{$order->specification}} - {{$order->id}}</h3>
                            <p @if($orderSelect->id == $order->id) style="background-color: #14FA00" @endif>{{$order->customer->firstname}} {{$order->customer->lastname}}</p>
                        </div>
                    </a>
                @endforeach
                <p>In Progress</p>
                @foreach ($in_progress as $progress)
                    <a href="{{route('selectOrder',['id'=>$progress->id])}}">
                        <div class="order" @if($orderSelect->id == $progress->id) style="background-color: #14FA00" @endif>
                            <h3>{{$progress->specification}} - {{$progress->id}}</h3>
                            <p @if($orderSelect->id == $progress->id) style="background-color: #14FA00" @endif>{{$progress->customer->firstname}} {{$progress->customer->lastname}}</p>
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
            <div class="form-container">
                <form action="{{route('respondOrder',['id'=>$orderSelect->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Tipe Pekerjaan :</label>
                        <div class="data col-sm-9">
                            <p>{{$orderSelect->specification}}</p>
                            <hr>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal :</label>
                        <div class="data col-sm-9">
                            <p>{{$orderSelect->startDate}}</p>
                            <hr>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Jumlah Hari :</label>
                        <div class="data col-sm-9">
                            <p>{{$days}}</p>
                            <hr>
                        </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Deskripsi Pekerjaan :</label>
                      <div class="textarea-container">
                          <p style="font-size: x-large">{{$orderSelect->description}}</p>
                      </div>
                    </div>
                    @if($orderSelect->status == 'Not Accepted')
                    <div class="d-flex justify-content-center mt-5 gap-4">
                        <input type="submit" class="btn btn-success" value="Accept" name="submitBtn"></input>
                        <input type="submit" class="btn btn-danger" value="Decline" name="submitBtn"></input>
                    </div>
                    @elseif ($orderSelect->status == 'In Progress')
                    <div class="d-flex justify-content-center mt-5 gap-4">
                        <input type="submit" class="btn btn-success" value="Done" name="submitBtn"></input>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </section>
@endsection