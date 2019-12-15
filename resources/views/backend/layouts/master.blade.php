<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/frontend/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/backend/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/backend/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="assets/backend/css/buttons.bootstrap4.min.css>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="assets/frontend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/frontend/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/frontend/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/frontend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/frontend/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/frontend/plugins/summernote/summernote-bs4.css">
    <style type="text/css">
        *{
            font-family: Arial;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('backend.layouts.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('backend.layouts.mainSider')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    @include('backend.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/frontend/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/frontend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/frontend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/frontend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/frontend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/frontend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/frontend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/frontend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/frontend/plugins/moment/moment.min.js"></script>
<script src="assets/frontend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/frontend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/frontend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/frontend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/frontend/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/frontend/dist/js/pages/dashboard.js"></script>
<script type="text/javascript" charset="utf8" src="assets/backend/js/jquery.dataTables.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/frontend/dist/js/demo.js"></script>
<script src="assets/backend/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/backend/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
</script>
</body>
</html>
