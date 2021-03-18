<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
    
?>
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

<!-- temple xd -->
<!-- ============================================================================================================================= -->


<div class="container text-center">

    <div class="row content">

        <div class="col-sm-12">
        <h3>Autos Con Disponibilidad  inmediata</h3>
            <?php 
              include("include/slider.php");
            ?>
        </div>

        <div class="col-sm-12 text-center">
            <br>
            <h3> selecione el auto de su preferencia  </h3>
            <p>
                <hr>

                <h4 class="text-muted">Autos Disponibles:</h4>
                <p>

               
        </div>
         <div class="col-sm-12 text-center"><br>
       
            <form action=fincompra.php method="post">
            <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <input type=image src="imagenes/rio.png" width="290" height="200"  name="el" value="1" ><br>
                <input type="submit"  type=text name="id" value="1" class="btn btn-danger" >
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <input type=image src="imagenes/ceratopng.png" width="350" height="200"  name="el" value="2"><br>
                <input type="submit"  type=text name="id" value="2" class="btn btn-danger" >
              </div>
            </div>
         
            <div class="col-sm-4">
              <div class="form-group">
                <input type=image src="imagenes/kia.png" width="290" height="200"  name="el" value="3" ><br>
                <input type="submit"  type=text name="id" value="3" class="btn btn-danger" >
              </div>
            </div>
            </div>
            </form>
        </div>

        <div class="col-sm-12 text-center"><br>
        <h3>Gracias por preferirnos </h3>	
          <p>
       
            </p>
              
        </div>
        
<!--======================================== FOOTER ==================================== -->
     <div class="col-sm-12" style=" padding-top:-150px; margin-bottom:0"> 

        <?php include("include/pie.php"); ?>
          
        </div>
    
     
    </div>
</div>


<!-- ========================================          ============================================================================= -->

</body>
</html>
