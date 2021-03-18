
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" style="font-size:22px; font-weight: bold;" href="#">ARRENDADORA<strong Class="color-i">  L</strong>UMO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav">
      <li class="nav-item active">
                 <a class="nav-link" style="font-weight: bold;" href="frregistro.php">Registarse</a>    
             </li>
             <li class="nav-item active">
                 <a class="nav-link" style="font-weight: bold;" href="micuenta.php">Mi cuenta  </a>
             </li>
             <li class="nav-item active">
<?php                          
if (empty($_SESSION['nombre'])) 
{
  $n='INVITADO';

  echo  "     <a class=nav-link style=font-weight: bold; >BIENVENIDO ".$n."</a> "  ;            
}
else {
  echo  "     <a class=nav-link style=font-weight: bold; >BIENVENIDO ". $_SESSION['nombre']."</a> "  ;                               
}
?>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" style="font-weight: bold;" href="login.php">Iniciar sesión</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" style="font-weight: bold;" href="desconectar.php">cerrar sesión  </a>
             </li>
		</ul>
        </ul>
    </form>
  </div>
</nav>
