<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin-Login</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login</div>
      <div class="card-body">
        {!! Form::open(['url'=>'login','login','method'=>'POST']) !!}

          {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!!   Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter your email']) !!}
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
       {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter your email']) !!}
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </div>
        <div class="form-group">
          <label>{!! Form::checkbox('name','rememberMe') !!}Remember me</label>
        </div>
      <div class="form-group">

        {!! Form::submit('Login',['class'=>'btn btn-success btn-block']) !!}
      </div>

        {!! Form::close() !!}
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>

</html>
