<?php session_start();

if (isset($_SESSION['user'])) {
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

	$statement = $conexion->prepare('SELECT *FROM user WHERE codigo=:codigo AND dni=:dni');
	$statement->execute(array(':codigo'=>$usuario, ':dni'=>$password));
	$resultado = $statement->fetch();

	
	if ($resultado !== false) {
		$_SESSION['user'] = $usuario;
		header('Location: index.php');
	}else{
		$errores .= '<li>Datos Incorrectos </li>';
	}

}

require 'views/login.view.php'; 
?>