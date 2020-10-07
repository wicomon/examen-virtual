<?php session_start();

if (isset($_SESSION['user'])) {
	header('Location: menu_admin.php');
} else{
	header('Location: login.php');
}

?>