@extends('layout.logged-in')
@section('title','Submit Question')
@section('style')
<link rel="stylesheet" href="{{asset('css/form-kerja.css')}}">
@endsection

@section('content')
<section id="form-kerja">
    <div class="container">
        
            <form action="{{route('faqFinal')}}" method="GET" enctype="multipart/form-data">
                @csrf
                <h1 style="overflow: hidden" class="mb-5">Question Form</h1>
                <div class="mb-3">
                    <label for="inputPassword" class="col-form-label">Title :</label>
                    <div class="col-sm">
                        <input type="text" name="title" class="form-control" id="inputPassword" placeholder="Masukkan judul pertanyaan">
                    </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Description :</label>
                  <textarea type="text" name="deskripsi" class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp" value="{{old('deskripsi')}}" rows="8">Masukkan deskripsi pertanyaan yang anda ingin tanyakan di sini</textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="check" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Receive Email notification if the question is answered
                    </label>
                </div>
                <div class="d-flex justify-content-center mt-5 gap-4">
                  <button type="submit" class="btn btn-success">Submit Question</button>
                </div>
            </form>

    </div>
</section>
@endsection
