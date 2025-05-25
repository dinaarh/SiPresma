<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinatModel extends Model
{
    use HasFactory;

    protected $table = 'm_minat';
    protected $primaryKey = 'minat_id';

    protected $fillable = [
        'minat_nama'
    ];
}
