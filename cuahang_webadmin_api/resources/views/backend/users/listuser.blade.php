@extends("backend.master.master")
@section("title", "Danh sách thành viên")
@section("main")
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách thành viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách thành viên</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">

							@if(session('alert'))
							<div class="alert bg-success" role="alert">
								<svg class="glyph stroked checkmark">
									<use xlink:href="#stroked-checkmark"></use>
								</svg>{{session('alert')}}<a href="/user" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
							</div>
							@endif
							<div style="margin-top:20px; display: flex; justify-content: space-between;margin-right: 15px;">
								<a href="{{route('add-user')}}" class="btn btn-primary">Thêm Thành viên</a>
								<form class="form-inline" action="{{route('order-search')}}" method="GET">
									 <div class="form-group mx-sm-3 mb-2">
									    <input type="text" class="form-control" name="keyword" placeholder="Nhập tên thành viên">
									 </div>
									 <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
								</form>
							</div>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên</th>
											<th>Email</th>
											<th>Địa chỉ</th>
                                            <th>Điện thoại</th>
                                            <th>Loại tài khoản</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($users as $user)

										<tr>
											<td>{{$user->Id}}</td>
											<td>{{$user->UserName}}</td>
											<td>{{$user->Email}}</td>
											<td>{{$user->Adress}}</td>
											<td>{{$user->PhoneNumBer}}</td>
                                            <td>{{$user->typeuser->loaitaikhoan}}</td>
											<td>
												<a href="/user/edit/{{$user->Id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="/user/delete/{{$user->Id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                        
										@endforeach
									</tbody>
								</table>
							<div align='right'>
								{{$users->links("pagination::bootstrap-4")}}
							</div>
							</div>
							<div class="clearfix"></div>
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