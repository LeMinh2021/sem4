@extends("backend.master.master")
@section("title", "Danh mục sản phẩm")
@section("main")

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Sửa danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form method="POST" action="/category/update/{{$category['id']}}">
									@csrf
									<div class="form-group">
										<label for="">Tên Danh mục</label>
										<input type="text" class="form-control" name="ten" id="" placeholder="Tên danh mục mới" value="{{$category['ten']}}" required>
									</div>
									<div class="form-group">
										<label for="">Hình Icon</label>
										<input type="text" class="form-control" name="hinhicon" id="" placeholder="Hình Icon"
										value="{{$category['hinhicon']}}" required>
									</div>
									<button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
									<a href="/category" class="btn btn-default">Quay lại</a>
								</form>
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