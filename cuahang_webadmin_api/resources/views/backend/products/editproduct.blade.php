@extends("backend.master.master")
@section("title", "Sửa sản phẩm")
@section("main")
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                        <form method="POST" enctype="multipart/form-data" action="/product/update/{{$product['Id']}}">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="id_danhmuc" class="form-control">
                                        @foreach($categories as $value)
                                            <option value="{{ $value['id'] }}">{{ $value['ten'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" name="Id" class="form-control" value="{{$product['Id']}}">
                                </div>
                                <div class="form-group">
                                    <label>Loại</label>
                                    <input type="text" name="Loai" class="form-control" value="{{$product['Loai']}}">
                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="TenSanPham" class="form-control" value="{{$product['TenSanPham']}}">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm (Giá chung)</label>
                                    <input type="number" name="Gia" class="form-control" value="{{$product['Gia']}}">
                                </div>
                                <div class="form-group">
                                    <label>SoLuong</label>
                                    <input type="number" name="SoLuong" class="form-control" value="{{$product['SoLuong']}}">
                                </div>
                                <div class="form-group">
                                    <label>Ngày đăng</label>
                                    <input type="text" name="NgayDang" class="form-control" value="{{$product['NgayDang']}}">
                                </div>
                                <div class="form-group">
                                    <label>Ngày khuyến mãi</label>
                                    <input type="text" name="NgayKhuyenMai" class="form-control" value="{{$product['NgayKhuyenMai']}}">
                                </div>
                                <div class="form-group">
                                    <label>Link hình ảnh sản phẩm</label>
                                    <input type="text" name="HinhAnhSanPham" class="form-control" value="{{$product['HinhAnhSanPham']}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <img id="avatar" class="thumbnail" width="100%" height="350px" src="{{$product['HinhAnhSanPham']}}">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Giảm giá</label>
                               <input type="number" name="GiamGia" class="form-control" value="{{$product['GiamGia']}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Link hình mô tả</label>
                               <input type="text" name="HinhMoTa" class="form-control" value="{{$product['HinhMoTa']}}" >
                               <img id="avatar" class="thumbnail" src="{{$product['HinhMoTa']}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Miêu tả</label>
                                 <input type="text" name="MoTa" class="form-control" value="{{$product['MoTa']}}" >
                            </div>
                            <button class="btn btn-success" name="add-product" type="submit">Sửa sản phẩm</button>
                            <a href="/product/" class="btn btn-danger">Huỷ bỏ</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @csrf
                    </form>
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



<script>
    function changeImg(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function() {
            $('#img').click();
        });
    });
</script>
@endsection