<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'chitietdonhang';

    public function user(){
        return $this->belongsTo(User::class, "Id_Taikhoan", "Id");
    }

}
