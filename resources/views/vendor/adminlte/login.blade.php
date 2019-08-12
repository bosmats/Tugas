<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>Admin LTE</title>
</head>
<body class="bdy">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <div class="card mt-5 mx-auto">
                <div class="card-body">
                    <h3 class="card-title text-center txt1">LOGIN</h3>
                    <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                placeholder="{{ trans('adminlte::adminlte.email') }}">
                            <span class="form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input type="password" name="password" class="form-control"
                                placeholder="{{ trans('adminlte::adminlte.password') }}">
                            <span class="form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit"
                                        class="btn btn-dark btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <div class="auth-links text-center txt2 ">
                        <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}"
                        class="text-center"
                        >{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a>
                        <br>
                        @if (config('adminlte.register_url', 'register'))
                            <a href="{{ url(config('adminlte.register_url', 'register')) }}"
                            class="text-center"
                            >{{ trans('adminlte::adminlte.register_a_new_membership') }}</a>
                        @endif
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>

                
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
    
