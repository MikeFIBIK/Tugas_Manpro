@extends('templates.layouts')
@section('content')
<div class="card">
    
    <div class="card-header bg-danger d-flex align-items-center justify-content-center">
        <h3 class="card-title text-white">Data Hasil Uji</h3>
        <div class="d-flex align-items-center text-white text-center ms-auto">
            <img class="me-3" src="{{ url('./assets/media/icons/plus.png') }}" width="45" height="45">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-white lh-1">Add</h1>
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No Reg</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Nilai Rujukan</th>
                    <th>Hasil</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['dat_hasil'] as $index3 => $result)
                <tr>
                    <td>{{ $result['No Reg'] }}</td>
                    <td>{{ $result['Nama'] }}</td>
                    <td>{{ $result['Jenis Pemeriksaan'] }}</td>
                    <td><img src="{{ url('./assets/media/icons/img.png') }}" width="45" height="45"></td>
                    <td><img src="{{ url('./assets/media/icons/img.png') }}" width="45" height="45"></td>
                    <td><img src="{{ url('./assets/media/icons/edit.png') }}" width="45" height="45"></td>
                    <td><img src="{{ url('./assets/media/icons/delete.png') }}" width="45" height="45"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
