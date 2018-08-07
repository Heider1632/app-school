<?php
	$estudiantes = ($usuario->getEstudiantes($grado, $grupo, $estudiantes));

	$indicador = null;

	if (!empty($usuario->getIndicador($grado, $indicador))) {
		$ind = ($usuario->getIndicador($grado, $indicador));
	}

	if(!empty($estudiantes)):
	?>
	<table class="resposive table">
	<thead>
		<tr>
			<th>Foto</th>
			<th>Primer Nombre</th>
			<th>Segundo Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<?php
			if(!empty($ind)):
				foreach ($ind as $i): ?>
				<th><?php echo $i['nombre'];  ?></th>
			<?php endforeach; endif; ?> 
		</tr>
	</thead>
	<?php
		foreach ($estudiantes as $est):
	?>
	<tbody>
		<tr>
			<?php if(!empty($est['foto'])): ?>
			<td><img src="vistas/media/fotos/<?php echo ['foto']; ?>" width="40" height="40"></td>
			<?php else: ?>
			<td><img src="vistas/media/fotos/user-default.png" width="40" height="40"></td>
			<?php endif; ?>
			<td><?php echo $est['primer_nombre']; ?></td>
			<td><?php echo $est['segundo_nombre']; ?></td>
			<td><?php echo $est['primer_apellido']; ?></td>
			<td><?php echo $est['segundo_apellido']; ?></td>
			<?php
			if(!empty($ind)):
				foreach ($ind as $i): ?>
				<td><input type="num" min="0" max="10" name="nota" placeholder="ejemplo nota 7.4"></td>
			<?php endforeach;
			endif; ?> 
		</tr>
	</tbody>
	<?php endforeach; ?>
	</table>
	<?php else: ?>
	<p class="alert alert-warning">No se ha asignado estudiantes para este grupo.</p> 
	<?php endif;
?>
