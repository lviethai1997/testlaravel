
<!DOCTYPE html>
<html>


<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My website</title>


	<!--STYLESHEET-->
	<!--=================================================-->
    <base href="{{asset('')}}">
	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

    
	 
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <link href="assets/admin/css/bootstrap.css" rel="stylesheet"> -->
	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="assets/admin/css/nifty.min.css" rel="stylesheet">

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<!--Animate.css [ OPTIONAL ]-->
	<link href="assets/admin/plugins/animate-css/animate.min.css" rel="stylesheet">
	

	<!--Morris.js [ OPTIONAL ]-->
	<link href="assets/admin/plugins/morris-js/morris.min.css" rel="stylesheet">


	<!--Switchery [ OPTIONAL ]-->
	<link href="assets/admin/plugins/switchery/switchery.min.css" rel="stylesheet">


	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="assets/admin/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

	<link href="assets/admin/plugins/fooTable/css/footable.core.css" rel="stylesheet">

	<!--Demo script [ DEMONSTRATION ]-->
	<link href="assets/admin/css/demo/nifty-demo.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	
	<link href="assets/admin/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="assets/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">

	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="assets/admin/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="assets/admin/plugins/pace/pace.min.js"></script>

</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<!--NAVBAR-->
		<!--===================================================-->
		@include('admin.layouts.header')
		<!--===================================================-->
		<!--END NAVBAR-->

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 style="font-weight:bold;font-size:35px;color:black;" class="page-header text-overflow">@yield('title')</h1>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->


				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->


		

				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">
				@yield('content')
				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->


			
			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			@include('admin.layouts.menu')
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->
			
			<!--ASIDE-->
			<!--===================================================-->
			@include('admin.layouts.aside-right')
			<!--===================================================-->
			<!--END ASIDE-->

		</div>

		

		<!-- FOOTER -->
		<!--===================================================-->
		@include('admin.layouts.footer')
		<!--===================================================-->
		<!-- END FOOTER -->

		
<!--jQuery [ REQUIRED ]-->

<script src="assets/admin/js/jquery-2.1.1.min.js"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="assets/admin/js/bootstrap.min.js"></script>
<!-- Fast Click [ OPTIONAL ] -->
<script src="assets/admin/plugins/fast-click/fastclick.min.js"></script>
<!--Nifty Admin [ RECOMMENDED ]-->
<script src="assets/admin/js/nifty.min.js"></script>
<!--Morris.js [ OPTIONAL ]-->
<!-- <script src="assets/admin/plugins/morris-js/raphael-js/raphael.min.js"></script> -->
<!--Sparkline [ OPTIONAL ]-->
<!-- <script src="assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script> -->
<!--Skycons [ OPTIONAL ]-->
<!-- <script src="assets/admin/plugins/skycons/skycons.min.js"></script> -->
<!--Switchery [ OPTIONAL ]-->
<script src="assets/admin/plugins/switchery/switchery.min.js"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="assets/admin/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<!--Demo script [ DEMONSTRATION ]-->
<!-- <script src="assets/admin/plugins/fooTable/dist/footable.all.min.js"></script> -->
<script src="assets/admin/js/demo/nifty-demo.min.js"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script src="assets/admin/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="assets/admin/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="assets/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/js/demo/tables-datatables.js"></script>
<script> CKEDITOR.replace('editor1'); </script>
<!--Specify page [ SAMPLE ]-->
<!-- <script src="assets/admin/js/demo/dashboard.js"></script> -->
<!-- <script src="assets/admin/js/demo/tables-footable.js"></script> -->

 <script>
	$(document).ready( function () {
		$("#myTable").DataTable();
	});

    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
        let switchery = new Switchery(html,  { size: 'small' });
    });
    </script>
	
</body>
</html>
