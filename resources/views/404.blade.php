<html>
<head>
    <title>
        Error
    </title>
    <style>
        .image{
            width: 164px;
            height: 199px;
        }
        .main-container{
            width: 100%;
        }
        .leftside{
            padding-top: 40px;
        }
    </style>
    <link    href="{{ asset('frontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<br>
<br>
<br>
<br>
<div class="container main-container">
    <div class="pull-left col-sm-6 ">
        <h3 class="pull-right leftside">404 Page not found</h3>
    </div>
    <div class="pull-right col-sm-6">
        <img src="{{asset('error/404.jpg')}}" class="image">
    </div>
</div>
</body>
</html>