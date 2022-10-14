<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    
    protected $table = 'dondathang';

    public function user(){
        return $this->belongsTo(User::class, "Id_TaiKhoan", "Id");
    }
    
}
