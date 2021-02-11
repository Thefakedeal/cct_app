<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCT | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--Datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- NavBar -->
        @include('admin.components.nav')
        <!-- End Of Nav Bar -->

        <!-- SideBar -->
        @include('admin.components.aside')
        <!-- End SideBar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-3">

            <!-- Main content -->
            <section class="content">
                @if (session('success'))
                    <div class="alert alert-primary m-2">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('fail'))
                    <div class="alert alert-warning m-2">
                        {{ session('fail') }}
                    </div>
                @endif
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.components.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <!--Datatable-->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });

    </script>
</body>

</html>