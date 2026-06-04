@extends('main')

@section('title', 'Tambah Mahasiswa')

@section('content')
<form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
    </div>
    @error('nama')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">NPM</label>
        <input type="text" name="singkatan" class="form-control" value="{{ old('npm') }}">
    </div>
    @error('npm')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
    </div>
    @error('foto')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">Program Studi</label>
        <select name="prodi_id" class="form-control"></select>
        <option value="">Pilih Prodi</option>
        @foreach($prodi as $row)
        <option value="{{$row->id}}" {{old('prodi_id') == $row->id ? 'selected' :
                    ''}}>
        </option>
        @endforeach
    </div>

    @error('prodi_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form> 
@endsection