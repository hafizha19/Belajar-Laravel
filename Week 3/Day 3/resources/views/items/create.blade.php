@extends('adminlte.master')

@section('content')
    <h2>
        Ini halaman Create
    </h2>
@endsection

@push('scripts')
    <script>
        var wrappers = document.getElementsByClassName("wrapper");
        var items = ["ini", "contoh"];
        console.log("ini items", items);
    </script>
@endpush