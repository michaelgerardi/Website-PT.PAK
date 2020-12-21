<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Admin</title>
	<link  href="Admin/css/pak.png" rel="icon">
	<link rel="stylesheet" href="Admin/css/Admin.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="login">
	<div class="image">
		<img src="Admin/css/pak.png" alt="">
	</div>
	<div class="card">
		<h1>Login Admin</h1>
		<form action="/postlogin" method="POST">
				{{ csrf_field() }}
				
			<div class="textbox  has-feedback{{$errors->has('email') ? 'has-error' : ''}}">
				<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Email" name="email" value="{{old('email')}}">
				@if ($errors->has('email'))
				<span class="help-block">
					<p style="color: red">{{$errors->first('email')}}</p>
				</span>
			   @endif
			</div>
			<div class="textbox has-feedback{{$errors->has('password') ? 'has-error' : ''}}">
				<i class="fa fa-key" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="password" value="{{old('password')}}">
				@if ($errors->has('password'))
				<span class="help-block">
					<p style="color: red">{{$errors->first('password')}}</p>
				</span>
			   @endif
			</div>
			<div class="g-recaptcha" data-sitekey="6LcYd98ZAAAAAIVRK0ldSkdPNKyo07lm4zTSctNx">
				@if ($errors->has('g-recaptcha-respone'))
					<span class="invalid-feedback" style="display: block">
					<strong>{{$errors->first('g-recaptcha-response')}}</strong>
					</span>
				@endif
			</div>
			<button  style ="margin-top:20px"class="btn">Submit</button>
		</form>
	</div>
</body>
</html>