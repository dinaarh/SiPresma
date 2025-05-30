<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPembimbingPeranKompetensiModel extends Model
{
    use HasFactory;

    protected $table = 't_dosen_pembimbing_peran_kompetensi';
    protected $primaryKey = 'peran_id';

    protected $fillable = [
        'peran_id',
        'kompetensi_id'
    ];

    public function dosenPembimbingPeran()
    {
        return $this->belongsTo(DosenPembimbingPeranModel::class, 'peran_id', 'peran_id');
    }
}
