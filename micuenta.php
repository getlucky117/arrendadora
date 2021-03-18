<!DOCTYPE html>
<?php
    session_start();
	?>
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
    </style>
    <meta charset="utf-8">
    <title>ARRENDADORA LUMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="RepoUlat">
   <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> -->
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
<body data-offset="40" background="images/fondo.png" style="background-attachment: fixed">
  <!-- cabeza
    ================================================== -->
<?php
	include("include/cabecera.php");
	?>
    <!-- Navbar
    ================================================== -->
  <?php
include("include/nav2.php");
?>
<div class="container">
<div class="row">
</div>
<!-- ======================================================================================================================== -->
<?php
if (empty($_SESSION['nombre'])) 
                  {
                      echo " <br> <h5 class=''> Porfavor   iniciar session  para poder  alquilar un vehiculo //  o acceder a la  mi cuenta  solo usuarios registrados podran alquilar uno      		";  
                  }  
                  else{
                    $n=$_SESSION['nombre'];
                    require("connect_db.php");
				$sql=("SELECT *   FROM usuario WHERE nombre='$n'");
        $query=mysqli_query($mysqli,$sql);
        
        while($arreglo=mysqli_fetch_array($query)){
          $_SESSION['cedula'] = $arreglo[6];
        }
                    $na=$_SESSION['cedula'];
                    $sql=("SELECT * FROM factura WHERE cedulaf=$na");
            //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                    $query=mysqli_query($mysqli,$sql);
                    echo "<td> HISTORIAL DE COMPRA </td>";
                    echo "<table border='1'; class='table table-hover';>";
                        echo "<tr class='warning'>";
                            echo "<td>Numero de pedido</td>";
                            echo "<td>Marca de auto</td>";
                            echo "<td>Matricula de automovil</td>";
                            echo "<td>Precio total</td>";
                            echo "<td>Nombre de comprador</td>";
                            echo "<td>Cedula</td>";
                            echo "<td>Dias  arrendado</td>";
                            echo "</tr>";
                        while($arreglo=mysqli_fetch_array($query)){
                             echo "<tr class='success'>";
                               echo "<td>$arreglo[0]</td>";
                               echo "<td>$arreglo[1]</td>";
                               echo "<td>$arreglo[2]</td>";
                               echo "<td>$arreglo[3]</td>";
                               echo "<td>$arreglo[4]</td>";
                               echo "<td>$arreglo[5]</td>";
                               echo "<td>$arreglo[6]</td>";       
                               echo "</tr>";
                       }        
                }
?>
</body>
</html>