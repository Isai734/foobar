@extends('master')
@section('title', 'Foorba|Formación de Obreros Para La Obra')
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio De Sesión</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style_login.css')}}">

    <style>

        .login {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        #avatar {
            width: 200px;
            height: 200px;
            margin: 0px auto 10px;
            display: block;
            border-radius: 50%;
        }

        .container {
            max-width: 380px;
        }

    </style>

    <div class="panel">
        <div class="inner">
            <div id="backgroundchange">
                <div class="backgroundimg" id="back1"></div>
                <div class="backgroundimg" id="back2"></div>
                <div class="backgroundimg" id="back3"></div>
                <div class="backgroundimg" id="back4"></div>
                <div class="backgroundimg" id="back5"></div>
            </div>
        </div>
    </div>
</head>
<body class="login">

<div class="container">
    <br>
    <div class="img-circle">
        <div class="col-xs-12">
            <img src="{{url('images/logoimcye.png')}}" id="avatar">
        </div>
    </div>

    <!-- FORMULARIO -->
    <form name="form_1" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validar()"
          autocomplete="off">

        <label style="font-size: 19px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : ''; ?></label>
        <div class="form-group-lg">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control" autofocus>
        </div>
        <br>
        <div class="form-group-lg">
            <input type="password" id="contra" name="contra" placeholder="Contraseña" class="form-control">
        </div>
        <br>
        <table class="table">
            <tr>
                <td>
                    <button name="boton" type="submit" class="btn btn-md"
                            style="background-color: #00796B; color: white"><span
                                class="glyphicon glyphicon-log-in glyphicon-align-right"></span> Iniciar Sesión
                    </button>

                </td>
                <td>
                    <button name="entrar" onclick="registrar()" type="button" class="btn btn-md btn-primary"><span
                                class="glyphicon glyphicon-check"></span> Registrate
                    </button>
                </td>
            </tr>
        </table>


    </form>
</div>




<script>
    function registrar() {
        window.location = "../cliente/AddPersona.php";
    }
</script>


</body>
</html>