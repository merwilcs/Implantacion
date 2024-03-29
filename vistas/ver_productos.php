<?php
//$conexion=new mysqli('localhost','root','','implantacion');
include("../includes/db.php");

$connect=new db();
$conexion=$connect->conexion();
session_start();
if (!isset($_SESSION['administrador'])) {
  header('location:login_modo_privilegiado.php');
}



?>



<html><head>
    <meta charset="UTF-8">
    <title>Ver productos</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link href="../bootstrap.min.css" rel="stylesheet" type="text/css">
   
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="../plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/dist/css/skins/skin-blue-light.min.css" rel="stylesheet" type="text/css">
   
     <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
   
      

  
          <script src="../plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="../plugins/morris/raphael-min.js"></script>
<script src="../plugins/morris/morris.js"></script>
  <link rel="../stylesheet" href="plugins/morris/morris.css">
  <link rel="../stylesheet" href="plugins/morris/example.css">
          <script src="../plugins/jspdf/jspdf.min.js"></script>
          <script src="../plugins/jspdf/jspdf.plugin.autotable.js"></script>
          
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
          <ul class="sidebar-menu">
            <li class="header">ADMINISTRACION</li>
                                    <li><i class="fa fa-home"></i> <span><a href="home_admin.php" style="text-decoration: none;">Inicio</a></span></li>
                                    <br>
            <li><i class="fa fa-shopping-cart"></i>  <span>Ventas</span></li>
            <br>
            
            <li><i class="fa fa-glass"></i> <span>Productos</span></li>
            <br>
            <li class="treeview">
              <i class="fa fa-database"></i> <span>Catalogos</span> 
             
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
    
     <div class="content-wrapper" style="min-height: 552px;">
      <div class="content">
     <div class="row">
  <div class="col-md-12">
  
<div class="btn-group  pull-right">
  
  <a href="agregar_producto.php" class="btn btn-default">Agregar Producto</a>
</div>

    <h1>Lista de Productos</h1>
    <div class="clearfix"></div>

  
<div class="btn-group pull-right">

<a class="btn btn-default" href=""><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>

<a class="btn btn-default" href="">Adelante <i class="glyphicon glyphicon-chevron-right"></i></a>

</div>
<div class="clearfix"></div>
<div class="table-responsive">
<br><table class="table  table-hover table-bordered">
  <thead>
<tr><th>ID Producto</th>
    <th>Codigo</th>
    <th>Imagen</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Precio en dolares</th>
    <th>Cantidad total</th>
    <th>Cantidad inicial</th>
    
    <th></th>
  </tr>
  </thead>
  
  
    <?php $sql="SELECT * FROM producto";
      
      $query=$conexion->query($sql);
      while ($row=$query->fetch_assoc()) {
      
      
           ?>
           <tr>
    <td><?php echo $row['Id_producto']; ?></td>
  
  
    <td>
      
     <?php echo $row['codigo_producto']; ?>
    </td>
  
  
    <td><?php echo "<img style='width:50px;' src='images/".$row['imagen_producto']."''>"; ?>
        </td>
    <td><?php echo $row['Nombre_producto']; ?></td>
    <td><?php echo $row['Descripcion_producto']; ?></td>
    <td><?php echo $row['Precio']; ?></td>
    <td><?php echo $row['Precio_dolares']; ?></td>
    <td><?php echo $row['cantidad_total']; ?></td>
    <td><?php echo $row['cantidad_inicial']; ?></td>



    

    <td style="width:70px;">
    <a href="index.php?view=editproduct&id=<?php echo $product->id; ?>" class="btn btn-warning">Actualizar</a></td>
    
    <td>
    <a href="index.php?view=delproduct&id=<?php echo $product->id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
    </td>
  <?php } ?>
  </tr>
  
</table>
</div>
<div class="btn-group pull-right">

</div>
<form class="form-inline">
  <label for="limit">Limite</label>
  <input type="hidden" name="view" value="products">
  <input type="number" value="" name="limit" style="width:60px;" class="form-control">
</form>

<div class="clearfix"></div>

  
  
  
<br><br><br><br><br><br><br><br><br><br>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>