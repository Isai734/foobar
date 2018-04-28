<html>

<head>
    <title>@yield('title')</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/style-loader.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/style_custom.css') }}"/>
    <div class="loader">
    </div>

    <script src="{{asset('js/skel.min.js') }}"></script>
    <script src="{{asset('js/skel-panels.min.js') }}"></script>
    <script src="{{asset('js/init.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{asset('css/skel-noscript.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style-desktop.css')}}"/>
    </noscript>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="main.html">
                <span class="glyphicon glyphicon-wrench"></span> Administracion
            </a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">

                <li>
                    <a href="Calendario.php">
                        <span class="glyphicon glyphicon-list-alt"></span> Citas
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="AddCliente.php">
                                Cliente
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dopdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> Clientes <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('/register') }}">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo Cliente
                            </a>
                        </li>

                        <li>
                            <a href="QueryCliente.php">
                                <span class="glyphicon glyphicon-search"></span> Consultar Cliente
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="dopdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-bed"></span> Autos <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="AddCliente.php">
                                Cliente
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dopdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-pushpin"></span> Ordenes de servicio <span
                                class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="AddCliente.php">
                                Cliente
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-list"></span> Inventario
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="AddCliente.php">
                                Cliente
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('login')}}">
                        <span class="glyphicon glyphicon-off"></span> Iniciar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript">
    $(window).load(function () {
        $(".loader").fadeOut();
    })
</script>

<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>