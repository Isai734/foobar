@extends('master')
@section('title', 'Foorba|Formación de Obreros Para La Obra')

<body class="homepage">
<div id="header">

    <div id="logo">
        <img src="{{url('images/logoimcye.png')}}" height="20%">
        <a>Fooorba</a>


    </div>
</div>


<div id="main">
    <div id="content" class="container">

        <ul class="nav nav-tabs" id="tabs">
            <li class="active"><a data-toggle="tab" href="#home">Datos del Obrero</a></li>
            <li><a data-toggle="tab" href="#menu1">Datos de Tutor</a></li>
            <li><a data-toggle="tab" href="#menu2">Escolaridad</a></li>
            <li><a data-toggle="tab" href="#menu3">Vivienda</a></li>
        </ul>

        <div class="row">
            <div class="col-lg-12">
                <!-- Tab links -->
                <!--Datos de Obrero-->
                <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">

                        <div class="col-lg-12">
                            <div class="page-header" style="font-size: 25pt; color: #00796B">
                                <span class="glyphicon glyphicon-bishop"></span> Datos del cliente
                            </div>
                        </div>
                        <!-- **************FORMULARIO*************** -->
                        <form class="form-horizontal" action="#" method="POST" onsubmit="return validar();"
                              autocomplete="off">


                            <!--Nombre del cliente-->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nombre:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <!-- Apellido paterno del cliente-->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Primer Apellido:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido_paterno"
                                           name="apellido_paterno"
                                           required>
                                </div>
                            </div>

                            <!-- Apellido Materno del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Segundo Apellido:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido_paterno"
                                           name="apellido_materno"
                                           required>
                                </div>
                            </div>

                            <!-- Teléfono del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Teléfono:</label>
                                <div class="col-sm-3">
                                    <input type="phone" class="form-control" id="telefono" name="telefono" required>
                                    <span>Sin espacios ni guiones medios.</span>
                                </div>
                            </div>

                            <!-- Dirección del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Dirección:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                            </div>
                            <!-- Email del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">E-mail:</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <!-- RFC del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">RFC*:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rfc" name="rfc">
                                    <span>*Opcional</span>
                                </div>
                            </div>

                            <!-- Botónnes para registrar y cancelar -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn" style="background-color: #00796B; color: white">
                                        Registrar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#mymodal">
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <form class="form-horizontal">
                            <div class="col-lg-12">
                                <div class="page-header" style="font-size: 25pt; color: #00796B">
                                    <span class="glyphicon glyphicon-bishop"></span> Datos del cliente
                                </div>
                            </div>
                            <!--Nombre del cliente-->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nombre:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <!-- Apellido paterno del cliente-->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Primer Apellido:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido_paterno"
                                           name="apellido_paterno"
                                           required>
                                </div>
                            </div>

                            <!-- Apellido Materno del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Segundo Apellido:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido_paterno"
                                           name="apellido_materno"
                                           required>
                                </div>
                            </div>

                            <!-- Teléfono del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Teléfono:</label>
                                <div class="col-sm-3">
                                    <input type="phone" class="form-control" id="telefono" name="telefono" required>
                                    <span>Sin espacios ni guiones medios.</span>
                                </div>
                            </div>

                            <!-- Dirección del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Dirección:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                            </div>
                            <!-- Email del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">E-mail:</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <!-- RFC del cliente -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">RFC*:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="rfc" name="rfc">
                                    <span>*Opcional</span>
                                </div>
                            </div>


                            <!-- Botónnes para registrar y cancelar -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn" style="background-color: #00796B; color: white">
                                        Registrar
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#mymodal">
                                        Cancelar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <section>
            <header>
                <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
            </header>
            <ul class="contact">
                <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                <li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
                <li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
                <li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
            </ul>
        </section>
    </div>
</div>


</body>