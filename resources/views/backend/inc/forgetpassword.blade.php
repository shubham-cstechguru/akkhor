<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Forget Password</title>
    {{ Html::style('web/Admin/css/styles.css') }}
    {{ Html::script('web/Admin/js/all.min.js') }}
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                    <form action="{{ route('admin.forgetpassword.post') }}" method="POST">
                                        {!! csrf_field() !!}

                                        @if(\Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ \Session::get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif
                                        {{ \Session::forget('success') }}
                                        @if(\Session::get('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ \Session::get('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            @if ($errors->has('email'))
                                            <span class="help-block font-red-mint">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="{{ route('admin.login') }}">Return to login</a>
                                            <button type="submit" class="btn btn-primary" value="Login">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    {{ Html::script('web/Admin/js/jquery-3.5.1.slim.min.js') }}
    {{ Html::script('web/Admin/js/bootstrap.bundle.min.js') }}
    {{ Html::script('web/Admin/js/scripts.js') }}
    {{ Html::script('web/Admin/js/validation.js') }}
</body>

</html>