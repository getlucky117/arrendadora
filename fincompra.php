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
$es=$_POST['id']; 
if ($es=='1') {
    $img='imagenes/rio.png';
  }
if ($es=='2') {
    $img='imagenes/ceratopng.png';
  }
if ($es=='3') {
    $img='imagenes/kia.png';
  }
?>
<div class="row">
	<div class="span10">
	<div class="text-align:center">
  <pre>
		<h4 class=""></h4>	
<?php
    echo  " <img src=$img alt="#" style="max-height:150px; min-width:10%" />  "     
?>                               
    </pre>
		<p>
</select>
      <?php
 require("connect_db.php");
      $sql=("SELECT * FROM carro WHERE idcarro='$es'"); //consulta maestra para los tags
 //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
  $query=mysqli_query($mysqli,$sql);
  
  echo "<table border='0'; class='table table-striped';  width: '50%'; height: '300px';  >";
    echo "<tr>";
    echo "</tr>";
  
		  
    while($arreglo=mysqli_fetch_array($query)){

        $longitud = '1';

        for($i=0; $i<$longitud; $i++)
        {

                  echo " <br> <h5 class=''>Vehiculo  a alquilar     $arreglo[1] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


                 
                  echo " <br> <h5 class=''>Numero de placa     $arreglo[2] 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	"; 
                 
              
                  echo " <br> <h5 class=''> Precio por dia         $arreglo[3]	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	";  

                  $_SESSION['tipocarro'] = $arreglo[1];
                  $_SESSION['placa'] = $arreglo[2];
                  $_SESSION['precio'] = $arreglo[3];
                  if (empty($_SESSION['nombre'])) 
                  {
              
                      echo " <br> <h5 class=''> Porfavor   iniciar session  para poder  alquilar un vehiculo  solo usuarios registrados podran alquilar uno      		";  
                  }
                  else{


                    "<td><a>".$_SESSION['nombre']."</a></td>";    
?>
                    <form method="post" action="entercompra.php" >
                    <fieldset>
                    <?php      ;
                    $n=$_SESSION['nombre'];
                    require("connect_db.php");
				$sql=("SELECT *   FROM usuario WHERE nombre='$n'");
        $query=mysqli_query($mysqli,$sql);
        
        while($arreglo=mysqli_fetch_array($query)){
          echo   "<center><div class=tit><h2 style=color: #0000FF; >Datos del Arrendador</h2></center>";
          echo         "<left><div class= tit ><h2 style=color: #0000FF; >".'Nombre de comprador '."".$_SESSION['nombre']."</h2></left> "  ;
          echo  "<left><div class= tit ><h2 style=color: #0000FF; >".'Email  de cliente:'."".$arreglo[3]."</h2></left> "  ;
          echo  "<left><div class= tit ><h2 style=color: #0000FF; >".'Direccion de cliente:'."".$arreglo[4]."</h2></left> "  ;
          echo  "<left><div class= tit ><h2 style=color: #0000FF; >".'Numero de cedula de cliente:'."".$arreglo[6]."</h2></left> "  ;
          $_SESSION['cedula'] = $arreglo[6];  
      }       
                    ?>
                      <center><div class="tit"><h2 style="color: #0000FF; ">Datos de compra</h2></center>
                      <div class="form-group">
                        <label style="font-size: 14pt;"><b>Dias de renta </b></label>
                        <input type="number" name="dia" class="form-control"  required placeholder="Ingresa cuantos dias rentaras el auto"/>
                        <input value="Comprar" type="submit"  href="entercompra.php"         />
                      </div>
                      </div>
                      <center>
                      </center>
                    </fieldset>
                  </form>
                  </div>
<?php
                  }
        }
              }

              echo "</table>";

        ?>

      </div>

    </form>

    <hr/>
    <br>


<p>&copy; 


© 2021 Copyright
     ARRENDADORA LUMO S.A

  <br/><br/></p>
</footer>
  
</style>
</div>

</body>
</html>