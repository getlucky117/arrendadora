<?php 
session_start();
if($_SESSION['nombre']){	
	session_destroy();
    header("location:index.php");
    echo '<script>alert("desconectado")</script> ';
}
else{
    header("location:index.php");
    echo '<script>alert("se producjo un error")</script> ';
}
?>