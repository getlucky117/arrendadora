<?php
    session_start();
	$tipocarro=$_SESSION['tipocarro'];
	$matricula=$_SESSION['placa'];
    $precioca= $_SESSION['precio'];
    

    $nombrecli=$_SESSION['nombre'];
	$cedula=$_SESSION['cedula'];
	$dia=$_POST['dia'];

   
    $tot=$precioca*$dia;
	require("connect_db.php");

				mysqli_query($mysqli,"INSERT INTO factura VALUES('','$tipocarro','$matricula','$tot','$nombrecli','$cedula','$dia','')");
                //echo 'Se ha registrado con exito';
                
                echo "<script>
                alert('COMPRA REALIZADA  CON EXITO');
                window.location= 'index.php'
    </script>";
	
?>


