<?php
//session_start();

if (isset($_SESSION['user'])) {

	include_once('pagina-principal.php');
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Tienda virtual</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="all.min.css">
</head>
<body>
  <header class="full-width NavBarP" >
    <div class="full-width NavBarP-Logo" style="background-color: #3c8dbc"> Tienda Online</div>
    <nav class="full-width NavBarP-Nav">
      <ul class="full-width list-unstyled" style="background-color: #3c8dbc">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#!">Productos</a></li>
        <li><a href="#!">Busqueda</a></li>
        <li><a href="#!">Acerca de</a></li>
        <li>
          <a href="pagina-principal.php" class="btn-login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>
          <div class="full-width Login">
            <p class="text-center">
              <form action="">
                <div class="form-group">
                  <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</label>
                  <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Contraseña</label>
                  <input type="text" class="form-control" name="password" id="password">
                </div>
                <a href="#!">No recuerdo mi contraseña</a>
                <br>
                <p class="text-center">
                  <a href="#!" class="btn btn-danger btn-login" style="display:inline-block !important;">CANCELAR</a>
                  <button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
                </p>
              </form>
              <hr>
              <p class="text-center">¿Aún no tienes cuenta?</p>
              <a href="#!">CRÉATE UNA GRATIS</a>
            </p>
          </div>
        </li>
      </ul>
    </nav>
    <i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>
  </header>

  <section class="banner" >
    <div class="banner-content" style="background-image: url('vistas/images/WhatsApp Image 2022-12-08 at 10.23.39 AM.jpeg');">
      <h1>Bienvenido a nuestra tienda</h1>
      <a href="#">Ver articulos</a> 
    </div>
  </section>
  
  <section class="full-width formated-section">
    <h2 class="text-center font-oswald">NUESTROS PRODUCTOS</h2><br>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <img src="vistas\images\WhatsApp Image 2022-12-08 at 10.43.58 AM.jpeg" alt="Sucursal" class="img-responsive img-rounded">
          <h3 class="text-center"> Craftwork gold</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint impedit cum.
          </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <img src="vistas\images\WhatsApp Image 2022-12-08 at 10.44.35 AM.jpeg" alt="Sucursal" class="img-responsive img-rounded">
          <h3 class="text-center">Crayola</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint impedit cum.
          </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <img src="vistas\images\WhatsApp Image 2022-12-08 at 10.45.30 AM.jpeg" style="height: 397px;width: 450px;" alt="Sucursal" class="img-responsive img-rounded">
          <h3 class="text-center">Libreta personalizada</h3>
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit possimus tempore sint impedit cum.
          </p>
        </div>
        
      </div>
    </div>
  </section>
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>