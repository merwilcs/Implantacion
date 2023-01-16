<?php

// $conexion=new mysqli('localhost','root','','implantacion');
include_once("../includes/db.php");

$connect=new db();
$conexion=$connect->conexion();
session_start();

 if (!isset($_SESSION['administrador'])) {
  //echo "hay sesion";
  //$user->setuser($user->$usersession->getcurrentuser());
  header("location:../vistas/login_modo_privilegiado.php");
}
 ?>

<html><head>
    <meta charset="UTF-8">
    <title>Gestion de usuario</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link href="../bootstrap.min.css" rel="stylesheet" type="text/css">
   
   <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="../plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/dist/css/skins/skin-blue-light.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

  
          <script src="plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="plugins/morris/raphael-min.js"></script>
<script src="plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/morris/example.css">
          <script src="plugins/jspdf/jspdf.min.js"></script>
          <script src="plugins/jspdf/jspdf.plugin.autotable.js"></script>
          
  </head>

  <body class="skin-blue-light sidebar-mini">
    <div class="wrapper">
     
            <header class="main-header">
       
        <div class="logo">
          
          <span class="logo-mini"><b>I</b>L</span>
          
          <span class="logo-lg"><b>Sistema de </b>Inventario</span>
        </div>

        
        <nav class="navbar navbar-static-top" role="navigation" style="height: 8%;">
         
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              
              <li class="dropdown user user-menu">
               
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                  <span class="">Administrador <b class="caret"></b> </span>

                </a>
                <ul class="dropdown-menu">
                 
                  
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="./logout.php" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
<!--
<div class="user-panel">
            <div class="pull-left image">
              <img src="1.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          -->
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" style="width: 150px;">
            <li class="header">ADMINISTRACION</li>
                                    <li><i class="fa fa-home"></i> <span>Inicio</span></li>
                                    <br>
           <li><i class="fa fa-shopping-cart"></i> <span>Ventas</span></li>
            
            <br>
            
            <li><i class="fa fa-glass"></i> <span>Productos</span></li>
            <br>
            <li class="treeview">
              <i class="fa fa-database"></i> <span>Usuarios</span> 
             
            </li>

            <br>

            <li >
             <i class="fa fa-area-chart"></i> <span>Inventario</span>
              
            </li>
            <br>
                        <li class="treeview">
              <i class="fa fa-file-text-o"></i> <span>Reportes</span>
              
            </li>
            <br>


            <li class="treeview">
              <i class="fa fa-cog"></i> <span>Administracion</span></a>
              
            </li>
          
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 552px;">
      <div class="content">
          <div class="row">
  <div class="col-md-12">
    <h1>Ver ventas</h1>
   


</div>
</div>

  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
      <!-- /.row -->

<div class="row">
  
  
<div class="clearfix"></div>
<div class="table-responsive">
<br><table class="table table-hover table-bordered">
  <thead>
    <tr><th>Id_venta</th>
    <th>Producto </th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Precio en dolares</th>
    <th>Usuario</th>
    <th>Fecha</th>

  </tr></thead>
  <tbody>
    <?php  $sql="SELECT * FROM ventas INNER JOIN producto ON ventas.Id_producto=producto.Id_producto INNER JOIN usuarios ON ventas.Id_usuario=usuarios.Id_usuario order by Id_venta desc";

      $query=$conexion->query($sql);

      while ($row=$query->fetch_assoc()) {
        
      

        ?>
    <tr><th><?php echo $row['Id_venta']; ?></th>
    <td><?php echo $row['Nombre_producto']; ?> </td>
    <td><?php echo $row['cantidad']; ?></td>
    <td><?php echo $row['Precio']; ?></td>
    <td><?php echo $row['Precio_dolares']; ?></td>
    <td><?php echo $row['Usuario']; ?></td>
    <td><?php echo $row['fecha']; ?></td>
    
    

    <?php } ?>
    

  </tr>


 
  </tbody>

    </table>
  </div>
  

<div class="clearfix"></div>

  <br><br><br><br><br><br><br><br><br><br>
  </div>
</div>        </div>
      </div><!-- /.content-wrapper -->

        <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright © Victor 2022 <a href="" target="_blank">Victor Camacaro</a></strong>
      </footer>
      

    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="plugins/dist/js/app.min.js" type="text/javascript"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    
  


</body></html>