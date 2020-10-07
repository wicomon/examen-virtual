<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: home.php?curso=rv');
} else{
	header('Location: login.php');
}

?>