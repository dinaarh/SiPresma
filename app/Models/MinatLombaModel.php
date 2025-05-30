<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinatLombaModel extends Model
{
    use HasFactory;

    protected $table = 't_minat_lomba';
    protected $primaryKey = 'lomba_id';

    protected $fillable = [
        'lomba_id',
        'minat_id'
    ];

    public function lomba()
    {
        return $this->belongsTo(LombaModel::class, 'lomba_id', 'lomba_id');
    }
}
