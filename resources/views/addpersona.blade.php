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
            <li class="active"><a data-toggle="tab" href="#home">Datos Personales</a></li>
            <li><a data-toggle="tab" href="#menu1">Familiares</a></li>
            <li><a data-toggle="tab" href="#menu2">Escolaridad</a></li>
            <li><a data-toggle="tab" href="#menu3">Vivienda</a></li>
        </ul>

        <div class="row">
            <div class="col-lg-12">
                <!-- Tab links -->

                <div class="tab-content">
                    <!--Datos de Obrero-->
                    <div id="home" class="tab-pane fade in active">

                        <div class="col-lg-12">
                            <div class="page-header" style="font-size: 25pt; color: #00796B">
                                <span class="glyphicon glyphicon-user"></span> Datos del Obrero
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

                            <!-- Fecha de Nacimiento -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Fecha de Nacimeinto:</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control" id="apellido_paterno"
                                           name="apellido_materno"
                                           required>
                                </div>
                            </div>

                            <!-- Ocupacion -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Ocupación:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="apellido_paterno"
                                            name="apellido_materno"
                                            required>
                                        <option value="estudent"></option>
                                        <option value="estudent">Estudiante</option>
                                        <option value="employe">Empleado</option>
                                        <option value="other">Otro</option>
                                    </select>
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

                            <!-- Estado civil -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Estado Civil:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="apellido_paterno"
                                            name="apellido_materno"
                                            required>
                                        <option value="empty"></option>
                                        <option value="single">Soltero(a)</option>
                                        <option value="maried">Casado(a)</option>
                                        <option value="other">Divorciado(a)</option>
                                        <option value="other">Viudo(a)</option>
                                    </select>
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

                    <!--Datos de Tutor-->
                    <div id="menu1" class="tab-pane fade">
                        <form class="form-horizontal">
                            <!--Header-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="page-header" style="font-size: 25pt; color: #00796B">
                                        <span class="glyphicon glyphicon-user"></span> Padre
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="page-header" style="font-size: 25pt; color: #00796B">
                                        <span class="glyphicon glyphicon-user"></span> Madre
                                    </div>
                                </div>
                            </div>

                            <!--Nombre-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-2">Nombre:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label col-sm-2">Nombre:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>

                            </div>

                            <!-- Apellido paterno-->
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-3">Primer Apellido:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="apellido_paterno"
                                               name="apellido_paterno"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-3">Primer Apellido:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="apellido_paterno"
                                               name="apellido_paterno"
                                               required>
                                    </div>
                                </div>
                            </div>


                            <!-- Apellido Materno -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Segundo Apellido:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="apellido_paterno"
                                           name="apellido_materno"
                                           required>
                                </div>
                            </div>

                            <!-- Teléfono -->
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

                            <!-- Ocupacion -->
                            <div class="form-group">
                                <label class="control-label col-sm-2">Ocupación:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="apellido_paterno"
                                            name="apellido_materno"
                                            required>
                                        <option value="empty"></option>
                                        <option value="Profesional">Profesionista</option>
                                        <option value="employe">Oficio</option>
                                        <option value="other">Otro</option>
                                    </select>
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
                        <form role="form">
                            <div class="form-group">
                                <label for="ejemplo_email_1">Email</label>
                                <input type="email" class="form-control" id="ejemplo_email_1"
                                       placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label for="ejemplo_password_1">Contraseña</label>
                                <input type="password" class="form-control" id="ejemplo_password_1"
                                       placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                                <input type="file" id="ejemplo_archivo_1">
                                <p class="help-block">Ejemplo de texto de ayuda.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Activa esta casilla
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
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
                <span class="byline">"Juntos hasta el ultimo aliento"</span>
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