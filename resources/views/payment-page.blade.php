@extends('layout.logged-in')
@section('title','Payment Page')
@section('style')
<link rel="stylesheet" href="{{asset('css/payment-page.css')}}">
@endsection

@section('content')
    <section id="payment">
        <form action="{{route('createPayment',['id'=>$order->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="payment-content">
                <div class="payment-left">
                    <h2>Methods</h2>
                    <div class="payment-method">
                        <div class="payment-row">
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 1.png')}}" alt="">
                            </div>
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="payment-row">
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 6.png')}}" alt="">
                            </div>
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 8.png')}}" alt="">
                            </div>
                        </div>
                        <div class="payment-row">
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 7.png')}}" alt="">
                            </div>
                            <div class="payment-method-button">
                                <img src="{{asset('assets/image 9.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <h2>Details</h2>
                    <div class="mb-3 row">
                        <label  class="col-sm-4">Tipe Pekerjaan :</label>
                        <div class="col-sm-8 d-flex align-items-center justify-center">
                            <p>{{$order->specification}}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4">Tanggal :</label>
                        <div class="col-sm-8 d-flex align-items-center justify-center">
                            <p>{{$order->startDate}}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4">Jumlah Hari :</label>
                        <div class="col-sm-8 d-flex align-items-center justify-center">
                            <p>{{$days}}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4">Harga per Hari :</label>
                        <div class="col-sm-8 d-flex align-items-center justify-center">
                            <p>Rp 125000,-</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label  class="col-sm-4">Total :</label>
                        <div class="col-sm-8 d-flex align-items-center justify-center">
                            <p>Rp {{$paymentAmount}},-</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment-button">
                <button class="btn btn-success">Confirm</button>
            </div>
        </form>
    </section>
@endsection