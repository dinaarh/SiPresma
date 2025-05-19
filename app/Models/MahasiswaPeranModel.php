<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPeran extends Model
{
    use HasFactory;
    protected $table = 't_mahasiswa_peran';
    protected $primaryKey = 'peran_id';

    protected $fillable = [
        'peran_id',
        'nim',
        'kelompok_id',
        'nama_peran'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class, 'nim', 'nim');
    }
}
