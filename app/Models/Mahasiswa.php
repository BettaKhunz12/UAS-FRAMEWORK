<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Tentukan atribut yang bisa diisi (mass assignment)
    protected $fillable = [
        'npm',
        'nama',
        'prodi',
    ];
}
