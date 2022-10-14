@extends("backend/master/master")
@section("title", "Quản lý đơn hàng")
@section("main")
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Đơn hàng</li>
		</ol>
	</div>
	<!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách đơn đặt hàng</div>
				<div style="margin-top:20px; display: flex; justify-content: flex-end;margin-right: 15px;">
					<form class="form-inline" action="{{route('order-search')}}" method="GET">
					  <div class="form-group mx-sm-3 mb-2">
					    <input type="text" class="form-control" name="keyword" placeholder="Nhập tên khách hàng">
					  </div>
					  <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
					</form>
				</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:10px;">
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Tên khách hàng</th>
										<th>Ngày đặt</th>
										<th>Tình trạng</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
									@foreach($orders as $order)
									<tr>
										<td>{{$order->Id_DonHang }}</td>
										<td>{{$order->user ? $order->user->UserName : ''}}</td>
										<td>{{$order->NgayDat}}</td>
										<td>
											@if($order->TrinhTrang === 'Đã Hủy')
												<span class="btn btn-danger btn-sm">{{$order->TrinhTrang }}</span>
											@endif
											@if($order->TrinhTrang === 'Đã Giao Hàng')
												<span class="btn btn-success btn-sm">{{$order->TrinhTrang }}</span>
											@endif
											@if($order->TrinhTrang === 'Đang Vận Chuyển')
												<span class="btn btn-info btn-sm">{{$order->TrinhTrang }}</span>
											@endif
											@if($order->TrinhTrang === 'Chờ Xét Duyệt')
												<span class="btn btn-warning btn-sm">{{$order->TrinhTrang }}</span>
											@endif
										</td>
										<td>
											<a href="/order/details/{{$order->Id_DonHang }}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi tiết</a>

										</td>
									</tr>
									@endforeach()
								</tbody>
							</table>
							<div align='right'>
								{{$orders->links("pagination::bootstrap-4")}}
							</div>
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

<!-- javascript -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
@endsection