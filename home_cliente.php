<?php if (!isset($_SESSION['user'])) {
  //echo "hay sesion";
  //$user->setuser($user->$usersession->getcurrentuser());
  header("location:../index.php");
}

$conexion=new mysqli('localhost','root','','implantacion');

$sesion=$_SESSION['user'];
?>

<html><head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
   
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/dist/css/skins/skin-blue-light.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  
          <script src="plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="plugins/morris/raphael-min.js"></script>
<script src="plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/morris/example.css">
          <script src="plugins/jspdf/jspdf.min.js"></script>
          <script src="plugins/jspdf/jspdf.plugin.autotable.js"></script>
          
  </head>

  <body class="skin-blue-light sidebar-mini">
    <div class="wrapper">
     
            <header class="main-header">
       
        <div class="logo">
          
          <span class="logo-mini"><b>I</b>L</span>
          
          <span class="logo-lg"><b>Sistema de </b>Ventas</span>
        </div>

        
        <nav class="navbar navbar-static-top" role="navigation" style="height: 8%;">
         
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              
              <li class="dropdown user user-menu">
               
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                  <span class=""><?php $sql="SELECT * FROM usuarios where Usuario='$sesion'";


                  $query=$conexion->query($sql);

                  while ($row=$query->fetch_assoc()) {
                    echo $row['Primer_nombre'];
                  }

                   ?> <b class="caret"></b> </span>

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

          <ul class="sidebar-menu">
            <li class="header"></li>
                                    <li><i class="fa fa-home"></i> <span>Bienvenido <?php $sql="SELECT * FROM usuarios where Usuario='$sesion'";


                  $query=$conexion->query($sql);

                  while ($row=$query->fetch_assoc()) {
                    echo $row['Primer_nombre'];
                  }

                   ?></span></li>
                                    <br>
            <li><i class="fa fa-usd"></i> <span>Comprar</span></li>
            <br>
            
            <li><i class="fa fa-glass"></i> <span>Ver Productos</span></li>
            <br>
            <li class="treeview">
              <i class="fa fa-database"></i><a href="vistas/cambiar_password.php">Mi cuenta</a>
             
            </li>

            <br>

            
            


            <li class="treeview">
              <i class="fa fa-cog"></i><a href="includes/logout1.php">Cerrar Sesion</a> <span>cerrar sesion</span></a>
              
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
		<h1 id="victor">Bienvenido al sistema <?php $sql="SELECT * FROM usuarios where Usuario='$sesion'";


                  $query=$conexion->query($sql);

                  while ($row=$query->fetch_assoc()) {
                    echo $row['Primer_nombre'];
                  }

                   ?></h1>
    <div style="text-align: right;">
    <label for="muestrario">Cambiar Color del titulo:</label>
<input type="color" value="#fff" id="muestrario">
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
<div class="search-area">
    <form name="search" method="post" action="search-result.php">
        <div class="control-group">

            <input class="search-field" placeholder="Buscar aqui..." name="product" required="required" />

            <button class="search-button btn btn-primary" type="submit" name="search">Buscar</button>    

        </div>
    </form>
</div>     
  <div class="row" style="width: 700px;" >
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              

              <h2 style="text-align: center;">DESEA VER NUESTROS PRODUCTOS</h2>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="carrito/ver_productos_cliente.php" class="small-box-footer">Ver Productos <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        

       
</div>
      </div>

     
    
      <table>
        <tr>
      
      <img src="vistas/images/sliders/slider1.png" style="width: 50%;">
      <img src="vistas/images/sliders/slider2.png" style="width: 50%;">
      
      </tr>
       </table>
       <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
      <div class="more-info-tab clearfix">
         <h3 class="new-product-title pull-left">Productos Destacados</h3>
        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
          <li class="active"><a href="#all" data-toggle="tab">Todos</a></li>
          <li><a href="#books" data-toggle="tab">Tecnologia</a></li>
          <li><a href="#furniture" data-toggle="tab">Muebleria</a></li>
        </ul>
        
      </div>

      <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">     
          <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">


    <div class="row">
    <div class="col-4">              
    <div class="item item-carousel">
      <div class="products">
        
  <div class="product">   
    <div class="product-image">
      <div class="image">
        <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
    <img  src="plugins\productimages\1\mi-redmi-note-4-na-original-imaeqdxgtcgbgvfh.jpeg" data-echo=""  width="180" height="300" alt=""></a>
      </div>     

                                     
    </div>
    
    <div class="product-info text-left">
      <h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">REDMI NOTE 4</a></h3>
      <div class="rating rateit-small"></div>
      <div class="description"></div>

      <div class="product-price"> 
        <span class="price">
              </span>
                         <span class="price-before-discount"></span>
                  
      </div>
    </div>
          <div class="action"><a href="" class="lnk btn btn-primary">Agregar a carrito</a></div>
          <div class="item item-carousel">
      <div class="products">
      </div>
    </div>
  </div>
</div>
</div>
</div>

      <div class="col-4">
        
  <div class="product">   
    <div class="product-image">
      <div class="image">
        <a href=""><img  src="plugins\productimages\2\apple-iphone-6-1.jpeg" data-echo=""  width="180" height="300"></a>
      </div><!-- /.image -->                                     
    </div><!-- /.product-image -->
      
    
    <div class="product-info text-left">
      <h3 class="name"><a href="">iphone 6</a></h3>
      <div class="rating rateit-small"></div>
      <div class="description"></div>

      <div class="product-price"> 
        <span class="price">
              </span>
                         <span class="price-before-discount"></span>
                  
      </div>
      
    </div>
          <div class="action"><a href="" class="lnk btn btn-primary">Agregar a carrito</a></div>
      </div>
      
    
</div>



      <!-- /.product -->
      
    
  
        
     <div class="col-4">
          
          <div class="item item-carousel">
      <div class="products">
        
  <div class="product">   
    <div class="product-image">
      <div class="image">
        <a href=""><img  src="plugins\productimages\13\hp-notebook-original-2.jpeg" data-echo=""  width="200" height="300"></a>
      </div><!-- /.image -->                                     
    </div><!-- /.product-image -->
      
    
    <div class="product-info text-left">
      <h3 class="name"><a href="">Hp Notebook</a></h3>
      <div class="rating rateit-small"></div>
      <div class="description"></div>

      <div class="product-price"> 
        <span class="price">
              </span>
                         <span class="price-before-discount"></span>
                  
      </div>
      
    </div>
          <div class="action"><a href="" class="lnk btn btn-primary">Agregar a carrito</a></div>
      </div>
      </div>
    </div>


</div>


     


   
      </div><!-- /.product -->
      
      </div><!-- /.products -->
    </div><!-- /.item -->
    </div>
  </div>
</div>
</div>
      </div><!-- /.home-owl-carousel -->
          </div><!-- /.product-slider -->
        </div>
  </div>
</div>
</div>
</div>
</div>

    
  </div>

     
      <script>
    var muestrario;
var colorPredeterminado = "#fff";

window.addEventListener("load", startup, false);

function startup() {
  muestrario = document.querySelector("#muestrario");
  muestrario.value = colorPredeterminado;
  muestrario.addEventListener("input", actualizarPrimero, false);
  muestrario.addEventListener("change", actualizarTodo, false);
  muestrario.select();
}


function actualizarPrimero(event) {
  var p = document.querySelector("#victor");

  if (p) {
    p.style.color = event.target.value;
  }
}


function actualizarTodo(event) {
  document.querySelectorAll("#victor").forEach(function(p) {
    p.style.color = event.target.value;
  });
}
   </script>

    
  


</body></html>