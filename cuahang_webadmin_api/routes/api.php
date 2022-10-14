<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('model/taikhoan/getdataquanlytaikhoanadmin','App\Http\Controllers\Mycontroller@getdataquanlytaikhoanadmin')->name('getdataquanlytaikhoanadmin');

Route::get('model/phantrang','App\Http\Controllers\Mycontroller@phantrang');

Route::post('model/login/dangnhap','App\Http\Controllers\Mycontroller@postlogin')->name('postlogin');

Route::get('model/quangcao/getdata', 'App\Http\Controllers\Mycontroller@getdatamodelquangcao')->name('getdataquangcao');

Route::get('model/danhmuc/getdata', 'App\Http\Controllers\Mycontroller@getdatamodeldanhmuc')->name('getdatadanhmuc');

Route::get('model/danhmuc/getdatalaptopmoinhat','App\Http\Controllers\Mycontroller@getdatalaptopmoinhat');

Route::get('model/linhkienlaptop/getdatalinhkienlaptop','App\Http\Controllers\Mycontroller@getdatalinhkienlaptop');

Route::get('model/danhmuc/getdatathietbiluutruphukien','App\Http\Controllers\Mycontroller@getdatathietbiluutruphukien');

Route::get('model/danhmuc/getdatathietbinghenhin','App\Http\Controllers\Mycontroller@getdatathietbinghenhin');

Route::post('model/sanpham/getdatasanphamchitiet','App\Http\Controllers\Mycontroller@getdatasanphamchitiet')->name('getdatasanphamchitiet');

Route::post('model/danhgia/getdanhgia', 'App\Http\Controllers\Mycontroller@getdatadanhgia')->name('getdatadanhgia');

Route::post('model/danhgia/postDanhgia', 'App\Http\Controllers\Mycontroller@postDanhgia')->name('postDanhgia');

Route::post('model/giohang/postgiohang', 'App\Http\Controllers\Mycontroller@postgiohang')->name('postgiohang');

Route::get('model/giohang/getdatagiohang', 'App\Http\Controllers\Mycontroller@getdatagiohang');

Route::post('model/giohang/updategiohang', 'App\Http\Controllers\Mycontroller@updategiohang')->name('updategiohang');

Route::post('model/giohang/delete', 'App\Http\Controllers\Mycontroller@delete');

Route::post('model/taikhoan/timkiem', 'App\Http\Controllers\Mycontroller@timkiem')->name('timkiem');

Route::get('model/taikhoan/gettaikhoan','App\Http\Controllers\Mycontroller@gettaikhoan');

Route::post('model/chitietdonhang/dondathang', 'App\Http\Controllers\Mycontroller@dondathang')->name('dondathang');

Route::post('model/dondathang/getdatahoadondondathangnguoidung', 'App\Http\Controllers\Mycontroller@getdatahoadondondathangnguoidung')->name('getdatahoadondondathangnguoidung');

Route::post('model/hoadon/getdatahoadondondathangadmin', 'App\Http\Controllers\Mycontroller@getdatahoadondondathangadmin')->name('getdatahoadondondathangadmin');

Route::post('model/danhmuc/getdatadanhmuccon',  'App\Http\Controllers\Mycontroller@getdatadanhmuccon')->name('getdatadanhmuccon');

Route::post('model/laptopmacbook/getdatalaptopmacbook', 'App\Http\Controllers\Mycontroller@getdatalaptopmacbook')->name('getdatalaptopmacbook');

Route::post('model/usser/updatephoto', 'App\Http\Controllers\Mycontroller@updatephoto')->name('updatephoto');

Route::post('model/dondathang/donhangganday','App\Http\Controllers\Mycontroller@donhangganday' )->name('donhangganday');

Route::post('model/taikhoan/updatethongtin', 'App\Http\Controllers\Mycontroller@updatethongtin')->name('updatethongtin');

Route::post('model/taikhoan/updatediachi', 'App\Http\Controllers\Mycontroller@updatediachi')->name('updatediachi');

Route::post('model/dondathang/choxetduyet',  'App\Http\Controllers\Mycontroller@choxetduyet')->name('choxetduyet');

