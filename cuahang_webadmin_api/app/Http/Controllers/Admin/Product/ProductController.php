<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy("id", "DESC")->paginate(5);
        return view("backend/products/listproduct", ["products" => $products]);
    }

    public function create()
    {
        $categories = Category::all()->toArray();
        return view("backend/products/addproduct", ["categories" => $categories]);
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->Id = $request->Id;
        $product->TenSanPham = $request->TenSanPham;
        $product->Gia = $request->Gia;
        $product->Loai = $request->Loai;
        $product->SoLuong = $request->SoLuong;
        $product->NgayDang = $request->NgayDang;
        $product->NgayKhuyenMai = $request->NgayKhuyenMai;
        $product->HinhAnhSanPham = $request->HinhAnhSanPham;
        $product->MoTa = $request->MoTa;
        $product->GiamGia = $request->GiamGia;
        $product->HinhMoTa = $request->HinhMoTa;
        $product->id_danhmuc = $request->id_danhmuc;
        $product->save();

        $request->session()->flash("alert", "Đã thêm thành công !");

        return redirect("/product");
    }

    public function edit($id)
    {
        $categories = Category::all()->toArray();
        $product = Product::where("id", $id)->get()->toArray();
        return view("backend/products/editproduct", ["product"=>$product[0], "categories"=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'Id' => $request->Id,
            'TenSanPham' => $request->TenSanPham,
            'Gia' => $request->Gia,
            'Loai' => $request->Loai,
            'SoLuong' => $request->SoLuong,
            'NgayDang' => $request->NgayDang,
            'NgayKhuyenMai' => $request->NgayKhuyenMai,
            'HinhAnhSanPham' => $request->HinhAnhSanPham,
            'MoTa' => $request->MoTa,
            'GiamGia' => $request->GiamGia,
            'HinhMoTa' => $request->HinhMoTa,
            'id_danhmuc' => $request->id_danhmuc
        ];

        Product::where('Id', $id)->update($data);

        $request->session()->flash("alert", "Đã sửa thành công !");
        return redirect("product");
    }

    public function delete(Request $request, $id)
    {
        $product = Product::where('Id', $id)->delete();

        $request->session()->flash("alert", "Đã xóa thành công !");
        return redirect("/product");
    }
}
