<html class="fixed">

<head>

    <!-- Basic -->
    <title>@yield('title')</title>
	<meta charset="UTF-8">

	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />


	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
		<!-- <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
			<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" /> -->

			<!-- Theme CSS -->
			<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />

			<!-- Theme Custom CSS -->


			<!-- Head Libs -->


</head>
<body>
			<!-- start: page -->
			<section class="body-sign">
                @yield('content')
			</section>
			<!-- end: page -->

			<!-- Vendor -->

</body>

		<!-- Mirrored from preview.oklerthemes.com/porto-admin/2.2.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2019 04:14:02 GMT -->
</html>
