
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AdminLTE 2 | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->
	<link href="{{ asset("admin-assets/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('admin-assets/css/foundation-icons/foundation-icons.css') }}" />
	<!-- Theme style -->
	<link href="{{ asset("admin-assets/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	<link href="{{ asset("admin-assets/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
	<!-- iCheck -->
	<link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>WebDash</b> Admin</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>


		<span id="login-error">{{{ Session::get('error') }}}</span>

		{!! Form::open(['route' => 'sessions.store', 'id' => 'login']) !!}

		<div class="form-group has-feedback">
			{!! Form::text('user', null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>

		<div class="form-group has-feedback">
			{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>

		{!! Form::submit('Login', ['class' => 'btn btn-primary btn-block btn-flat']) !!}

		{!! Form::close() !!}

		<a href="#">I forgot my password</a><br>

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
</body>
</html>