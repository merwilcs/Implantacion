<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
     <style type="text/css">
          body{
               padding-top: 20px;
          }
          .ana{
               background-color: red;
               color: white;
               border-radius: 3px;
               padding: 10px;
               width: 60%;
               font-size: 0.9em;
          }
     </style>
</head>
<body>
     

	<form action="../includes/login_privilegiado.php" method="POST">

     <h2>Iniciar Sesion</h2>
     

     <p>Nombre de usuario: <br>

     <input type="text" name="username"></p>

     <pa>Password:<br>
     	<input type="Password" name="password">
          <br>
          <br>
     	<p class="center"><input type="submit" value="Iniciar Sesion" name="login" style="cursor: pointer; "></p>


     </form>
    

</body>
</html>