@extends('main')

@section('title','fakultas')

@section('content')

<table class = "table table-bordered">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Singkatan</th>
    </tr>
    </thead>
    
</table>

@foreach ($result as $item)
    {{ $item->nama_fakultas}} - {{ $item->singkatan}} <br>
@endforeach
@endsection