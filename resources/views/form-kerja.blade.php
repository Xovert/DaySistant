@extends('layout.logged-in')
@section('title','Form Pekerjaan')
@section('style')
<link rel="stylesheet" href="{{asset('css/form-kerja.css')}}">
@endsection

@section('content')
<section id="form-kerja">
    <div class="container">
        
            <form action="{{route('createOrder')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 style="overflow: hidden" class="mb-5">Form Pekerjaan</h1>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tipe Pekerjaan :</label>
                    <div class="col-sm-10">
                        <select name="specification" class="form-select" id="inlineFormSelectPref">
                            <option selected>Pilih Pekerjaan</option>
                            <option value="Asisten Pribadi">Asisten Pribadi</option>
                            <option value="Entri Data">Entri Data</option>
                            <option value="Media Sosial">Media Sosial</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Phone & Emailing">Phone & Emailing</option>
                        </select>
                    </div>
                </div>
                @error('specification')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal :</label>
                    <div class="col-sm-10">
                        <input type="date" name="dateStart" class="form-control" id="inputPassword" placeholder="Pilih Tanggal Pemesanan">
                    </div>
                </div>
                @error('dateStart')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Hari :</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlahHari" class="form-control" id="inputPassword" placeholder="Masukkan jumlah hari penyewaan VA">
                    </div>
                </div>
                @error('jumlahHari')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Deskripsi Pekerjaan :</label>
                  <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                      aria-describedby="emailHelp" value="{{old('description')}}" rows="8" placeholder="Masukkan deskripsi pekerjaan yang anda inginkan di sini"></textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="d-flex justify-content-center mt-5 gap-4">
                  <button type="submit" class="btn btn-success">Pesan</button>
                  <a href="{{route('home')}}">
                      <div type="" class="btn btn-danger">Cancel</div>
                  </a>
                </div>
            </form>

    </div>
</section>
@endsection
