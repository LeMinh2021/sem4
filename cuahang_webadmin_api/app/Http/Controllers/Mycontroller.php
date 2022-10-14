<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use App\taikhoan;
use App\quangcao;
use App\danhmuc;
use App\linhkienlaptop;
use App\thietbingenhin;
use App\sanpham;
use App\giohang;
use App\dondathang;
use App\chitietdonhang;
use App\gioithieushop;
use Illuminate\Support\Facades\DB;

class Mycontroller extends Controller
{
//tettstst
public function phantrang(){
    $table=sanpham::paginate(2);
    echo $table;
}


    public function updatePasswordForEmail(Request $request){
        $table=taikhoan::where('Email','=',$request->email)->update(['PassWord'=>MD5($request->password)]);
        if($table){
            echo "Success";
        }else{
            echo "Faild";
        }
    }

    public function checkEmail(Request $request){
        $table=taikhoan::where('Email','=',$request->email)->get();
        if($table->count() > 0){
            echo "Success";
        }else{
            echo "Faild";
        }
    }

    public function postlogin(Request $request){
    	// $table=new taikhoan;
    	if($request->has("user") && $request->has("pass")){
    		$username=$request->user;
    		$password=$request->pass;
    		$table=taikhoan::where([['Email','=',$username],['PassWord','=',MD5($password)]])->get();
    		echo json_encode($table);
    		 
    	}else{
    		echo "Faild";
    	}
    }
//-----------GET DATA MODEL QUANG CAO CACH 1 DÙNG QUERY BUIDER
    public function getdata(){
    	$data=DB::table('quangcao')->distinct()->select('quangcao.Id','quangcao.HinhAnh','quangcao.NoiDung','quangcao.Id_Sanpham','sanpham.TenSanPham','sanpham.HinhAnhSanPham','sanpham.Id')->join('sanpham','quangcao.Id_Sanpham','=','sanpham.Id')->orderBy('Id_sanpham')->take(5)->get();
        if($data){
            echo json_encode($data);
        }
    }
//--------- GET DATA MODEL QUANG CAO CACH 2 DÙNG MODEL QUANGCAO
    public function getdatamodelquangcao(){
        $quangcao=quangcao::select('quangcao.HinhAnh','quangcao.NoiDung','quangcao.Id_Sanpham','sanpham.TenSanPham','sanpham.HinhAnhSanPham','sanpham.Id')->join('sanpham','quangcao.Id_Sanpham','=','sanpham.Id')->orderBy('Id_sanpham')->take(5)->get();
        echo json_encode($quangcao);
    }
//----------GET DATA MODEL DANHMUC DÙNG MODEL
    public function getdatamodeldanhmuc(){
        $danhmuc=danhmuc::all();
        if($danhmuc){
            echo json_encode($danhmuc);
        }
    }
// GET DATA MODEL DANHMUC SANPHAM MOI NHAT
    public function getdatalaptopmoinhat(){
        $table=danhmuc::select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.id_danhmuc')->join('sanpham','danhmuc.id','=','sanpham.id_danhmuc')->where('danhmuc.id','=',1)-> orderBy('Id','desc')->take(6)->get();
        echo json_encode($table);
    }
//GET DATA MODEL LINH KIEN LAPTOP
    public function getdatalinhkienlaptop(){
       $table=danhmuc::select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.id_danhmuc')->join('sanpham','danhmuc.id','=','sanpham.id_danhmuc')->where('danhmuc.id','=',2)-> orderBy('Id','desc')->take(6)->get();
        echo json_encode($table);
    }
//GETDATA THIET BI LUU TRU PHU KIEN
    public function getdatathietbiluutruphukien(){
         $table=danhmuc::select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.id_danhmuc')->join('sanpham','danhmuc.id','=','sanpham.id_danhmuc')->where('danhmuc.id','=',3)-> orderBy('Id','desc')->take(6)->get();
        echo json_encode($table);
    }
// GET DATA THIET BI NGHE NHIN
    public function getdatathietbinghenhin(){
         $table=danhmuc::select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.id_danhmuc')->join('sanpham','danhmuc.id','=','sanpham.id_danhmuc')->where('danhmuc.id','=',4)-> orderBy('Id','desc')->take(6)->get();
        echo json_encode($table);
    }
// GET DATA SANPHAM CHI TIET
    public function getdatasanphamchitiet(Request $request){
        if($request->has("id")){
            $idmoi=$request->id;
            //echo $idmoi;
            $table=sanpham::where('Id','=',$idmoi)->select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.HinhMoTa','sanpham.Mota','sanpham.SoLuong','sanpham.NgayDang')->get();
        echo json_encode($table[0]);
       }
    
    }

