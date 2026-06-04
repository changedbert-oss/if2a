@extends('main')

@section('title', 'Periode')

@section('content')
    <a href="{{ route('periode.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Periode as $Periode)
                <tr>
                    <td>{{ $Periode -> tahun_akademik }}</td>
                    <td>{{ $Periode -> semester }}</td>
                    <td>
                        <a href = "{{ route('Periode.edit', $Periode->id) }}" class = "btn
                            btn-warning btn rounded">Ubah</a>
                        <form method = "POST" action="{{ route('Periode.destroy', $Periode->id) }}
                            " class = "d-inline">
                        @csrf
                            <input type="_method" type = "hidden" value = "DELETE">
                            <button type = "submit" class = "btn btn-xs btn-danger btn-rounded
                            show_confirm" data-toggle="tooltip" title=""></button>
                        </form>


                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection