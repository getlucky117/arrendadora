
<?php
session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['contra'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

	$sql2=mysqli_query($mysqli,"SELECT * FROM usuario WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['adcontra']){
			$_SESSION['id']=$f2['idusuario'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['1'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuario WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contra']){
			$_SESSION['id']=$f['idusuario'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>