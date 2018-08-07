<?php
	$grado = ($usuario->getGrado()); ?>
  <div class="row"> 
  <?php  if(!empty($grado)): ?>
  <?php foreach ($grado as $g): ?>
			<div class="col-md-4">
				<div class="card">
  					<div class="card-body">
  						<center>
    					<h5 class="card-title">Grado: <?php echo $g['nombre_grado']; ?></h5>
    					<h6 class="card-subtitle mb-2 text-muted">Grupo: <?php echo $g['grupo']; ?></h6>
    					</center>
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="<?php echo $_GET['view'] = '?view=estudiantes' ?>&id_grado=<?php echo $g['id_grado']; ?>&id_grupo=<?php echo $g['id_grupo']; ?>" class="card-link">Ver estudiantes</a> 
    					<hr>
    					<a href="<?php echo $_GET['view'] = '?view=indicador' ?>&id_grado=<?php echo $g['id_grado']; ?>" class="card-link">Inidicadores de Logros</a>
  					</div>
				</div>
			</div>
		<?php endforeach; ?>
  </div>
  <?php else: ?>
  <p class="alert alert-warning">Aún no se le han asignado grupos porfavor hable con administración</p>
  <?php endif; ?>
