<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
	session_destroy();
	header('Location: index.php');
}

require 'funciones.php';

$id_usuario = $_SESSION['usuario'];

$curso = $_GET['curso']; 

$conexion = conexion();

$sentencia = $conexion->prepare("SELECT * FROM preguntas INNER JOIN respuestas ON preguntas.codigo=respuestas.cod_pregunta WHERE respuestas.id_usuario=:id AND preguntas.curso=:curso ORDER BY respuestas.id");
$sentencia->execute(array(':id'=>$id_usuario,':curso'=>$_GET['curso']));
$posts = $sentencia->fetchAll();

// print_r($posts);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	foreach ($posts as $vuelta) {
		$count = $vuelta['codigo'];
		$statement1 = $conexion->prepare('UPDATE respuestas 
			SET  id_usuario=:id_usuario, cod_pregunta=:cod_pregunta, rpta=:rpta  
			WHERE cod_pregunta =:cod_pregunta AND id_usuario =:id_usuario'
		);
		if (isset($_POST['p_'.$count.''])) {
			$statement1->execute(array(
				':id_usuario'=>$id_usuario,
				':cod_pregunta'=>$vuelta['cod_pregunta'],
				':rpta'=>$_POST['p_'.$count.'']
			));
		}else{
			$statement1->execute(array(
				':id_usuario'=>$id_usuario,
				':cod_pregunta'=>$vuelta['cod_pregunta'],
				':rpta'=>0
			));
		}
		$count++;
	}
	// echo'<script type="text/javascript">
    // alert("Tarea Guardada");
    // </script>';
	header("Location: home.php?curso=".$curso.'');
}

require 'header.php';
require 'views/home.view.php';
require 'footer.php';

?>