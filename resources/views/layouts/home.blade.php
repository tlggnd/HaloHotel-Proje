
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets') }}/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<!-- StyleSheet -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/slicknav.min.css">
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css/reset.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/style.css">
	<link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
	@yield('css')
	@yield('header.js')
</head>
<body class="js">
@include('home._header')
@section('content')
@show
@include ('home._footer')
@yield('footer.js')
</body>
</html>