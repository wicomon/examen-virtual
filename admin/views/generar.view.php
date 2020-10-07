<br><div class="container text-center">
<ul class="list-group">

Lista de usuario Reggistrados
<?php foreach($total_alumnos_preguntas as $alumno): ?>
  <li class="list-group-item"><?php echo $alumno['id_usuario']?></li>
</ul>
<?php endforeach; ?>
</div>