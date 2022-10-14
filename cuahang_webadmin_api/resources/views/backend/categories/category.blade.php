@extends("backend.master.master")
@section("title", "Danh mục sản phẩm")
@section("main")

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<form method="POST" action="/category/store">
									@csrf
									<div class="form-group">
										<label for="">Tên Danh mục</label>
										<input type="text" class="form-control" name="ten" id="" placeholder="Tên danh mục mới" required>
									</div>
									<div class="form-group">
										<label for="">Hình Icon</label>
										<input type="text" class="form-control" name="hinhicon" id="" placeholder="Hình Icon" required>
									</div>
									<button type="submit" class="btn btn-primary">Thêm danh mục</button>
								</form>
							</div>
							<div class="col-md-7">
								@if(session('alert'))
									<div class="alert bg-success" role="alert">
										<svg class="glyph stroked checkmark">
											<use xlink:href="#stroked-checkmark"></use>
										</svg>{{session('alert')}}<a href="/category" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								@endif
							<div style="margin-top:20px; display: flex; justify-content: flex-end;margin-right: 15px;">
								<form class="form-inline" action="{{route('order-search')}}" method="GET">
									 <div class="form-group mx-sm-3 mb-2">
									    <input type="text" class="form-control" name="keyword" placeholder="Nhập danh mục">
									 </div>
									 <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
								</form>
							</div>
								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<br>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									@foreach($categories as $category)
										<div class="item-menu"><span>{{ $category->ten }}</span>
											<div class="category-fix">
												<a class="btn-category btn-primary" href="/category/edit/{{$category->id}}"><i class="fa fa-edit"></i></a>
												<a class="btn-category btn-danger" href="/category/delete/{{$category->id}}"><i class="fas fa-times"></i></i></a>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	
@endsection