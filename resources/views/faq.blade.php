@extends('layout.logged-in')
@section('title','FAQ Page')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
@endsection

@section('content')
<section id="faq">
    <h2 class="overflow-hidden"><b>Frequently Asked Questions</b></h2>
    <button class="accordion">What is Virtual Assistant ?</button>
    <div class="panel">
        <p>Virtual Assistant is a self-employed worker who provides assistance with administrative, technical, marketing, or other services to clients depending on their skills and client needs from a remote location. Daysistant Virtual Assistant can be considered as an agency that makes it easier for clients and workers to find each other depending on their needs and skills.</p>
    </div>
    <button class="accordion">Can I cancel my transaction ?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>
    <button class="accordion">How do I track my Virtual Assistant work ?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>
    <button class="accordion">Can I change my choice of Virtual Assistant ?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>
    <button class="accordion">Can I reschedule my transaction ?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci deserunt asperiores delectus
            repellat magni!</p>
    </div>
    <h4 style="text-align: center; margin-top: 40px; overflow: hidden;">Your Question is not here? <a href="{{route('submitFAQ')}}" style="color: #09B1E6">Click here</a></h4>
</section>
@endsection
