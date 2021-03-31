<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    {{ Html::style('Admin/css/styles.css') }}
    {{ Html::style('Admin/css/dataTables.bootstrap4.min.css') }}
    {{ Html::script('Admin/js/all.min.js') }}
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
    {{ Html::script('Admin/js/jquery-3.5.1.js') }}
    {{ Html::script('Admin/js/bootstrap.bundle.min.js') }}
    {{ Html::script('Admin/js/scripts.js') }}
    {{ Html::script('Admin/js/validation.js') }}
    {{ Html::script('Admin/js/jquery.dataTables.min.js') }}
    {{ Html::script('Admin/js/dataTables.bootstrap4.min.js') }}
    {{ Html::script('Admin/js/datatables-demo.js') }}
    {{ Html::script('https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js') }}

    <script>
        tinymce.init({
            selector: '.editor',
            branding: false
        });
    </script>

    @yield('scripts')
</body>

</html>