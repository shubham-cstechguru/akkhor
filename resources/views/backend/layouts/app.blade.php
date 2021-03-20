<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    {{ Html::style('Admin/css/styles.css') }}
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    {{ Html::style('Admin/css/dataTables.bootstrap4.min.css') }}
    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
    {{ Html::script('Admin/js/all.min.js') }}
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script> -->
    @yield('css')

</head>

<body class="sb-nav-fixed">
    @include('backend.common.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('backend.templates.sidebar')
        </div>
        <div id="layoutSidenav_content">
            @yield('content')
        </div>
    </div>
    {{ Html::script('Admin/js/jquery-3.5.1.slim.min.js') }}
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
    {{ Html::script('Admin/js/bootstrap.bundle.min.js') }}
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
    {{ Html::script('Admin/js/scripts.js') }}
    <!-- <script src="js/scripts.js"></script> -->
    {{ Html::script('Admin/js/Chart.min.js') }}
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    {{ Html::script('Admin/js/chart-area-demo.js') }}
    <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
    {{ Html::script('Admin/js/chart-bar-demo.js') }}
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    {{ Html::script('Admin/js/jquery.dataTables.min.js') }}
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> -->
    {{ Html::script('Admin/js/dataTables.bootstrap4.min.js') }}
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script> -->
    {{ Html::script('Admin/js/datatables-demo.js') }}
    <!-- <script src="assets/demo/datatables-demo.js"></script> -->

    @yield('scripts')
</body>

</html>