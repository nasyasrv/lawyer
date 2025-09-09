<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets_admin/" data-template="horizontal-menu-template-no-customizer" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Admin Lawyer</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('interface/img/LOGO_NS_2.png') }}" type="image/png">

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
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/css/rtl/theme-raspberry.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets_admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/node-waves/node-waves.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/libs/@form-validation/form-validation.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendor/css/pages/page-auth.css')}}" />

    <!-- Helpers -->
    <script src="{{ asset('assets_admin/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets_admin/js/config.js')}}"></script>
</head>

<body>
    <!-- Content -->
    <x-loader />

    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="index.html" class="app-brand auth-cover-brand">
            <img src="{{ asset('interface/img/LOGO_NS.png') }}" alt="" style="width:250px;">
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-8 p-0">
                <div class="auth-cover-bg auth-cover-bg-color-dark d-flex justify-content-center align-items-center">

                    <img src="{{ asset('interface/img/1.jpg')}}" alt="auth-login-cover"
                        class="platform-bg" style="height:auto;" />
                </div>
            </div>
            <!-- /Left Text -->

            @yield('contents')
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

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
    <script src="{{ asset('assets_admin/vendor/libs/@form-validation/popular.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/@form-validation/bootstrap5.js')}}"></script>
    <script src="{{ asset('assets_admin/vendor/libs/@form-validation/auto-focus.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets_admin/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets_admin/js/pages-auth.js')}}"></script>
</body>

</html>
