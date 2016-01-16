<!DOCTYPE>
<html>
  <head>
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
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


 <script type="text/javascript">
       $(document).ready(function() {

         $('#div-btn1').click(function(){
      $.ajax({
      type: "POST",
      url: "//localhost:8080/ERP/pages/examples/rhInicio.php",
      success: function(a) {
              $('#paginas').html(a);

   }
      });
   });

  $('#div-btn2').click(function(){
      $.ajax({
      type: "POST",
      url: "//localhost:8080/ERP/pages/examples/rhAlta.php",
      success: function(a) {
              $('#paginas').html(a);

   }
      });
   });

   $('#div-btn3').click(function(){
      $.ajax({
      type: "POST",
      url: "//localhost:8080/ERP/pages/examples/rhBaja.php",
      success: function(a) {
              $('#paginas').html(a);

   }
      });
   });


 $('#div-btn4').click(function(){
      $.ajax({
      type: "POST",
      url: "//localhost:8080/ERP/pages/examples/rhCambio.php",
      success: function(a) {
              $('#paginas').html(a);

   }
      });
   });


 $('#div-btn5').click(function(){
      $.ajax({
      type: "POST",
      url: "//localhost:8080/ERP/pages/examples/rhConsulta.php",
      success: function(a) {
              $('#paginas').html(a);

   }
      });
   });

    });
     </script>



  </head>


  <body class="hold-transition skin-blue sidebar-mini">

<?php

$permiso1 =0;
$permiso2 =0;
$permiso3 =0 ;
$permiso4 =0;
$permiso5=0;
$permiso6=0;
$permiso7 =0;
$imagen ="";



$usuario=utf8_encode($_POST['usuario']);
$contrasenia=utf8_encode($_POST['contrasenia']);
$usuario= strtolower ($usuario);
$link = mysqli_connect('bordadoscasamorales.com:3306', 'bordad18_rafita', 'Teamoatterafa1.')
    or die('No se pudo conectar a: ' . mysql_error());

mysqli_select_db($link,'bordad18_ERP') or die('No se pudo seleccionar la base de datos');

$result = mysqli_query($link, "SELECT usuario , contrasenia , nombre , apellido , permiso , idpermiso ,imagen FROM usuarios;") or die('Consulta fallida: ' . mysql_error());


//verificar su el usuario se encunetra en la base de datos...
while($fila = mysqli_fetch_array($result)) 
{ 
if ($fila['usuario']==$usuario and $fila['contrasenia']==$contrasenia )
{
  $nombre=utf8_encode($fila['nombre']);
  $apellido=utf8_encode($fila['apellido']);
  $permiso =utf8_encode($fila['permiso']);
  $imagen =utf8_encode($fila['imagen']);

$query2 = "SELECT idpermisos,p1,p2,p3,p4,p5,p6,p7  FROM permisos;"; 
$result2 = mysqli_query($link,$query2) or die('Consulta fallida: ' . mysql_error());

while($fila = mysqli_fetch_array($result2)) 
{
if ($fila['idpermisos']==$permiso  )
{
$permiso1 = $fila['p1'];  
$permiso2 = $fila['p2'];  
$permiso3 = $fila['p3'];  
$permiso4 = $fila['p4'];  
$permiso5 = $fila['p5'];  
$permiso6 = $fila['p6'];  
$permiso7 = $fila['p7'];  
}
}
$band=1;
break;
}else
{
$band=0;
}
}


if ($band ==0)
{?>
<script language="javascript"> 
  alert("Revisa tu usuario y contraseña..."); 

  location = 'pages/examples/login.html';
  </script> 
<?php
}
?>


    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="inicio.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">ERP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sistema </b>ERP</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">php 4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Tienes PHP 4 mensajes </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/<?php echo $imagen ?>" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/<?php echo $imagen ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $nombre ;echo " ";  echo $apellido ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/<?php echo $imagen ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $nombre ;echo " ";  echo $apellido ?>
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                  
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Mi perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="pages/examples/login.html" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/<?php echo $imagen ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> <?php echo $nombre ;echo " "; echo $apellido ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Módulos de usuario</li>
           
            <?php 
              if ($permiso1 == "1")
              {
              ?>
                 <li class="treeview">
             <a href="#">
                <i class="fa fa-dashboard"></i> <span>Recursos Humanos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li> <a href="#" id="div-btn1" ><i class="fa fa-circle-o"></i>Incio</a></li>
                <li class="active"><a href="#"id="div-btn2"><i class="fa fa-circle-o"></i> Alta</a></li>
                 <li class="active"><a href="#"id="div-btn3"><i class="fa fa-circle-o"></i> Baja</a></li>
                  <li class="active"><a href="#"id="div-btn4"><i class="fa fa-circle-o"></i> Cambio </a></li>
                   <li class="active"><a href="#"id="div-btn5"><i class="fa fa-circle-o"></i>Consulta</a></li>
              </ul>
             </li>
             <?php }?>

               <?php 
              if ($permiso2 == "1")
              {
              ?>

   <li class="treeview">
              <a href="#">
                <i class="fa fa-certificate"></i> <span>Ventas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>
              <?php }?>




               <?php 
              if ($permiso3 == "1")
              {
              ?>

   <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Compras</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>

  <?php }?>

    <?php 
              if ($permiso4 == "1")
              {
              ?>
   <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Producción</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>

              <?php }?>


                <?php 
              if ($permiso5 == "1")
              {
              ?>
   <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>CRM</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>
 <?php }?>

 <?php
 if ($permiso6 == "1")
              {
              ?>

   <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i> <span>contabilidad</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>
  <?php }?>


 <?php
 if ($permiso7 == "1")
              {
              ?>

   <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Nueva entrevista</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Curriculum </a></li>
              </ul>
            </li>


 <?php }?>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="paginas">
    






    </div>

  
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
 
    <script src="plugins/chartjs/Chart.min.js"></script>
  
    <script src="dist/js/pages/dashboard2.js"></script>

    <script src="dist/js/demo.js"></script>



  </body>
</html>
