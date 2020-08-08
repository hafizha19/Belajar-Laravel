@extends('crud.master')

@section('btn-navbar')
<a href="/" class="btn btn-light">Lihat Pertanyaan</a>
@endsection

@section('content')
<div class="row container">
    <form class="col-5 justify-content-center">
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
    </form>
</div>
@endsection