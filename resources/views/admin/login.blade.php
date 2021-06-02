<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> ADMIN::STANDARDIX</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
    <img src="{{asset('/assets/images/logo1.png')}}" class="w-50 h-50" alt="">
</div>
<!-- /.login-logo -->
<div class="card">
<div class="rounded shadow card-body login-card-body">
    <p class="login-box-msg">Démarrez votre session</p>

    <form action="{{route('post.login')}}" method="post">
    @csrf
    <div class="mb-3 input-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
        </div>
    </div>
    <div class="mb-3 input-group">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
    </div>
    @if(Session::get('fail'))
        <div class="text-danger">
        {{ Session::get('fail') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
        <button type="submit" class="btn btn-warning btn-block font-weight-bold">SE CONNECTER</button>
        </div>
    </div>
    </form>
</div>
</div>
</div>
</body>
</html>
