<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vertical-default-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-fixedcolumns-bs4/fixedColumns.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/quill/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simplemde/simplemde.min.css')}}" />
</head>

<body>
    <div class="container-scroller">
        @include('includes.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.sidebar')
            <div class="main-panel">
                @yield('content')
                @include('includes.admin-footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/justgage/justgage.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets/js/demo_1/dashboard.js') }}"></script>
    <!-- End custom js for this page -->

    <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/data-table.js') }}"></script>

    <script src="{{ asset('admin/assets/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/shared/editorDemo.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/simplemde/simplemde.min.js')}}"></script>
</body>

</html>