<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function order(){
        $orders = Order::select('*')->with('user')->paginate(10);
        return view("backend/orders/order", ["orders"=>$orders]);
    }
    public function search(Request $request){
        $name = $request->keyword;
        if(!empty($name)){
             $orders = Order::with('user')->whereHas('user', function($q) use ($name){
                $q->where('UserName','LIKE', '%'.$name.'%');
            })->paginate(10);
        }else{
             $orders = Order::select('*')->with('user')->paginate(10);
        }
        return view("backend/orders/searchorder", ["orders"=>$orders]);
    }
    public function details($id){
        $order = OrderProduct::select('*')->where('Id_DonDatHang', '=' , $id)->first();
        $orders = OrderProduct::select('*')->where('Id_DonDatHang', '=' , $id)->get();
        return view("backend/orders/detailorder", ["order"=>$order, "orders"=>$orders]);
    }
    public function processed(Request $request){
        if($request->input("id")){
            $order = Order::find($request->input("id"));
            $order->state = 1;
            $order->save();
        }
        $orders = Order::orderBy("id", "DESC")
            ->where("state", 1)
            ->get();
        return view("backend/orders/processed", ["orders"=>$orders]);
    }

    public function update($id, $status)
    {
        if($status == 1){
            $result = 'Đã Giao Hàng';
        }
        if($status == 2){
            $result = 'Đã Hủy';
        }
        if($status == 3){
            $result = 'Đang Vận Chuyển';
        }
        if($status == 4){
            $result = 'Chờ Xét Duyệt';
        }

        $data = [
            'TrinhTrang' => $result
        ];
        Order::where('Id_DonHang', $id)->update($data);
        return redirect("order");
    }

}
