@extends('layout.main')
@section('body')

<div class="highlight">
	<style type="text/css">
		.project {
			width: 100%;
			height: 350px;
		}
	</style>
	<h2>Nổi bật</h2>
	<!--mục nổi bật sẽ chứa 3 project, mỗi project 1 dòng-->
	<div class="project" >
		<div class="img" style="float: left;">
			<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="560px" height="315px">
		</div>

		<div class="content" style="margin-left: 600px; min-height: 315px;">
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
	

	<div class="project">
		<div class="img" style="float: right;">
			<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="560px" height="315px">
		</div>

		<div class="content" style="max-width: 500px; min-height: 315px; padding-left: 50px;">
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

	<div class="project">
		<div class="img" style="float: left;">
			<img src="{{ Asset('image/wheel_by_miniot.jpg') }}" width="560px" height="315px">
		</div>

		<div class="content" style="margin-left: 600px; min-height: 315px;">
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
					<p style="font-size: 20px">22.120.000 vnd</p>
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


<div class="recommend" style="min-height: 700px">
	<h2>Đề xuất cho bạn</h2>
	
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



<div class="popular" style="min-height: 700px">
	<h2>Phổ biến</h2>

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
			<p style="border-radius: 6px; background-color: #9b59b6; padding: 10px 10px; text-align: center; color: #fff;">Đang triển khai</p>

		</div>
	</div>
	@endfor
    

    <div style="text-align: center">
    	<button type="button" class="btn btn-primary">Xem thêm</button>
    </div>

</div>


<div class="investor">
	<h2>Các nhà đầu tư</h2>
	<div class="row">
	  	@for($i = 0; $i < 6; $i++)
		  	<div class="col-sm-2" style="border: 0.5px solid #999; width:140px; height:140px; margin: 20px">
		  		<img src="{{ Asset('image/hax.png') }}" width="120px" height="120px" style="text-align: center;">
		  	</div>

		@endfor
	  	

	</div>

	<div style="text-align: center">
    	<button type="button" class="btn btn-primary">Xem thêm</button>
    </div>
	
</div>


@endsection