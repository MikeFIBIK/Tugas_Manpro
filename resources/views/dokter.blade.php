@extends('templates.layouts')
@section('content')
<div class="card">
    
    <div class="card-header bg-info d-flex align-items-center justify-content-center">
        <h3 class="card-title text-white">Data Dokter</h3>
        <div class="d-flex align-items-center text-white text-center ms-auto">
            <img class="me-3" src="{{ url('./assets/media/icons/plus.png') }}" width="45" height="45">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-black lh-1">Add</h1>
            </div>
        </div>
    </div>
    
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SIP</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>No Telp</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['dat_dokter'] as $index2 => $result)
                <tr>
                    <td>{{ $result['ID'] }}</td>
                    <td><img src="{{ url('./assets/media/icons/img.png') }}" width="45" height="45"></td>
                    <td>{{ $result['Nama'] }}</td>
                    <td>{{ $result['Bagian'] }}</td>
                    <td>{{ $result['No Telp'] }}</td>
                    <td><img src="{{ url('./assets/media/icons/edit.png') }}" width="45" height="45"></td>
                    <td><img src="{{ url('./assets/media/icons/delete.png') }}" width="45" height="45"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
