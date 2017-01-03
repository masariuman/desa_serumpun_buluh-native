
                        

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>DESA SERUMPUN BULUH</title>
    <!-- <link href="{{asset('bootstrap_3_3_6/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" > -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" />
    <link href="{{url('icon/bambu.png')}}" rel="icon" type="image/x-icon">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body>

    <section class="container login-form">
        <section>
            <form method="post" action="{{ url('/login') }}" role="login">
            {{ csrf_field() }}
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-responsive" />
            
                <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="form-control" placeholder="Masukkan ID" />
                    <span class="glyphicon glyphicon-user"></span>
                                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                
                <div class="form-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" id="password" required class="form-control" placeholder="Masukkan Kata Sandi" />
                    <span class="glyphicon glyphicon-lock"></span>
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-block">MASUK</button>
                
                <p class="masuk">Silahkan masuk terlebih dahulu</p>
                <p class="masuk"><a href="{{url('password/reset')}}"><font color="green"><i>Lupa Kata Sandi ?</i></font></a></p>
            </form>
        </section>
    </section>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</body>



<!-- //content -->



</html>