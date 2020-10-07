<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title> Iniciar Sesion </title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Actualización de Datos 2019-C</h1>
		<hr class="border">
		<h2><center>C E P R E V I</center></h2>
		<hr class="border">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="codigo" class="usuario" placeholder="Código de Alumno">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="D . N . I">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

		<?php if (!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif ?>
				
		</form>
	</div>
</body>
</html>