    //POST SAN PHAM LEN GIO HANG
    public function postgiohang(Request $request){
        if($request->has('iduser') && $request->has('idsanpham') && $request->has("giasp")){
            $iduser=$request->iduser;
            $idsanpham=$request->idsanpham;
            $table=sanpham::where('Id','=',$idsanpham)->first();

            $giasanpham=$request->giasp;
            $soluong=1;
            $hinhsanpham=$table->HinhAnhSanPham;
            $tensanpham=$table->TenSanPham;
            
            $table=giohang::where('Id_sanpham','=',$idsanpham)->count();
            
            if($table>0){
                $table=giohang::select('soluong','thanhtien')->where('Id_sanpham','=',$idsanpham)->first();
                $soluongcu=$table->soluong;
                $thanhtien=$table->thanhtien;
               $table=giohang::where('Id_SanPham','=',$idsanpham)->update(['SoLuong'=>($soluongcu+1),'ThanhTien'=>($thanhtien+$giasanpham)]); 
                echo "Success";
            }else{
            
                 $table=new giohang;
                $table->Id_User=$iduser;
                $table->Id_SanPham=$idsanpham;
                $table->Ten_Sanpham=$tensanpham;
                $table->SoLuong=$soluong;
                $table->ThanhTien=$giasanpham;
                $table->Hinh=$hinhsanpham;
                $table->save();
                echo "Success";
            }
        }
    }
// GET DATA GIO HANG
    public function getdatagiohang(){
        $table=giohang::all();
        echo json_encode($table);
    }

    public function getDataGioHangFromIdUser(Request $request){
        $table=giohang::where('Id_User','=',$request->idUser)->get();
        echo json_encode($table);
    }

// UPDATE TĂNG,GIẢM SAN PHẨM GIỎ HÀNG
    public function updategiohang(Request $request){
        if($request->has("idsanpham") && $request->has("soluong") && $request->has("thanhtien")){
            $idsanpham=$request->idsanpham;
            $soluong=$request->soluong;
            $thanhtien=$request->thanhtien;
            $table=giohang::where('Id_Sanpham','=',$idsanpham)->update(['SoLuong'=>$soluong,'ThanhTien'=>$thanhtien]);
            echo "Success";
            
        }
    }
// DELETE SANPHAM GIO HANG
    public function delete(Request $request){
        if($request->has('idsanpham')){
            $idsp=$request->idsanpham;
            $table=giohang::where('Id_Sanpham','=',$idsp)->delete();
            echo "Success";
        }
    }
// TÌM KIẾM SẢN PHẨM
    public function timkiem(Request $request){
        if($request->has("timkiem")){
            $timkiem=$request->timkiem;
            $table=taikhoan::where('PhoneNumBer','like','%'.$timkiem.'%')->get();
            echo json_encode($table);
        }
    }
//GET TÀI KHOẢN
    public function gettaikhoan(){
        $table=taikhoan::all();
        echo json_encode($table);
    }
//Inset DON DAT HÀNG VÀ CHI TIẾT ĐƠN HÀNG

