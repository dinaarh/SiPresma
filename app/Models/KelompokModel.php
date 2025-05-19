<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
    use HasFactory;

    protected $table = 'm_kelompok';
    protected $primaryKey = 'kelompok_id';

    protected $fillable = [
        'nama_kelompok',
        'lomba_id'
    ];
}
