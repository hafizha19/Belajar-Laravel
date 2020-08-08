@extends('crud.master')

@section('btn-navbar')
<a href="/" class="btn btn-light">Lihat Pertanyaan</a>
@endsection

@section('content')
<div class="row container">
    <form class="col-5 justify-content-center" action="/crud/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="judul">Judul</label>
        <input type="text" class="form-control" value="{{$pertanyaan->judul}}" name="judul" id="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" value="{{$pertanyaan->isi}}" name="isi" id="isi" placeholder="Masukkan Isi">
        </div>
        <div class="form-group">
            <label for="profil_id">Profil ID</label>
            <input type="text" class="form-control" value="{{$pertanyaan->profil_id}}" name="profil_id" id="profil_id" placeholder="Masukkan Profil ID">
        </div>
        <button type="submit" class="btn btn-primary">Update Pertanyaan</button>
    </form>
</div>
@endsection