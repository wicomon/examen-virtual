<?php session_start();

if (!isset($_SESSION['user'])) {
	session_destroy();
	header('Location: index.php');
}
// require 'config.php';
require '../funciones.php';

$conexion = conexion();

// $resultado = traerDatos();

if (!isset($_SESSION['user']) OR $_SESSION['user'] !== 'wcordova') {
	session_destroy();
	header('Location: ../login.php');
}

$sentencias = $conexion->prepare("SELECT DISTINCT codigo FROM alumnos");
$sentencias->execute();
$total_alumnos = $sentencias->fetchAll();


$sentencia = $conexion->prepare("SELECT DISTINCT id_usuario FROM respuestas");
$sentencia->execute();
$total_alumnos_preguntas = $sentencia->fetchAll();


foreach ($total_alumnos as $total) {
    $existencia=0;
    $text = '';
    foreach ($total_alumnos_preguntas as $preguntas) {
        if ($total['codigo']== $preguntas['id_usuario']) {
            $existencia = 1;
        }
    }
    if ($existencia == 0) {
        for ($i=1; $i<= 100 ; $i++) { 
            if ($i==100) {
                $text = $text.'('.$total['codigo'].', '.$i.', 0)';
            }else{
                $text = $text.'('.$total['codigo'].', '.$i.', 0), ';
            }
            
        }
            $statement1 = $conexion->prepare("INSERT INTO respuestas (id_usuario, cod_pregunta, rpta) VALUES ".$text);
            $statement1->execute();
        echo "Se genero la BD para el usuario : ".$total['codigo']."<br>";
    }
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// }


// $posts = obtener_post($conexion);

//require 'header_admin.php';

require 'header.php';
require 'views/generar.view.php';

?>