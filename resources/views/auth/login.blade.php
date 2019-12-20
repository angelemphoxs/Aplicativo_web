<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--link rel="stylesheet" type="text/css" href="css/app.css"-->
    <link rel="stylesheet" type="text/css" href="css/metro.css">

    <!-- Styles -->
    <style type="text/css">
        body{
            background-image: url(img/autumn-forest-4561344_1920.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <div class="pos-fixed pos-center cell-4">
        <div data-role="panel">
            <div class="container">
                <img src="img/icons8-user-shield-64.png" style="display:block;margin:auto;">
                <h3 style="text-align: center;">Iniciar Sesión</h3>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Correo Electronico" class="{{ $errors->has('email') ? ' alert' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
                        @if ($errors->has('email'))
                            <small class="fg-red">{{ $errors->first('email') }}</small>
                        @endif
                        <!--small class="text-muted">We'll never share your email with anyone else.</small-->
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Contraseña" class="{{ $errors->has('password') ? ' alert' : '' }}" name="password" required/>
                            @if ($errors->has('password'))
                                <small class="fg-red">{{ $errors->first('password') }}</small>
                            @endif
                    </div>
                    <div class="form-group">
                        <input type="checkbox" data-role="checkbox" data-caption="Recordarme">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button primary ">Iniciar Sesión</button><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/metro.js"></script>
</body>
</html>
