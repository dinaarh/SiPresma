<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiDosenPembimbingModel extends Model
{
    use HasFactory;

    protected $table = 't_kompetensi_dosen_pembimbing';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'kompetensi_id'
    ];

    public function dosenPembimbing()
    {
        return $this->belongsTo(DosenPembimbingModel::class, 'nip', 'nip');
    }
}
