<div class="row">
<?php
	$materia = ($usuario->getMateria());
	$b = [];
		array_walk_recursive($materia, function($materia) use (&$b) {
  	$b[] = $materia;
	});

	$repetidos = array_keys(
               array_filter(
                 array_count_values($b), function($v, $k) {
                   return $v > 1;
               }, ARRAY_FILTER_USE_BOTH)
             ); 
	if (!empty($repetidos)):
		foreach ($repetidos as $m): ?>
		<div class="col-md-6">
			<p class="alert alert-success"><?php echo $m; ?> </h1>
			<?php
			include 'grado.php';
			?>
		</div>
	<?php endforeach; 
	else: ?>
	<p class="alert alert-warning">Aún no se le han asignado materias porfavor hable con administración</p>
	<?php endif; ?>
</div>
