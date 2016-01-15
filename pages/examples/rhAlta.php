<?php
"aki esta php";

"aki va a ir un select";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ERP inicio.</title> 

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    </head>
    <body>
        <div class="container">
            <h2>Registrar un empleado</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#datosG">Datos generales</a></li>
                <li><a data-toggle="tab" href="#cuentas">Cuentas</a></li>
                <li><a data-toggle="tab" href="#estudios">Estudios</a></li>
                <li><a data-toggle="tab" href="#documentos">Documentos</a></li>
            </ul>
            <div class="tab-content">
                <p></p>
                <div id="datosG" class="tab-pane fade in active">
                    <form class="form-horizontal" role="form" method="POST" action="../pages/examples/registrar.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombre">Nombre</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre(s)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ApellidoP">Apellido Paterno:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="apellidoP" name placeholder="Apellido Paterno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ApellidoM">Apellido Materno:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fecha">fecha de nacimiento:</label>
                            <div class="col-sm-4">          
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="telCel">Telefono Celular:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="telCel" placeholder="(00)-00-00-00-00">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="telTrab">Telefono del Trabajo:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" name="telTrab" id="telTrab" placeholder="(00)-00-00-00-00">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fax">fax:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="fax" placeholder="fax">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">email:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="email" placeholder="email">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="jefeInmediato">Jefe Inmediato:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="jefeInmediato" placeholder="jefeInmediato">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="rfc">rfc:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="rfc" placeholder="rfc">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tipoEmpleado">Tipo de Empleado:</label>
                            <div class="col-sm-4"> 
                                <for role="form">
                                    <select class="form-control" id="sel1">
                                        <option value="temporal">temporal </option>    
                                        <option value="parcial">parcial </option>
                                        <option value="indefinido">indefinido </option>
                                    </select>
                                </for>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="area">Area:</label>
                            <div class="col-sm-4"> 
                                <for role="form">
                                    <select class="form-control" id="sel2">
                                        <option value="recursosH">Recursos Humanos </option>    
                                        <option value="ventas">Ventas </option>
                                        <option value="finanzas">Finazas </option>
                                    </select>
                                </for>
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="cuentas" class="tab-pane fade">
                    <form class="form-horizontal" role="form" method="POST" action="erp/pages/examples/registrar.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombreU">Nombre de usuario:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="nombreU">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="password">Contraseña:</label>
                            <div class="col-sm-4">          
                                <input type="password" class="form-control" id="password">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="password2">confirmar contraseña:</label>
                            <div class="col-sm-4">          
                                <input type="password" class="form-control" id="password2">
                            </div>    
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" on-click="insertar("empleados")">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="estudios" class="tab-pane fade">
                    <form class="form-horizontal" role="form" method="POST" action="/pages/example/registrar.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="nombre">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="descripcion" placeholder="actividades a realizar">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tipoEscolar">Tipo de escolaridad:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="tipoEscolar">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tituloO">Titulo obtenido:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="tituloO">
                            </div>    
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Guardar</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div id="documentos" class="tab-pane fade">
                    <form class="form-horizontal" role="form" method="POST" action="/pages/example/registrar.php">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="empleado">Empleado</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="empleado">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombreC">Nombre del curso:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="nombreC">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="descripcion" placeholder="actividades a realizar">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fechaI">Fecha de inicio:</label>
                            <div class="col-sm-4">          
                                <input type="date" class="form-control" id="fechaI">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fechaT">Fecha de termino:</label>
                            <div class="col-sm-4">          
                                <input type="date" class="form-control" id="fechaT">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombreCap">Nombre de la capacitación:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="nombreCap">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="descripcionC">Descripción:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="descripcion" placeholder="actividades a realizar">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fechaIC">Fecha de inicio:</label>
                            <div class="col-sm-4">          
                                <input type="date" class="form-control" id="fechaI">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fechaTC">Fecha de termino:</label>
                            <div class="col-sm-4">          
                                <input type="date" class="form-control" id="fechaT">
                            </div>    
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Guardar</button>
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </body>
        </html>
