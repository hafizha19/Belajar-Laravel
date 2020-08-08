@extends('crud.master')

@section('btn-navbar')
<a href="/crud/create" class="btn btn-light">Tambah Pertanyaan</a>
@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success mt-3">
    {{ session('status') }}
</div>
@endif
<div class="container-fluid row">
    @foreach ($pertanyaan as $tanya)
    <div class="card ml-2 mt-3 col-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$tanya->judul}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$tanya->profil_id}}</h6>
            <p class="card-text">{{$tanya->isi}}</p>
            <span><small>Created at {{ $tanya->created_at }} </small></span>
            <br>
            <span> <small>Updated at {{ $tanya->updated_at }}</small> </span>
            <br>
            <a href="/crud/{{$tanya->id}}" class="badge badge-primary">Detail</a>
        </div>
    </div>
    @endforeach
</div>
@endsection