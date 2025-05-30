<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiMahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 't_kompetensi_mahasiswa';
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'kompetensi_id'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class, 'nim', 'nim');
    }
}