    public function dondathang(Request $request){
        if($request->has('idtaikhoan') && $request->has('trinhtrang') && $request->has('ngaydat') && $request->has('username') && $request->has('diachi') && $request->has('email') && $request->has('sodienthoai')){
        $ngaydat=$request->ngaydat;
        $trinhtrang=$request->trinhtrang;
        $Idtaikhoan=$request->idtaikhoan;

        $table=new dondathang;
        $table->NgayDat=$ngaydat;
        $table->TrinhTrang=$trinhtrang;
        $table->Id_TaiKhoan=$Idtaikhoan;
        $table->save();

        $iddondathang=dondathang::max('Id_DonHang');


        $table=giohang::where('Id_User','=',$Idtaikhoan)->get();//json
        $data= json_decode($table,true);
        foreach ($data as $value) {
            $iduser= $value['Id_User'];
            $idsanpham= $value['Id_Sanpham'];
            $tensanpham= $value['Ten_Sanpham'];
            $soluong= $value['SoLuong'];
            $thanhtien= $value['ThanhTien'];
            $hinh= $value['Hinh'];

            $iduser= $value['Id_User'];
            $idsanpham= $value['Id_Sanpham'];
            $tensanpham= $value['Ten_Sanpham'];
            $soluong= $value['SoLuong'];
            $thanhtien= $value['ThanhTien'];
            $hinh= $value['Hinh'];
            $username=$request->username;
            $diachi=$request->diachi;
            $email=$request->email;
            $sodienthoai=$request->sodienthoai;
            
            $tablechitiet=new chitietdonhang;
            $tablechitiet->Id_Taikhoan=$iduser;
            $tablechitiet->Username=$username;
            $tablechitiet->Dia_Chi=$diachi;
            $tablechitiet->Email=$email;
            $tablechitiet->SoDienThoai=$sodienthoai;
            $tablechitiet->Id_SanPham=$idsanpham;
            $tablechitiet->GiaSanPham=$thanhtien;
            $tablechitiet->HinhSanPham=$hinh;
            $tablechitiet->SoLuongSanPham=$soluong;
            $tablechitiet->TenSanPham=$tensanpham;
            $tablechitiet->Id_DonDatHang=$iddondathang;
             $tablechitiet->save();
        }
        $soluongcu=sanpham::select('SoLuong')->where('Id','=',$idsanpham)->first();
            $sl=$soluongcu->SoLuong;
            $soluongmoi=$sl-$soluong;
            $delete=sanpham::where('Id','=',$idsanpham)->update(['SoLuong'=>$soluongmoi]);
        echo "Success";
        $delete=giohang::where('Id_User','=',$Idtaikhoan)->delete();
        }else{
            echo "Faild";
        }

        }
// GET DATA DON DAT HANG HOA DON nguoi dung
        public function getdatahoadondondathangnguoidung(Request $request){
           if($request->has('idtaikhoan')){
            $idtaikhoan=$request->idtaikhoan;
            $table=dondathang::join('chitietdonhang','dondathang.Id_DonHang','=','chitietdonhang.Id_DonDatHang')->where('dondathang.Id_TaiKhoan','=',$idtaikhoan)->orderBy("dondathang.Id_DonHang","desc")->take(1)->first();
            if($table){
            $iddondathang=$table->Id_DonHang;
            $table=dondathang::join('chitietdonhang','dondathang.Id_DonHang','=','chitietdonhang.Id_DonDatHang')->where([['dondathang.Id_TaiKhoan','=',$idtaikhoan],['dondathang.Id_DonHang','=',$iddondathang]])->orderBy("dondathang.Id_DonHang","desc")->get();
            }
           
            
            echo $table;
        }
           
        }
// GET DATA DON HANG HOA DON ADMIN
        public function getdatahoadondondathangadmin(Request $request){
            if($request->has("iddondathang")){
                $iddondathang=$request->iddondathang;
                $table=dondathang::join('chitietdonhang','dondathang.Id_DonHang','=','chitietdonhang.Id_DonDatHang')->where('dondathang.Id_DonHang','=',$iddondathang)->get();
                echo json_encode($table);
            }
        }
 // GET DATA DANHMUC CON
        public function getdatadanhmuccon(Request $request){
            if($request->has('iddanhmuc')){
            $id=$request->iddanhmuc;
            if($id==2){
                $table=linhkienlaptop::all();
                echo $table;
            }
            if($id==4){
                $table=thietbingenhin::all();
                echo $table;
            }
        }
        } 
// GET DATA LAPTOP-MACBOOK
        public function getdatalaptopmacbook(Request $request){
            if($request->has('id')){
                $id=$request->id;
                $table=danhmuc::select('sanpham.Id', 'sanpham.TenSanPham', 'sanpham.HinhAnhSanPham', 'sanpham.Gia','sanpham.NgayKhuyenMai', 'sanpham.GiamGia', 'sanpham.Loai','sanpham.id_danhmuc')->join('sanpham','danhmuc.id','=','sanpham.id_danhmuc')->where('danhmuc.id','=',$id)-> orderBy('Id','desc')->get();
                 echo json_encode($table);

            }
        }  
// UPDATE PHOTO USER
        public function updatephoto(Request $request){ 
            if($request->has("hinh") && $request->has("idtaikhoan")){
            $hinh=$request->hinh;
            $idtaikhoan=$request->idtaikhoan;
             $thumuc="img/$idtaikhoan.jpg";
             $dataaa=file_put_contents($thumuc,base64_decode($hinh));
            $table=taikhoan::where('Id','=',$idtaikhoan)->update(['Hinh'=>$idtaikhoan.".jpg"]);
            $table=taikhoan::where('Id','=',$idtaikhoan)->get();
            echo json_encode($table);
          
        }

        } 
// GETDATA DON HANG GAN DAY
        public function donhangganday(Request $request){ 
            if($request->has('idtaikhoan')){
            $idtaikhoan=$request->idtaikhoan;
            $table=dondathang::join('chitietdonhang','dondathang.Id_DonHang','=','chitietdonhang.Id_DonDatHang')->where('dondathang.Id_TaiKhoan','=',$idtaikhoan)->take(6)->orderBy("dondathang.Id_DonHang","desc")->get();
            echo json_encode($table);
        }
        }
// UPDATE THONG TIN TAI KHOAN
        public function updatethongtin(Request $request){
            if($request->has('username') && $request->has('sodienthoai') && $request->has('email') && $request->has('idtaikhoan')){
            $taikhoan=$request->username;
            $sodienthoai=$request->sodienthoai;
            $email=$request->email;
            $idtaikhoan=$request->idtaikhoan;
            $table=taikhoan::where('Id','=',$idtaikhoan)->update(['UserName'=>$taikhoan,'Email'=>$email,'PhoneNumBer'=>$sodienthoai]);
                if($table){
                    $table=taikhoan::where('Id','=',$idtaikhoan)->get();
                    echo $table;
                }else {
                    echo "Faild";
                }
            }else{
                echo "Faild";
            }
        }
// UPDATE DIA CHI TAI KHOAN
        public function updatediachi(Request $request){
            if($request->has('idtaikhoan') && $request->has('diachi')){
                $id=$request->idtaikhoan;
                $diachi=$request->diachi;
                $table=taikhoan::where('Id','=',$id)->update(['Adress'=>$diachi]);
                $table=taikhoan::where('Id','=',$id)->get();
                echo json_encode($table);
            }
        }
// GETDATA DON ĐẶT HÀNG CHỜ XÉT DUYỆT
        public function choxetduyet(Request $request){
            if($request->has("idtaikhoan")){
                $idtaikhoan=$request->idtaikhoan;
                $table=dondathang::where([['Id_TaiKhoan','=',$idtaikhoan],['TrinhTrang','=','Chờ Xét Duyệt']])->orderBy("Id_DonHang","desc")->get();
                echo json_encode($table);
            }
            
        }
// GETDATA ĐƠN ĐẶT HÀNG ĐANG VẬN CHUYỂN
        public function dangvanchuyen(Request $request){
            if($request->has("idtaikhoan")){
                $idtaikhoan=$request->idtaikhoan;
                $table=dondathang::where([['TrinhTrang','=','Đang Vận Chuyển'],['Id_TaiKhoan','=',$idtaikhoan]])->orderBy("Id_DonHang","desc")->get();
                echo json_encode($table);
            }
            
        }
// GETDATA ĐƠN ĐẶT HÀNG ĐÃ GIAO HÀNG
         public function dagiaohang(Request $request){
            if($request->has("idtaikhoan")){
                $idtaikhoan=$request->idtaikhoan;
                $table=dondathang::where([['TrinhTrang','=','Đã Giao Hàng'],['Id_TaiKhoan','=',$idtaikhoan]])->orderBy("Id_DonHang","desc")->get();
                echo json_encode($table);
            }
            
        }
//GETDATA CHI TIẾT ĐƠN HÀNG
        public function getdatachitietdondathang(Request $request){
            if($request->has('iddondathang')){
            $id=$request->iddondathang;
            $table=chitietdonhang::where('Id_DonDatHang','=',$id)->get();
            echo json_encode($table);
        }
        }

//get data san pham sanphamphantrang

