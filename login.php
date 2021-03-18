<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    
    <link rel="shortcut icon" href="imagenes/logo.ico" />
	<title>ARRENDADORA LUMO</title>
</head>
<style type="text/css">
    html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    }
  </style>
  <body >
  <br>
  </br>
    <center>
    <img style="width: 15%;" src="imagenes/logo.png" />
  <br>
  <br>
  </br>

  <br>
  </br>




    <div class="tit"><h2 style="  font-size: 20pt;">Inicio de sesión</h2>
    <br>
  </br>



      <center><div class="Ingreso">

    <table border="0" align="center" valign="">
      <tr>
      <td rowspan=2>
      <form action="validar.php" method="post">
      <div class="form-group">
      <table border="0">

  <tr><td></td>
    <td> <input class="form-group has-success" style="border-radius:15px;" type="text" autocomplete="off" name="mail" placeholder="Correo"></td></tr>

  <tr><td></td>
    <td witdh=80><input style="border-radius:15px;" type="password" name="contra" placeholder="Contraseña"></td></tr>

  <tr><td></td>
    <td width=80><input class="btn btn-primary btn-block" style="border-radius:80px;" type="submit" value="Autenticar"></td>
    </tr></tr>
    <tr>    
    </tr>
  </table>
      </div>
      </form>
            <form action="index.php" method="post">
          <div class="form-group">    
          </div>
        </table>
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