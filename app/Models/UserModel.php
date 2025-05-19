<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
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

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function admin()
    {
        return $this->hasOne(AdminModel::class, 'user_id', 'user_id');
    }

    public function dosenPembimbing()
    {
        return $this->hasOne(DosenPembimbingModel::class, 'user_id', 'user_id');
    }

    public function mahasiswa()
    {
        return $this->hasOne(MahasiswaModel::class, 'user_id', 'user_id');
    }

    public function isAdmin()
    {
        return $this->admin()->exists();
    }

    public function isDosenPembimbing()
    {
        return $this->dosenPembimbing()->exists();
    }

    public function isMahasiswa()
    {
        return $this->mahasiswa()->exists();
    }
}
