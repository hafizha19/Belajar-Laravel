@extends('pertanyaans.master')

@section('btn-navbar')
<a href="{{route('pertanyaans.index')}}" class="btn btn-light">Lihat Pertanyaan</a>
@endsection

@section('content')
<div class="card ml-2 mt-3 col-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$pertanyaan->judul}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$pertanyaan->profil_id}}</h6>
        <p class="card-text">{{$pertanyaan->isi}}</p>
        <span><small>Created at {{ $pertanyaan->created_at }} </small></span>
        <br>
        <span> <small>Updated at {{ $pertanyaan->updated_at }}</small> </span>
        <br>
        <div class="container row">
        <a href="{{$pertanyaan->id}}/edit" class="btn btn-info btn-sm mr-3">Edit</a>
            <form action="/pertanyaans/{{$pertanyaan->id}}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>

        </div>
    </div>
</div>
@endsection