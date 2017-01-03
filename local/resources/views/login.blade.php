<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>DESA SERUMPUN BULUH</title>
	<!-- <link href="{{asset('bootstrap_3_3_6/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" > -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<section class="container login-form">
		<section>
			<form method="post" action="{{ url('/') }}" role="login">
				<img src="assets/images/logo.png" alt="" class="img-responsive" />
			
				<div class="form-group">
					<input type="text" name="id" required class="form-control" placeholder="Masukkan ID" />
					<span class="glyphicon glyphicon-user"></span>
				</div>
				
				<div class="form-group">
					<input type="password" name="password" required class="form-control" placeholder="Masukkan Password" />
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary btn-block">MASUK</button>
				
				<p class="masuk">Silahkan masuk terlebih dahulu</p>
			</form>
		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>