<?php
// $conexion=new mysqli('localhost','root','','implantacion');
include("../includes/db.php");

$connect=new db();
$conexion=$connect->conexion();
 session_start();
 $id_usuario=$_GET['id'];
 if (!isset($_SESSION['administrador'])) {
  //echo "hay sesion";
  //$user->setuser($user->$usersession->getcurrentuser());
  header("location:../vistas/login_modo_privilegiado.php");
}
 ?>


<html><head>
    <meta charset="UTF-8">
    <title>Mi cuenta</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="images\WhatsApp Image 2022-12-08 at 10.23.39 AM.jpeg" type="image/x-icon">
    <!-- Bootstrap 3.3.4 -->
    <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="../plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/dist/css/skins/skin-blue-light.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">

    
          <script src="../plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="../plugins/morris/raphael-min.js"></script>
<script src="../plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/morris/example.css">
          <script src="../plugins/jspdf/jspdf.min.js"></script>
          <script src="../plugins/jspdf/jspdf.plugin.autotable.js"></script>
          <script>
  
    $(document).ready(function(){
      $("#cbx_estado").change(function(){
        $('#cbx_ciudad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        $("#cbx_estado option:selected").each(function(){
          id_estado=$(this).val();
          $.post("../includes/getmunicipio.php",{id_estado:id_estado},function(data){
                $("#cbx_municipio").html(data);
          });
        });
      });
    });


    $(document).ready(function(){
      $("#cbx_municipio").change(function(){
        
        $("#cbx_municipio option:selected").each(function(){
            id_municipio=$(this).val();
            $.post("../includes/getlocalidad.php",{id_municipio:id_municipio},function(data){
              $("#cbx_parroquia").html(data);
            });
        });
      });
    });


    $(document).ready(function(){
      $("#cbx_estado").change(function(){
        
        $("#cbx_estado option:selected").each(function(){
            id_municipio=$(this).val();
            $.post("../includes/getciudad.php",{id_estado:id_estado},function(data){
              $("#cbx_ciudad").html(data);
            });
        });
      });
    });


  </script>
          
  </head>

  <body class="  skin-blue-light sidebar-mini ">
    <div class="wrapper">
      <!-- Main Header -->
            <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>I</b>L</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tienda </b>online</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=""><?php $sql="SELECT * FROM usuarios where Usuario='$id_usuario'";


                  $query=$conexion->query($sql);

                  while ($row=$query->fetch_assoc()) {
                    echo $row['Primer_nombre'];
                  }

                   ?> <b class="caret"></b> </span>

                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="">
                      <a href="http://evilnapsis.com/" target="_blank" class="">Ir a Evilnapsis</a>
                      <a href="http://evilnapsis.com/product/inventio-max/" target="_blank" class="">Ver Inventio Max</a>
                  </li>
                  
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
                                    <li><a href="../index.php"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
            <li><a href="./?view=sell"><i class="fa fa-usd"></i> <span>Vender</span></a></li>
            <li><a href="./?view=sells"><i class="fa fa-shopping-cart"></i> <span>Ventas</span></a></li>
            
            <li><a href="./?view=products"><i class="fa fa-glass"></i> <span>Productos</span></a></li>

            <li class="treeview">
              <a href="#"><i class="fa fa-database"></i> <span>Catalogos</span> </a>
              <ul class="treeview-menu">
                <li><a href="./?view=categories">Categorias</a></li>
                <li><a href="./?view=clients">Clientes</a></li>
                <li><a href="./?view=providers">Proveedores</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-area-chart"></i> <span>Inventario</span></a>
              <ul class="treeview-menu">
                <li><a href="./?view=inventary">Inventario</a></li>
                <li><a href="./?view=re">Abastecer</a></li>
                <li><a href="./?view=res">Abastecimientos</a></li>
              </ul>
            </li>
                        <li class="treeview">
              <a href="#"><i class="fa fa-file-text-o"></i> <span>Reportes</span></a>
              <ul class="treeview-menu">
                <li><a href="./?view=reports">Inventario</a></li>
                <li><a href="./?view=sellreports">Ventas</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#"><i class="fa fa-cog"></i> <span>Administracion</span></a>
              <ul class="treeview-menu">
                <li><a href="./?view=users">Usuarios</a></li>
                <li><a href="./?view=settings">Configuracion</a></li>
              </ul>
            </li>
          
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
    
    <div class="content-wrapper" style="min-height: 502px;">
      <div class="content">
            <div class="row">
  <div class="col-lg-12">

    <h1>PERFIL</h1>
   
   <?php 
   //$usuario=$_SESSION['user']; 

    $sql="SELECT * FROM usuarios INNER JOIN estados on usuarios.id_estado=estados.id_estado  INNER JOIN municipios ON usuarios.id_municipio=municipios.id_municipio INNER JOIN parroquias ON usuarios.id_parroquia=parroquias.id_parroquia INNER JOIN ciudades ON usuarios.id_ciudad=ciudades.id_ciudad INNER JOIN status_b ON usuarios.id_status_B=status_b.id_status_B INNER JOIN perfiles_usuario ON usuarios.Id_perfil=perfiles_usuario.Id_perfil where Id_usuario='$id_usuario'";
      $query=$conexion->query($sql);

      while ($row=$query->fetch_assoc()) { ?>
        <form action="../includes/editar_usuario.php?id=<?php echo $row['Id_usuario'] ?>" method="POST">
    <table class="table table-bordered form-group col-md-6 ">
      
      <tr>
        <td><label style="font-size: 2.5rem;">Foto</label><br>
       <img src="images/<?php echo $row['Imagen_usuario']  ?>" style="width: 40%; height: 10%;">
        </td>
      </tr>
      
      <tr>
        <td>
          <label style="font-size: 2.5rem;"> Primer Nombre :</label>
          <h3><input type="text" name="Primer_nombre" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Primer_nombre'];  ?>"class="form-control" ></h3>
          <!--<input type="text" name="" value="<?php echo $row['Primer_nombre'];  ?>" disabled class="form-control">-->
        </td>
      </tr>
      <tr>
        <td>
          <label style="font-size: 2.5rem;">Segundo Nombre:</label>
          <h3><input type="text" name="Segundo_Nombre" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Segundo_Nombre'];  ?>"class="form-control" ></h3>
        </td>
      </tr>

      <tr>
        <td>
           <label style="font-size: 2.5rem;"> Primer Apellido:</label>
         <h3> <input type="text" name="Primer_apellido" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Primer_apellido'];  ?>"class="form-control" ></h3>
        </td>
      </tr>
      <tr>
        <td>
           <label style="font-size: 2.5rem;">Segundo Apellido:</label>
         <h3><input type="text" name="Segundo_Apellido" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Segundo_Apellido'];  ?>"class="form-control" ></h3>
        </td>
      </tr>
      <tr>
        <td>
           <label style="font-size: 2.5rem;">Usuario:</label>
         <h3> <input type="text" name="Usuario" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Usuario'];  ?>"class="form-control" ></h3>
        </td>
      </tr>
      <tr>
        <td>
           <label style="font-size: 2.5rem;">Tipo de cedula:</label>
         <h3><input type="text" name="Tipo_C" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Tipo_C'];  ?>"class="form-control" ></h3>
        </td>
      </tr>
      <tr>
        <td>
           <label style="font-size: 2.5rem;">Cedula:</label>
          <h3><input type="text" name="Cedula" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Cedula'];  ?>"class="form-control" ></h3>
        </td>
      </tr>
      <tr>
        <td>
           <label style="font-size: 2.5rem;">Correo electronico:</label>
        <h3><input type="text" name="email" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['email'];  ?>"class="form-control" ></h3>
        </td>
      </tr>

      <tr>
        <td>
           <label style="font-size: 2.5rem;">Telefono:</label>
        <h3><input type="text" name="telefono" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['telefono'];  ?>"class="form-control" ></h3>
        </td>
      </tr>


      <tr>
        <td>
           <label style="font-size: 2.5rem;">Estatus:</label>
           <p>1-Activo</p>
           <p>2-Inactivo</p>
         <h3> <input type="text" name="id_status_B" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Id_status_B'] ?>"class="form-control"></h3>
        </td>
      </tr>


      <tr>
        <td>
           <label style="font-size: 2.5rem;">Perfil</label>
           <p>1-Administrador,  2-Cliente,  3-Vendedor</p>

           <p> 4-Inventario,5-Contador,6-Almacenista</p>
         <h3> <input type="text" name="perfil" style="height: 50px;border-radius: 5px;font-size: 30px; " value="<?php echo $row['Id_perfil'];  ?>"class="form-control" ></h3>
        </td>
      </tr>

      <?php } ?>
       <tr>
          
          <td><div style="font-size: 2.5rem;">Selecciona estado: <select style="height: 50px;border-radius: 5px;font-size: 30px; " name="cbx_estado" id="cbx_estado" class="form-control">
      <option value="0">Seleccionar estado</option>
      <?php
      $query="SELECT * FROM estados";
            $resultado=$conexion->query($query);

            while($row=$resultado->fetch_assoc()){?>
              <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
            <?php }?>
      

    </select>
      
    </div>
          </td>
          

          </tr>

       <tr>
          
          <td><div style="font-size: 2.5rem;">Selecciona municipio<select style="height: 50px;border-radius: 5px;font-size: 30px;" name="cbx_municipio" id="cbx_municipio" class="form-control"></select></div>
          </td>
          

          </tr>

       <tr>
          
          <td><div>Selecciona parroquia <select name="cbx_parroquia" id="cbx_parroquia" class="form-control" style="height: 50px;border-radius: 5px;font-size: 30px;"></select></div>
          </td>
          

          </tr>

       <tr>
          
          <td><div>Selecciona ciudad <select name="cbx_ciudad" id="cbx_ciudad" class="form-control" style="height: 50px;border-radius: 5px;font-size: 30px;"></select></div>
          </td>
          

          </tr>

          
    

    </table>
     <input type="submit" name="" class="btn btn-info" value="Actualizar" style="height: 40px;width: 100px;font-size: 18px;">
  </form>
  
  </div>
</div>
</div>
</div>

</body>
</html>