<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinatMahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 't_minat_mahasiswa';
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'minat_id'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class, 'nim', 'nim');
    }
}
