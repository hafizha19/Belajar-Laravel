@extends('pertanyaans.master')

@section('btn-navbar')
<a href="{{ route('pertanyaans.index') }}" class="btn btn-light">Lihat Pertanyaan</a>
@endsection

@section('content')
<div class="row container">
<form class="col-5 justify-content-center" action="{{ route('pertanyaans.store')}}" method="POST">
        {{-- @method('POST') --}}
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Isi">
        </div>
        <div class="form-group">
            <label for="profil_id">Profil ID</label>
            <input type="text" class="form-control" name="profil_id" id="profil_id" placeholder="Masukkan Profil ID">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
    </form>
</div>
@endsection