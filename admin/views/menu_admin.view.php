<!DOCTYPE html>
<html>
<head>
	
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/estilos1.css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!--  <header>
    <div class="contenedor">
      <h1 class="titulo"> Panel de Control</h1>
    </div>
  </header>-->

  <section class="fotos">
    <h1 class="text-center"> Bienvenido : <?php echo $_SESSION['user']; ?></h1><br>
    <div class="contenedor">
      <?php 
          echo '<div class="thumb"><a href="subir-alumnos.php">IMPORTAR A L U M N O S<img src="../images/1.jpg"  height="220px"></a></div>';    
          echo '<div class="thumb"><a href="fecha.php">ESTABLECER FECHA Y HORA<img src="../images/2.jpg" alt="" height="220px"></a></div>';
          echo '<div class="thumb"><a href="leer-excel-preguntas.php">SUBIR PREGUNTAS<img src="../images/4.jpg" alt="" height="220px"></a></div>';
          echo '<div class="thumb"><a href="generar.php"> Generar BD de maticulados<img src="../images/3.jpg" alt="" height="220px"></a></div>';
          //echo '<div class="thumb"><a href="docentes.php">D O C E N T E S<img src="../images/5.jpg" alt="" height="220px"></a></div>';
       ?>
    </div>
  </section>

  <footer>
    <br><br>
    <p  class="copyright">Web Creada por Williams Cordova Villalva - 2K20</p>
  </footer>
