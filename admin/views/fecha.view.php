
<div class="container">
	<br><h2>EDITAR FECHA DE TERMINO DE EXAMEN</h2>
	<form class="formulario" method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="row">	
            <div class="col">
                <br><label for="dia" class="badge badge-info">Día :     </label>
                <input type="text" name="dia" class="form-control" value="<?php echo $fecha['dia']; ?>" >
            </div>
            <div class="col">
                <br><label for="mes" class="badge badge-info">Mes :     </label>
                <input type="text" name="mes" class="form-control" value="<?php echo $fecha['mes']; ?>" >
            </div>
            <div class="col">
                <br><label for="year" class="badge badge-info">Año :     </label>
                <input type="text" name="year" class="form-control" value="<?php echo $fecha['year']; ?>" >
            </div>
            <div class="col">
                <br><label for="hora" class="badge badge-info">Hora :     </label>
                <input type="text" name="hora" class="form-control" value="<?php echo $fecha['hora']; ?>">
            </div>
            <div class="col">
                <br><label for="minuto" class="badge badge-info">Minuto :     </label>
                <input type="text" name="minuto" class="form-control" value="<?php echo $fecha['minuto']; ?>">
            </div>
        </div>
		<br><input type="submit" class="btn btn-danger" value="Modificar Fecha">
	</form>
</div>