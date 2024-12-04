<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Fungsi untuk menyimpan data mahasiswa
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'npm' => 'required|unique:mahasiswas|size:10', // Validasi npm
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
        ]);

        // Simpan data mahasiswa ke database
        Mahasiswa::create($validated);

        // Redirect atau response setelah berhasil menyimpan
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan!');
    }

    // Fungsi untuk menampilkan form input mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Fungsi untuk menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); // Mengambil semua data mahasiswa
        return view('mahasiswa.index', compact('mahasiswas')); // Menampilkan data ke view
    }
}
