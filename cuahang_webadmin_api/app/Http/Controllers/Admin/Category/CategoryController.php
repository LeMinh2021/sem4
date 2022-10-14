<?php

namespace App\Http\Controllers\Admin\Category;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::select('*')->get();
        return view("backend/categories/category", ["categories" => $categories]);
    }

    public function edit($id)
    {
    	$category = Category::select('*')->where('id', $id)->first();
        return view("backend/categories/editcategory", ["category" => $category]);
    }

    public function store(Request $request)
    {
    	$category = Category::create(['ten' => $request->ten, 'hinhicon' => $request->hinhicon]);
    	$request->session()->flash("alert", "Đã thêm thành công !");
        return redirect('category');
    }

    public function update(Request $request, $id)
    {
    	$category = Category::where('id', $id)->update(['ten' => $request->ten, 'hinhicon' => $request->hinhicon]);
    	$request->session()->flash("alert", "Đã sửa thành công !");
        return redirect('category');
    }

    public function delete(Request $request, $id)
    {
        $category = Category::where('Id', $id)->delete();
        $request->session()->flash("alert", "Đã xóa thành công !");
        return redirect("/category");
    }
}
