<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">Principal</a></li>


			
			<li class=""><a href="buscar.php">BUSQUEDA AVANZADA</a></li>
			<li class=""><a href="ayuda.php">Ayuda</a></li>
			<li class=""><a href="sugerencias.php">Sugerencias</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
				
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>