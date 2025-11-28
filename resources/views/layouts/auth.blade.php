<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Rwanda Diabetes Associations</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vertical-default-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            @yield('content')
                        </div>
                        <ul class="auth-footer">
                            <li>
                                <a href="#">Conditions</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                        </ul>
                        <p class="footer-text text-center">Copyright © <span class="current-year"></span> config('app.name'). All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>