Route::post('model/dondathang/dangvanchuyen',  'App\Http\Controllers\Mycontroller@dangvanchuyen')->name('dangvanchuyen');

Route::post('model/dondathang/dagiaohang',  'App\Http\Controllers\Mycontroller@dagiaohang')->name('choxetduyet');

Route::post('model/chitietdondathang/getdatachitietdondathang', 'App\Http\Controllers\Mycontroller@getdatachitietdondathang')->name('getdatachitietdondathang');

Route::post('model/chitietdondathang/getdatachuanhanxet', 'App\Http\Controllers\Mycontroller@getdatachuanhanxet')->name('getdatachuanhanxet');

Route::post('model/sanpham/getdataphantrangsanpham','App\Http\Controllers\Mycontroller@getdataphantrangsanpham')->name('getdataphantrangsanpham');

Route::post('model/sanpham/getdataTimkiem','App\Http\Controllers\Mycontroller@getdataTimkiem')->name('getdataTimkiem');

Route::post('model/donathang/updatehuydon','App\Http\Controllers\Mycontroller@updatehuydon')->name('updatehuydon');

Route::post("model/dondathang/dahuy",'App\Http\Controllers\Mycontroller@dahuy')->name('dahuy');

Route::get("model/gioithieushop/gioithieushop",'App\Http\Controllers\Mycontroller@gioithieushop')->name('gioithieushop');

Route::post('model/taikhoan/dangkytaikhoan','App\Http\Controllers\Mycontroller@dangkytaikhoan')->name('dangkytaikhoan');

Route::get("model/tintuc/getdatatintuc",'App\Http\Controllers\Mycontroller@getdatatintuc')->name('getdatatintuc');

Route::post('model/tintuc/timkimtintuc','App\Http\Controllers\Mycontroller@timkimtintuc')->name('timkimtintuc');

Route::post('model/thongtin/update','App\Http\Controllers\Mycontroller@update')->name('update');

Route::get('model/dondathang/getdatadangvanchuyenadmin','App\Http\Controllers\Mycontroller@getdatadangvanchuyenadmin')->name('getdatadangvanchuyenadmin');

Route::get('model/dondathang/getdatadahuyadmin','App\Http\Controllers\Mycontroller@getdatadahuyadmin')->name('getdatadahuyadmin');

Route::get('model/dondathang/dagiaohangadmin','App\Http\Controllers\Mycontroller@dagiaohangadmin')->name('dagiaohangadmin');

Route::get('model/dondathang/choxetduyetadmin','App\Http\Controllers\Mycontroller@choxetduyetadmin')->name('choxetduyetadmin');

Route::post('model/dondathang/updatedondathangadmin','App\Http\Controllers\Mycontroller@updatedondathangadmin')->name('updatedondathangadmin');

Route::post('model/taikhoan/DeleteAdminTai_khoan','App\Http\Controllers\Mycontroller@DeleteAdminTai_khoan')->name('DeleteAdminTai_khoan');

Route::post('model/tintuc/delete_NewsAdmin','App\Http\Controllers\Mycontroller@delete_NewsAdmin')->name('delete_NewsAdmin');

Route::post('model/tintuc/update_NewsAdmin','App\Http\Controllers\Mycontroller@update_NewsAdmin')->name('update_NewsAdmin');

Route::post('model/tintuc/insert_NewsAdmin','App\Http\Controllers\Mycontroller@insert_NewsAdmin')->name('insert_NewsAdmin');

Route::post('model/quanlysanpham/insert_ProductAdmin','App\Http\Controllers\Mycontroller@insert_ProductAdmin')->name('insert_ProductAdmin');

Route::post("model/taikhoan/checkEmail","App\Http\Controllers\Mycontroller@checkEmail");

Route::post("model/taikhoan/updatePasswordForEmail","App\Http\Controllers\Mycontroller@updatePasswordForEmail");

Route::post("model/giohang/getDataGioHangFromIdUser","App\Http\Controllers\Mycontroller@getDataGioHangFromIdUser");


