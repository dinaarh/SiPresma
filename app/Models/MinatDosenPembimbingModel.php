<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinatDosenPembimbingModel extends Model
{
    use HasFactory;

    protected $table = 't_minat_dosen_pembimbing';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'minat_id'
    ];

    public function dosenPembimbing()
    {
        return $this->belongsTo(DosenPembimbingModel::class, 'nip', 'nip');
    }
}
