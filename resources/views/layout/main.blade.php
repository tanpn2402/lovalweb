<!DOCTYPE html>
<html>
<head>
	<title>Loval Project</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="{{ Asset('css/style.css') }}">
	 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>


	

</head>
<body>
	<div class="nav-header">
		<div class="nav-banner">
			<a href="home"><img src="{{ Asset('image/lead-logo.png') }}" height="70px"></a>
		</div>

		<div class="nav-menu">
			<li> <a class="btn-menu" href="project">Dự án</a></li>
			<li> <a class="btn-menu" href="#">Nhà đầu tư</a></li>
			<li> <a class="btn-menu" href="#">Dự án của tôi</a></li>
			
			@if(0 > 1)
				<li> <a class="btn-menu" style="color: #ff2b1f;" href="signin">SIGN IN</a></li>
				<li ><a class="btn-primary" href="signup">SIGN UP</a></li>
			@else
				<li> <a class="btn-menu" style="color: #ff2b1f;" href="signin">LOG OUT</a></li>
				<li ><a class="btn-primary" href="signup">NEW PROJECT</a></li>
			@endif

			
		</div>

	</div>	

	
	<div style="padding-top: 70px;">

		@yield('sort-section')
	

		<div class="main-body">
			@yield('body')
		</div>
		

		<div class="main-footer">
			<li><a href="#">Trợ giúp</a></li>
	    	<li><a href="#">Điều khoản</a></li>
	    	<li><a href="#">Liên hệ</a></li>
		</div>
	</div>
</body>
</html>