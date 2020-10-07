<?php session_start();

if (isset($_SESSION['usuario'])) {
	session_destroy();
	header('Location: index.php');
}

$errores='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['codigo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=examen','root','ceprevi2020');
	} catch (PDOExeption $e) {
		echo "Error: ". $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT *FROM alumnos WHERE codigo=:codigo AND dni=:dni');
	$statement->execute(array(':codigo'=>$usuario, ':dni'=>$password));
	$resultado = $statement->fetch();

	
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: home.php?curso=rv');
	}else{
		$errores .= '<li>Datos Incorrectos </li>';
	}

}

require 'views/login.view.php'; 
?>