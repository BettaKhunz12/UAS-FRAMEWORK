@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->npm }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->prodi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
