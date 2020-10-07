<!doctype html>
<html lang="en">
  <head>
  	<title>Ceprevi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="slide/css/style.css">
  <link rel="stylesheet" href="css/estilos_tempo.css">
  <link rel="stylesheet" href="css/estilos2.css">
  </head>
  <body>
  <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-1" style="background-image: url(slide/imagses/bg_1.jpg);">
	  			<div class="user-logo">
	  				<h3>CEPREVI</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-2">
          <li class="<?php if($_GET['curso']=='rv'){ echo 'active';} ?>  mb-0">
            <a href="home.php?curso=rv"><span class="fa fa-pencil-square-o mr-3 mb-1"></span> Raz. Verbal</a>
          </li>
          <li class="<?php if($_GET['curso']=='rm'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=rm"><span class="fa fa-pencil-square-o mr-3"></span> Raz. Matemático</a>
          </li>
          <li class="<?php if($_GET['curso']=='aritmetica'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=aritmetica"><span class="fa fa-pencil-square-o mr-3"></span> Aritmética</a>
          </li>
          <li class="<?php if($_GET['curso']=='algebra'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=algebra"><span class="fa fa-pencil-square-o mr-3"></span> Álgebra</a>
          </li>
          <li class="<?php if($_GET['curso']=='trigonometria'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=trigonometria"><span class="fa fa-pencil-square-o mr-3"></span> Trigonometría</a>
          </li>
          <li class="<?php if($_GET['curso']=='geometria'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=geometria"><span class="fa fa-pencil-square-o mr-3"></span> Geometría</a>
          </li>
          <li class="<?php if($_GET['curso']=='biologia'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=biologia"><span class="fa fa-pencil-square-o mr-3"></span> Biología</a>
          </li>
          <li class="<?php if($_GET['curso']=='fisica'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=fisica"><span class="fa fa-pencil-square-o mr-3"></span> Física</a>
          </li>
          <li class="<?php if($_GET['curso']=='quimica'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=quimica"><span class="fa fa-pencil-square-o mr-3"></span> Química</a>
          </li>
          <li class="<?php if($_GET['curso']=='hu'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=hu"><span class="fa fa-pencil-square-o mr-3"></span> Historia Universal</a>
          </li>
          <li class="<?php if($_GET['curso']=='hp'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=hp"><span class="fa fa-pencil-square-o mr-3"></span> Historia del Perú</a>
          </li>
          <li class="<?php if($_GET['curso']=='psicologia'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=psicologia"><span class="fa fa-pencil-square-o mr-3"></span> Psicología</a>
          </li>
          <li class="<?php if($_GET['curso']=='lenguaje'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=lenguaje"><span class="fa fa-pencil-square-o mr-3"></span> Lenguaje</a>
          </li>
          <li class="<?php if($_GET['curso']=='literatura'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=literatura"><span class="fa fa-pencil-square-o mr-3"></span> Literatura</a>
          </li>
          <li class="<?php if($_GET['curso']=='geografia'){ echo 'active';} ?> mb-0">
            <a href="home.php?curso=geografia"><span class="fa fa-pencil-square-o mr-3"></span> Geografía</a>
          </li>
          
          
          
        </ul>
    	</nav>