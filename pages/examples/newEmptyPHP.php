<form class="form-horizontal" role="form" method="POST" action="/pages/example/registrar.php">
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
                                <form role="form">
                                    <select class="form-control" id="sel1">
                                        <option>temporal </option>    
                                        <option>parcial </option>
                                        <option>indefinido </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="area">Area:</label>
                            <div class="col-sm-4"> 
                                <form role="form">
                                    <select class="form-control" id="sel2">
                                        <option>Recursos Humanos </option>    
                                        <option>Ventas </option>
                                        <option>Finazas </option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!--<div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                  </div>
                        -->
                    </form>