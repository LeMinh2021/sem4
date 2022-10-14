<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
 public function index()
    {
        $users = User::select('*')->orderBy("Id", "DESC")->with('typeuser')->paginate(10);
        return view("backend/users/listuser", ["users" => $users]);
    }

    public function create()
    {
        return view("backend/users/adduser");
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->UserName  = $request->UserName;
        $user->PassWord = md5($request->PassWord);
        $user->Email = $request->Email;
        $user->PhoneNumBer = $request->PhoneNumBer;
        $user->Adress = $request->Adress;
        $user->Hinh = $request->Hinh;
        $user->loai = $request->loai;

        $user->save();

        $request->session()->flash("alert", "Đã thêm thành công !");

        return redirect("/user");
    }

    public function edit($id)
    {
        $user = User::where("id", $id)->first();
        return view("backend/users/edituser", ["user"=>$user]);
    }

    public function update(Request $request, $id)
    {
        $data = [
	        'UserName' => $request->UserName,
	        'PassWord' => md5($request->PassWord),
	        'Email' => $request->Email,
	        'PhoneNumBer' => $request->PhoneNumBer,
	        'Adress' => $request->Adress,
	        'Hinh' => $request->Hinh,
	        'loai' => $request->loai
        ];

        User::where('Id', $id)->update($data);

        $request->session()->flash("alert", "Đã sửa thành công !");
        return redirect("/user");
    }

    public function delete(Request $request, $id)
    {
        $user = User::where('Id', $id)->delete();

        $request->session()->flash("alert", "Đã xóa thành công !");
        return redirect("/user");
    }
}
