@extends('crud.master')

@section('btn-navbar')
<a href="/crud/create" class="btn btn-light">Tambah Pertanyaan</a>
@endsection

@section('content')
<div class="container-fluid row">
    @foreach ($pertanyaan as $tanya)

    <div class="card mx-1 my-3 col-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$tanya->judul}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$tanya->profil_id}}</h6>
            <p class="card-text">{{$tanya->isi}}</p>
            <span><small>Created {{ $tanya->tanggal_dibuat }} |</small></span>
            <span> <small>Updated {{ $tanya->tanggal_diperbaharui }}</small> </span>
            <br>
            <a href="" class="badge badge-info">Edit</a>
            <a href="" class="badge badge-danger">Delete</a>
        </div>
    </div>
    @endforeach
</div>
@endsection