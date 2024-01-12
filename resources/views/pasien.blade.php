@extends('templates.layouts')
@section('content')
<div class="card">
    
    <div class="card-header bg-secondary d-flex align-items-center justify-content-center">
        <h3 class="card-title text-white">Data Pasien</h3>
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
                    <th>Tgl Lahir</th>
                    <th>Gol Darah</th>
                    <th>No Telp</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['dat_pasien'] as $index => $result)
                <tr>
                    <td>{{ $result['No Reg'] }}</td>
                    <td>{{ $result['Nama'] }}</td>
                    <td>{{ $result['Tgl Lahir'] }}</td>
                    <td>{{ $result['Gol Darah'] }}</td>
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
