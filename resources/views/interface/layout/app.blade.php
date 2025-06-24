<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('interface/img/favicon.png')}}" type="image/png">
	<title>LAWFUL LAWFIRM</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('interface/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/css/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('interface/vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('interface/css/style.css')}}">
</head>

<body>
    @include('interface.layout.header')
    @yield('contents')
    @stack('contents')
    @include('interface.layout.footer')

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('interface/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('interface/js/popper.js')}}"></script>
	<script src="{{ asset('interface/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('interface/js/stellar.js')}}"></script>
	<script src="{{ asset('interface/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('interface/vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{ asset('interface/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('interface/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('interface/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('interface/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('interface/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{ asset('interface/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('interface/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('interface/js/theme.js')}}"></script>
</body>

</html>
