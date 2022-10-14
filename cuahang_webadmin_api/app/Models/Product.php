<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $table = 'sanpham';

    protected $fillable = [
        "Id",
        "TenSanPham",
        "Gia",
        "HinhAnhSanPham",
        "ThongSoKyThuat",
        "SoLuong",
        "NgayDang",
        "NgayKhuyenMai",
        "HinhAnhSanPham",
        "MoTa",
        "GiamGia",
        "HinhMoTa",
        "id_danhmuc"
    ];

    public function category(){
        return $this->belongsTo(Category::class, "id_danhmuc", "id");
    }
}
