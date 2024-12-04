@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" class="form-control" value="{{ old('npm') }}" required>
            @error('npm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label>
            <input type="text" name="prodi" id="prodi" class="form-control" value="{{ old('prodi') }}" required>
            @error('prodi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
