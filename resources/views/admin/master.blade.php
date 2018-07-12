<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin @yield('title') </title>
    <!-- Bootstrap core CSS-->

    <link href="{{asset('admin/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('admin/')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin/')}}/css/sb-admin.css" rel="stylesheet">
    <style>
        .dropbtn {
            background: #b5b0b0;;
            font-size: 18px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('dashboard')}}">Laravel 5.5</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        @include('admin.includes.menu')
        @include('admin.includes.header')
    </div>
</nav>
<div class="content-wrapper">
@yield('content')

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@include('admin.includes.footer')
    <!-- Scroll to Top Button-->
@include('admin.includes.scroll')
    <!-- Bootstrap core JavaScript-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script src="{{asset('admin/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('admin/')}}/vendor/popper/popper.min.js"></script>
    <script src="{{asset('admin/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('admin/')}}/vendor/chart.js/Chart.min.js"></script>
    <script src="{{asset('admin/')}}/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{{asset('admin/')}}/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/')}}/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('admin/')}}/js/sb-admin-datatables.min.js"></script>
    <script src="{{asset('admin/')}}/js/sb-admin-charts.min.js"></script>

    @yield('js')
</div>
</body>

</html>
