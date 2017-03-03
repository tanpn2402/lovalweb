@extends('layout.main')


@section('sort-section')
	<style type="text/css">
		.sort-section {
			display: flex;
			flex-direction: row;
			align-items: center;
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%; 
			height: 300px; 
			color: #fff;
			background-image: url({{ Asset('image/category-art.jpg') }});
			
		}
	</style>
	<div class="sort-section">
		<br>
		<br>
		<br>
		<h2 style="font-size: 40px; padding-left: 50px;">Chủ đề Khoa học lọc theo Mặc định</h2>
		<br>
		<h2>		 </h2>


	</div>
@endsection





@section('body')
		<style type="text/css">
			.project {
				width: 100%;
				height: 350px;
				border: 1px solid #999;
				border-radius: 10px;
			}

			.highlight {

			}
		</style>

	<div class="highlight">
		
		<h2>Nổi bật</h2>
		<div class="project" >
		<div class="img" style="float: left; padding-top: 10px;">
			<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="560px" height="315px">
		</div>

		<div class="content" style="margin-left: 580px; margin-right: 10px; min-height: 315px;">
			<br>
			<h3>Wheel by Miniot</h3>
			<p style="font-size: 12px">by LovalTeam</p>
		
			<p>Automatically curate content for users to improve search and discovery. Upgrade the quality of your database through metadata and targeted keyword generation.</p>
			<br>
			

			<a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>
				Long Thành, Đồng Nai, Việt Nam
			</a>

			<a href="#" style="margin-left: 30px"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
				Khoa học
			</a>
			<br>
			<br>
			<div class="detail" style="text-align: center;">
				<div class="col-sm-3">
					<p style="font-size: 20px">50%</p>
					<p>Tiến độ</p>
				</div>
				<div class="col-sm-5">
					<p style="font-size: 20px">22.120.000</p>
					<p>Tổng vốn hiện tại</p>
				</div>
				<div class="col-sm-4">
					<p style="font-size: 20px">153</p>
					<p>Người đóng góp</p>
				</div>
			
			</div>
			<br><br><br>
			<div class="status" >
				<p style="border-radius: 6px; background-color: #2BDE73; padding: 10px 10px; text-align: center; color: #fff;">Đang góp vốn</p>
			</div>
			
		</div>
		<hr>
	</div>
	</div>

	<div class="popular" style="min-height: 700px">
		<h2>Phổ biến</h2>

		@for($i = 0; $i < 3; $i++)
		<div class="col-sm-4" style="border: 1px solid #999; border-radius: 5px; width: 30%; margin: 15px;">
			<div class="img" style="text-align: center;">
				<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="250px" height="250px">
			</div>	

			<div class="content">
			<p>Tên project</p>
			<p style="font-size: 12px">by LovalTeam</p>
		
			<p>Automatically curate content for users to improve search and discovery. Upgrade the quality of your database through metadata and targeted keyword generation.</p>
			
			<a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>
				Long Thành, Đồng Nai, Việt Nam
			</a>
			<br>
			<a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
				Khoa học
			</a>
			
			<br><br>
			<p style="border-radius: 6px; background-color: #2980b9; padding: 10px 10px; text-align: center; color: #fff;">Đang đấu thầu</p>

		</div>
		</div>
		@endfor
	    

	    <div style="text-align: center">
	    	<button type="button" class="btn btn-primary">Xem thêm</button>
	    </div>

	</div>

	<div class="top" style="min-height: 700px">
		<h2>TOP</h2>

		@for($i = 0; $i < 3; $i++)
		<div class="col-sm-4" style="border: 1px solid #999; border-radius: 5px; width: 30%; margin: 15px;">
			<div class="img" style="text-align: center;">
				<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="250px" height="250px">
			</div>	

			<div class="content">
			<p>Tên project</p>
			<p style="font-size: 12px">by LovalTeam</p>
		
			<p>Automatically curate content for users to improve search and discovery. Upgrade the quality of your database through metadata and targeted keyword generation.</p>
			
			<a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>
				Long Thành, Đồng Nai, Việt Nam
			</a>
			<br>
			<a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
				Khoa học
			</a>
			
			<br><br>
			<p style="border-radius: 6px; background-color: #2980b9; padding: 10px 10px; text-align: center; color: #fff;">Đang đấu thầu</p>

		</div>
		</div>
		@endfor
	    

	    <div style="text-align: center">
	    	<button type="button" class="btn btn-primary">Xem thêm</button>
	    </div>

	</div>

	<div class="all-project" style="min-height: 700px">
		<h2>Tất cả</h2>

		@for($i = 0; $i < 6; $i++)
		<div class="col-sm-4" style="border: 1px solid #999; border-radius: 5px; width: 30%; margin: 15px;">
			<div class="img" style="text-align: center;">
				<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="250px" height="250px">
			</div>	

			<div class="content">
			<p>Tên project</p>
			<p style="font-size: 12px">by LovalTeam</p>
		
			<p>Automatically curate content for users to improve search and discovery. Upgrade the quality of your database through metadata and targeted keyword generation.</p>
			
			<a href="#"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>
				Long Thành, Đồng Nai, Việt Nam
			</a>
			<br>
			<a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
				Khoa học
			</a>
			
			<br><br>
			<p style="border-radius: 6px; background-color: #2980b9; padding: 10px 10px; text-align: center; color: #fff;">Đang đấu thầu</p>

		</div>
		</div>
		@endfor
	    

	    <div style="text-align: center">
	    	<button type="button" class="btn btn-primary">Xem thêm</button>
	    </div>

	</div>


@endsection