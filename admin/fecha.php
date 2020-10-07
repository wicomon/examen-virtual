<?php session_start();

// require 'config.php';
require '../funciones.php';


$conexion = conexion();
$fecha = fecha_fin($conexion);

//print_r($fecha);


if (!isset($_SESSION['user'])) {
	session_destroy();
	header('Location: ../login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$statement1 = $conexion->prepare('UPDATE fecha_fin 
			SET  dia=:dia, mes=:mes, year=:year, hora=:hora, minuto=:minuto 
			WHERE id =:id'
		);
		$statement1->execute(array(
                ':id'=>1,
                ':dia'=>$_POST['dia'],
                ':mes'=>$_POST['mes'],
                ':year'=>$_POST['year'],
                ':hora'=>$_POST['hora'],
				':minuto'=>$_POST['minuto']
		));
	
	header("Location: fecha.php");
}

// $posts = obtener_post($conexion);

//require 'header_admin.php';

require 'header.php';
require 'views/fecha.view.php';
require 'footer.php';

?>