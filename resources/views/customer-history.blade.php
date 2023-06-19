@extends('layout.logged-in')
@section('title','Assistant History')
@section('style')
<link rel="stylesheet" href="{{asset('css/history.css')}}">
@endsection
@section('content')
<section id="history">
    <div class="top-content">
        <a href="{{route('profilePage')}}">Profile</a>
        <form action="" class="d-flex">
            <input class="form-control me-2" type="search" name="searchAssistant" placeholder="Search nama atau id" aria-label="Search">
            <div class="search-button">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="main-content">
        <div class="tbl-container bdr">
            <table class="table table-bordered">
                <thead class="bg-white">
                    <tr>
                        <th scope="col">TransactionID</th>
                        <th scope="col">Asisten</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-cyan">
                    @foreach ($orders as $order)
                    @php
                        $fDate = $order->startDate;
                        $lDate = $order->endDate;
                        $datetime1 = new DateTime($fDate);
                        $datetime2 = new DateTime($lDate);
                        $interval = $datetime1->diff($datetime2);
                        $days = $interval->format('%a');

                        $paymentAmount = 125000 * $days;
                    @endphp
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->assistant->firstname}} {{$order->assistant->lastname}}</td>
                        <td>{{$order->startDate}}</td>
                        <td @if($order->status == 'Done')
                            class="clr-green"
                            @elseif ($order->status == 'In Progress')
                            class="clr-yellow"
                            @elseif ($order->status == 'Cancelled')
                            class="clr-red"
                            @elseif ($order->status == 'Not Accepted')
                            class="clr-gray"
                            @endif
                            >{{$order->status}}</td>
                        @if($order->status == 'Done')
                        <td>Rp {{$paymentAmount}},-</td>
                        @elseif ($order->status == 'In Progress' || $order->status == 'Not Accepted')
                        <td>Rp *********,-</td>
                        @elseif ($order->status == 'Cancelled')
                        <td>-</td>
                        @endif
                        @if ($order->status == 'In Progress' || $order->status == 'Not Accepted')
                        <td>
                            <form action="{{route('customerCancel',['id'=>$order->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </form>
                        </td>
                        @else
                        <td>-</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
