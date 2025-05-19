<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPembimbingModel extends Model
{
    use HasFactory;

    protected $table = 'm_dosen_pembimbing';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nip',
        'nama',
        'bidang_keahlian',
        'kompetensi',
        'minat'
    ];
}
