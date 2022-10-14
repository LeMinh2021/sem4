<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'taikhoan';

    protected $fillable = [
        "Id",
        "UserName",
        "PassWord",
        "Email",
        "PhoneNumBer",
        "Adress",
        "Hinh",
        "loai"
    ];

    protected $hidden = [
        "PassWord",
    ];

    public function detail(){
        return $this->hasOne(Detail::class, "users_id", "id");
    }

    public function typeuser(){
        return $this->hasOne(TypeUser::class, "id", "loai");
    }
}
