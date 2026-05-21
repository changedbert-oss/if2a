@extends('main')

@section('title', 'Tambah Program Studi')

@section('content')
<form action="{{ route('prodi.store') }}" method="post">
    <div class="form-group">
        <label for="">Nama Program Studi</label>
        <input type="text" name="nama_prodi" class="form-control" value="{{ old('nama_Prodi') }}">
    </div>
    @error('nama_fakultas')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">Singkatan</label>
        <input type="text" name="singkatan" class="form-control" value="{{ old('singkatan') }}">
    </div>
    @error('singkatan')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">Kepala Program Studi</label>
        <input type="text" name="Kaprodi" class="form-control" value="{{ old('Kaprodi') }}">
    </div>
    @error('Kaprodi')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <div class="form-group">
        <label for="">Fakultas</label>
        <select name="fakultas_id" class="form-control"></select>
        <option value="">Pilih Fakultas</option>
        @foreach($fakultas as $row)
        <option value="{{$row->id}}" {{old('fakultas_id') == $row->id ? 'selected' :
                    ''}}>
        </option>
        @endforeach
    </div>

    @error('fakultas_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form> 
@endsection