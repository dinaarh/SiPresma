<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'm_mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama',
        'bidang_keahlian',
        'kompetensi',
        'minat',
        'lokasi_preferensi',
        'foto_profil_url',
        'prodi_id',
        'periode_id'
    ];
}
