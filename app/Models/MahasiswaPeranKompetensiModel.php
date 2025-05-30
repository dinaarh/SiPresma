<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPeranKompetensiModel extends Model
{
    use HasFactory;

    protected $table = 't_mahasiswa_peran_kompetensi';
    protected $primaryKey = 'peran_id';

    protected $fillable = [
        'peran_id',
        'kompetensi_id'
    ];

    public function MahasiswaPeran()
    {
        return $this->belongsTo(MahasiswaPeranModel::class, 'peran_id', 'peran_id');
    }
}
