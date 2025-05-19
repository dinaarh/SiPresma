<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'm_users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'role',
        'status_akun'
    ];
}
