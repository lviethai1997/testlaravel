
<!DOCTYPE html>
<html lang="en">


<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
    <base href="{{asset('')}}">


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="assets/admin/css/nifty.min.css" rel="stylesheet">

	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<!--Demo [ DEMONSTRATION ]-->
	<link href="assets/admin/css/demo/nifty-demo.min.css" rel="stylesheet">




	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="assets/admin/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="assets/admin/plugins/pace/pace.min.js"></script>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">Admin <span class="text-thin">Login</span></span>
				</a>
			</div>
		</div>
		<!--===================================================-->
		
		
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<h4 class="pad-btm" style="font-weight:bold;">Sign In to your account</h4>
					@if (count($errors) >0)
						<ul>
							@foreach($errors->all() as $error)
								<li class="text-danger"> {{ $error }}</li>
							@endforeach
						</ul>
					@endif

					@if (session('status'))
						<ul>
							<li class="text-danger"> {{ session('status') }}</li>
						</ul>
					@endif
					<form action="{{ route('getLogin') }}" method="POST">
					{{ csrf_field() }}
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="Email" name="txtEmail" class="form-control" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" name="txtPassword" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input type="checkbox" name="remember"> Remember me
								</label>
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
								</div>
							</div>
						</div>
						<div class="mar-btm"><em>- or -</em></div>
						<button class="btn btn-primary btn-lg btn-block" type="button">
							<i class="fa fa-facebook fa-fw"></i> Login with Facebook
						</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
		<!--===================================================-->
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->
	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="assets/admin/js/jquery-2.1.1.min.js"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="assets/admin/js/bootstrap.min.js"></script>


	<!--Fast Click [ OPTIONAL ]-->
	<script src="assets/admin/plugins/fast-click/fastclick.min.js"></script>

	
	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="assets/admin/js/nifty.min.js"></script>


	<!--Background Image [ DEMONSTRATION ]-->
	<script src="assets/admin/js/demo/bg-images.js"></script>
</body>
</html>
