<!DOCTYPE html>
<html lang="en">
  <head>
  
  <style>

       #map {
        height: 400px;
        width: 100%;
       }
      
       .color-i{
            color: #ffcc00;
        }
      .muved{
          float: right;
      }
        /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
                                                                                                                                                                                                                             
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    </style>
    <meta charset="utf-8">
    <title>ARRENDADORA LUMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="RepoUlat">

    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    <link rel="shortcut icon" href="imagenes/logo.ico" />
  </head>
<body data-offset="40" background="" style="background-attachment: fixed">
<!-- CAbesera
    ================================================== -->
<div class=" text-center" style="margin-bottom:0">
<?php
    include("include/cabecera.php");
?>
</div>
<!-- Navbar
    ================================================== -->
<?php
include("include/nav1.php");
?>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
	<center><div class="tit"><h2 style="color: #0000FF; ">Registro</h2></center>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu direccion</b></label>
      <input type="text" name="direc" class="form-control" placeholder="Ingresa tu direccion" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu cedula</b></label>
      <input type="text" name="cedula" class="form-control" placeholder="Ingresa tu cedula" />
    </div>
    
      
    </div>
    <center>
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    <a class="btn btn-primary" href="index.php" style="margin: auto;">Regresar</a>
    </center>
  </fieldset>
</form>
</div>
<?php

		if(isset($_POST['submit'])){

      require("registro.php");
      
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>