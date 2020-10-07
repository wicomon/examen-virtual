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

// $posts = obtener_post($conexion);

//require 'header_admin.php';

require 'header.php';
require 'views/menu_admin.view.php';


?>