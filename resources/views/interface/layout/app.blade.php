<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('interface/img/LOGO_NS_2.png') }}" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('interface/img/LOGO_NS_2.png') }}">
    <link rel="shortcut icon" href="{{ asset('interface/img/LOGO_NS_2.png') }}" type="image/png">

    <title>LAWFUL LAWFIRM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('interface/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/css/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('interface/css/style.css') }}">
</head>

<body>
    <x-loader />
    <header class="header_area">
        <div class="main_menu">
            @include('interface.layout.navbar')
        </div>
    </header>
    @yield('content')
    @stack('content')
    @include('interface.layout.footer')

    <!-- Tombol WA -->
    <div id="wa-button" onclick="togglePopup()">
        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="Chat WA" />
    </div>

    <!-- Pop-up WA -->
    <div id="wa-popup">
        <p>Hai! Ada yang bisa kami bantu?</p>
        <a href="https://wa.link/psypax" target="_blank">Chat Sekarang</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('interface/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('interface/js/popper.js') }}"></script>
    <script src="{{ asset('interface/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('interface/js/stellar.js') }}"></script>
    <script src="{{ asset('interface/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('interface/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('interface/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('interface/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('interface/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('interface/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('interface/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('interface/js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('interface/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('interface/js/theme.js') }}"></script>

    <script>
        function togglePopup() {
            var popup = document.getElementById("wa-popup");
            if (popup.style.display === "none" || popup.style.display === "") {
                popup.style.display = "block";
                popup.style.animation = "fadeSlideIn 0.5s ease forwards";
            } else {
                popup.style.display = "none";
            }
        }

        setTimeout(function() {
            document.getElementById("wa-popup").style.display = "block";
            document.getElementById("wa-popup").style.animation = "fadeSlideIn 0.5s ease forwards";
        }, 3000); // 3 detik
    </script>
    @stack('script')
</body>

</html>
