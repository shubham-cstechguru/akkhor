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
    {{ Html::style('web/Admin/css/styles.css') }}
    {{ Html::style('web/Admin/css/dataTables.bootstrap4.min.css') }}
    {{ Html::script('web/Admin/js/all.min.js') }}
    @yield('css')

</head>

<body class="sb-nav-fixed">
    @include('backend.common.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('backend.templates.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @include('backend.templates.flash-message')
                    @yield('content')
                </div>
            </main>
        </div>
        {{ Html::script('web/Admin/js/jquery-3.5.1.js') }}
        {{ Html::script('web/Admin/js/bootstrap.bundle.min.js') }}
        {{ Html::script('web/Admin/js/scripts.js') }}
        {{ Html::script('web/Admin/js/validation.js') }}
        {{ Html::script('web/Admin/js/jquery.dataTables.min.js') }}
        {{ Html::script('web/Admin/js/dataTables.bootstrap4.min.js') }}
        {{ Html::script('web/Admin/js/datatables-demo.js') }}
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