    public function getdataphantrangsanpham(Request $request){
        if($request->has("soluong")){
          $soluong=$request->soluong;
          $table=sanpham::select('Id', 'TenSanPham', 'HinhAnhSanPham', 'Gia','NgayKhuyenMai', 'GiamGia', 'Loai')->skip($soluong)->take(7)->get();
          echo json_encode($table);
      }
    
    }
// GET DÂT TIM KIEM SAN PHAM
public function getdataTimkiem(Request $request){
        if($request->has("timkim")){
          $timkim=$request->timkim;
          $table=sanpham::select('Id', 'TenSanPham', 'HinhAnhSanPham', 'Gia','NgayKhuyenMai', 'GiamGia', 'Loai')->Where('TenSanPham','like','%'.$timkim.'%')->get();
          echo json_encode($table);
      }
    
    }

// UPDATE HUY DON DAT HANG
public function updatehuydon(Request $request){
        if($request->has("iddondathang")){
        $iddondathang=$request->iddondathang;
        $table= dondathang::where('Id_DonHang','=',$iddondathang)->update(['TrinhTrang'=>'Đã Hủy']);
        if($table){
            echo "Success";
        }
    }
}

//GET DATA DA HUY DON HANG
public function dahuy(Request $request){
            if($request->has("idtaikhoan")){
                $idtaikhoan=$request->idtaikhoan;
                $table=dondathang::where([['TrinhTrang','=','Đã Hủy'],['Id_TaiKhoan','=',$idtaikhoan]])->orderBy("Id_DonHang","desc")->get();
                echo json_encode($table);
            }
            
        }

// GET DÂT GIOI THIEU SHOP
    public function gioithieushop(){
        $table=gioithieushop::all();
        echo json_encode($table);
    }
// INSERT TAI KHOAN
    public function dangkytaikhoan(Request $request){
        if($request->has("username") && $request->has("password") && $request->has("email")){
            $idloai=$request->idloai;
             $username=$request->username;
             $password=$request->password;
             $email=$request->email;
             // $sodienthoai=$request->sodienthoai;
             // $diachi=$request->diachi;
             $table=new taikhoan();
             $table->UserName=$username;
             $table->PassWord=md5($password);
             $table->Email=$email;
             $table->PhoneNumBer="";
             $table->Adress="";
             // $table->PhoneNumBer=$sodienthoai;
             // $table->Adress=$diachi;
             $table->Hinh="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp8ueC6GiRRRy7muStewczNrdHKOQM8hJYL_EmR_XIeqksvrRp9g&s";
             $table->loai=$idloai;
             $table->save();
             if($table){
                echo "Success";
             }
        }
    }

//UPDATE THÔNG TIN CUA HANG
    public function update(Request $request){
        if($request->has("TenCuaHang") && $request->has("TruSoChinh") && $request->has("DienThoai") && $request->has("Email") && $request->has("Website") && $request->has("Fanpage")){
            $TenCuaHang=$request->TenCuaHang;
            $TruSoChinh=$request->TruSoChinh;
            $DienThoai=$request->DienThoai;
            $Email=$request->Email;
            $Website=$request->Website;
            $Fanpage=$request->Fanpage;
            $table=gioithieushop::where('Id','=',1)->update(['TenCuaHang'=>$TenCuaHang,'TruSoChinh'=>$TruSoChinh,'DienThoai'=>$DienThoai,'Email'=>$Email,'Website'=>$Website,'Fanpage'=>$Fanpage]);
            if($table){
                echo "Success";
            }
        }
    }
    
// GET DATA DANG VAN CHUYEN ADMIN
    public function getdatadangvanchuyenadmin(Request $request){
        $table=dondathang::where('TrinhTrang','=','Đang Vận Chuyển')->orderBy("Id_DonHang","desc")->get();
        echo json_encode($table);
    }
// GET DATA DA HUY ADMIN
    public function getdatadahuyadmin(Request $request){
        $table=dondathang::where('TrinhTrang','=','Đã Hủy')->orderBy("Id_DonHang","desc")->get();
        echo json_encode($table);
    }
// GET DATA DA GIAO HANG ADMIN
    public function dagiaohangadmin(Request $request){
        $table=dondathang::where('TrinhTrang','=','Đã Giao Hàng')->orderBy("Id_DonHang","desc")->get();
        echo json_encode($table);
    }
// GET DATA CHO XET DUYET ADMIN
    public function choxetduyetadmin(Request $request){
        $table=dondathang::where('TrinhTrang','=','Chờ Xét Duyệt')->orderBy("Id_DonHang","desc")->get();
        echo json_encode($table);
    }
//Update Don dat Hang ADMIN

