@extends("backend.master.master")
@section("title", "Sửa thành viên")
@section("main")
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa Thành viên</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{$user->UserName }}</div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">

                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                             
                                <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                 <form method="POST" action="/user/update/{{$user->Id}}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" name="UserName" class="form-control" value="{{$user->UserName }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="text" name="PassWord" class="form-control" value="{{$user->PassWord }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="Email" class="form-control" value="{{$user->Email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="PhoneNumBer" name="PhoneNumBer" class="form-control" value="{{$user->PhoneNumBer }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="Adress" class="form-control" value="{{$user->Adress }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="text" name="Hinh" class="form-control" value="{{$user->Hinh }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại tài khoản</label>
                                        <select name="loai" class="form-control" required>
                                            <option value="0">Khách Hàng</option>
                                            <option value="1">Nhân Viên</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                      
                                        <button class="btn btn-success"  type="submit">Thêm thành viên</button>
                                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                    </div>
                                </div>
                               
                                </form>
                            </div>

                        </div>
                    
                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    </div>

        <!--/.row-->
    </div>

    <!--end main-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    
            
@endsection