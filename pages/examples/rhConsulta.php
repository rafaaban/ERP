<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Consulta de empleados</h2>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#consulta">Consulta</a></li>
      <li><a data-toggle="tab" href="#datosG">Datos generales</a></li>
      <li><a data-toggle="tab" href="#estudios">Estudios </a></li>
      <li><a data-toggle="tab" href="#documentos">Documentos extra</a></li>
    </ul>

    <div class="tab-content">

      <div id="consulta" class="tab-pane fade in active">
        <p>
         <label class="control-label col-sm-2" for="id">Id del empleado</label>
         <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar</button>
            </span>
          </div>
        </div>
      </p>
    </div>

    <div id="datosG" class="tab-pane fade">
         <form class="form-horizontal" role="form" method="POST" action="../pages/examples/registrar.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombre">Nombre</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nombre" placeholder="Enter nombre(s)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ApellidoP">Apellido Paterno:</label>
                            <div class="col-sm-4">          
                                <input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno">
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
                                <input type="text" class="form-control" id="telTrab" placeholder="(00)-00-00-00-00">
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
      <h3>Estudios realizados</h3>

      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Grado obtenido</th>
            <th>Título obtenido</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
            <td>john@example.com</td>
          </tr>
        </table>
      </div>

      <div id="documentos" class="tab-pane fade">
        <h3>Documentos Extras</h3>
        <table class="table">
          <thead>
            <thead>
              <tr>
                <th>Curso obtenido</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </body>
    </html>
