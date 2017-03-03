<!DOCTYPE html>
<html>
<head>
	<title>Sign in to LovalProject</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ Asset('css/login-style.css') }}">
</head>
<body>
	<div class="header">
		<a href="home"><img src="{{ Asset('image/lead-logo.png') }}" height="70px"></a>
		<h3>Đăng kí tài khoản LovalProject</h3>
	</div>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="auth-form">
				<label for="login_field">
		          Tên đăng nhập hoặc tài khoản email
		        </label>
		        <input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="form-control" id="login_field" name="login" tabindex="1" type="text">
		         <br>
		        <label for="password">
		          Mật khẩu          <a href="/password_reset" class="label-link">Quên mật khẩu?</a>
		        </label>
		        <input class="form-control" id="password" name="password" tabindex="2" type="password">
		        <br>
		        <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit" tabindex="3" value="Đăng nhập" type="submit">

		    </div>

		    <div class="create-account">
		    	<label for="password">
		          Lần đầu sử dụng? <a href="signup" class="label-link">Tạo tài khoản?</a>
		        </label>
		    </div>
	    </div>
	    <div class="col-md-3"></div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
    <div class="footer">
    	<li><a href="#">Trợ giúp</a></li>
    	<li><a href="#">Điều khoản</a></li>
    	<li><a href="#">Liên hệ</a></li>

    </div>	

</body>
</html>