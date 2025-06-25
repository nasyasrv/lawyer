<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets_admin/" data-template="horizontal-menu-template-no-customizer" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets_admin/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/css/rtl/theme-default.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets_admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/node-waves/node-waves.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/swiper/swiper.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/css/pages/cards-advance.css')}}" />

    <!-- Helpers -->
    <script src="{{ asset('assets_admin/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets_admin/js/config.js')}}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->
            @include('admin.layouts.navbar')
            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    @include('admin.layouts.sidebar')
                    <!-- / Menu -->

                    <!-- Content -->
                    @yield('contents')
                    <!--/ Content -->

                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets_admin/vendor/js/core.js -->

    <script src="{{ asset('assets_admin/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets_admin/vendor/libs/apex-charts/apexcharts.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/swiper/swiper.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets_admin/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets_admin/js/dashboards-analytics.js')}}"></script>
  </body>
</html>

