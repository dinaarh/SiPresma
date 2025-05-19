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
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudiModel::class, 'prodi_id', 'prodi_id');
    }

    public function periode()
    {
        return $this->belongsTo(PeriodeModel::class, 'periode_id', 'periode_id');
    }
}