    public function updatedondathangadmin(Request $request){
        if($request->has("id") && $request->has('trinhtrang')){
             $iddondathang=$request->id;
             $trinhtrang=$request->trinhtrang;
             $table=dondathang::where('Id_DonHang','=',$iddondathang)->update(['TrinhTrang'=>$trinhtrang]);
             if($table){
                 echo "Success";
             }
         }
            
    }
//Getdata Quan Lý Tài Khoản Của Admin
    public function getdataquanlytaikhoanadmin(){
        $table=taikhoan::orderBy("Id","desc")->get();
        echo json_encode($table);
    }
// Admin Delete Tai Khoan
public function DeleteAdminTai_khoan(Request $request){
    if($request->has("idtaikhoan")){
        $idTaikhoan=$request->idtaikhoan;
        $table=taikhoan::where('Id','=',$idTaikhoan)->delete();
        if($table){
            echo "Success";
        }
    }
}    



// INSERT SAN PHẨM QUYỀN ADMIN
    public function insert_ProductAdmin(Request $request){
        if($request->has('text_DescriptionProduct') && $request->has('text_SpecificationsProduct') && $request->has('text_NameProduct') && $request->has('text_PricaeProduct') && $request->has('text_NumberProduct') && $request->has('text_PromotionDayProduct') && $request->has('txt_PromotionPriceProduct') && $request->has('id_TypeProduct') && $request->has('text_Today') && $request->has('text_TheFirm') && $request->has('text_PictureProduct') && $request->has('text_PictureDescriptionProduct') ){
         
             $desCriptionProduct=$request->text_DescriptionProduct;
             $specifiCationsProduct=$request->text_SpecificationsProduct;
             $nameProduct=$request->text_NameProduct;
             $pricaeProduct=$request->text_PricaeProduct;
             $numberProduct=$request->text_NumberProduct;
             $promotionDayProduct=$request->text_PromotionDayProduct;
             $promotionPriceProduct=$request->txt_PromotionPriceProduct;
             $typeProduct=$request->id_TypeProduct;
             $toDay=$request->text_Today;
             $theFirm=$request->text_TheFirm;
             $pictureProduct=$request->text_PictureProduct;
             $pictureDescriptionProduct=$request->text_PictureDescriptionProduct;

              $date = getdate();
              $tensanpham=$date['seconds'].$date['minutes'].$date['hours']; 

             $thumuc="img/sanpham/$tensanpham.news.jpg";
             $data=file_put_contents($thumuc, base64_decode($pictureProduct));
             $duongdanhinhanhsanpham=$tensanpham.'.news.jpg';

              $datahinh=json_decode($pictureDescriptionProduct,true);
              $i=0;
              $duongdanhinhmota="";   

             foreach ($datahinh as $value) {
                $i++;
                $thumucms="img/sanpham/$tensanpham.$i.news.jpg";
                $duongdanhinhmota.=$tensanpham.'.'.$i.'.news.jpg@';
                file_put_contents($thumucms, base64_decode($value['hinhmota']));
             }

             $table=new sanpham();
             $table->TenSanPham=$nameProduct;
             $table->HinhAnhSanPham=$duongdanhinhanhsanpham;
             $table->MoTa=$desCriptionProduct;
             $table->Gia=$pricaeProduct;
             $table->SoLuong=$numberProduct;
             $table->NgayDang=$toDay;
             $table->NgayKhuyenMai=$promotionDayProduct;
             $table->GiamGia=$promotionPriceProduct;
             $table->Loai=$theFirm;
             $table->HinhMoTa=$duongdanhinhmota;
             $table->id_danhmuc=$typeProduct;
             $table->save();
             echo "Success";
    
        }
    }
}
