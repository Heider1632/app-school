<?php
	$indicador = ($usuario->getIndicador($grado, $indicador));
  $id_grado = $_GET['id_grado'];

  if (HORA_INICIO < HORA_CIERRE): ?>
  <p class="alert alert-warning">El tiempo estimado para ver los indicador se ha acabado, porfavor pongase en contacto con administracion para cambiar la hora </p>
  <?php else: ?>
  <p class="alert alert-primary" style="height: 70px;">Añadir un indicador<button type="btn" class="btn btn-primary" data-toggle="modal" data-target="#addIndicador" style="float: right;">Añadir</button> </p>
  <?php
  if (!empty($indicador)): ?>
  <table class="resposive table">
	 <thead>
		  <tr>
			 <th>Inidicador</th>
		  </tr>
	 </thead>
	 <?php
	 foreach ($indicador as $ind):
	 ?>
	 <tbody>
		  <tr>
			 <td><?php echo $ind['nombre']; ?></td>
		  </tr>
	 </tbody>
	 <?php endforeach; ?>
  </table>
	<?php else: ?>
  <p class="alert alert-warning" >No hay inidicadores de logros disponibles para este grado!</p>
	<?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="addIndicador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir un Indicador de logro 
        <a tabindex="0" class="btn" role="button" data-toggle="popover" title="¡Atención! Porfavor no enviar caracteres especiales en el Indicador de logro."><i class="material-icons">help_outline</i></a>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo $_GET['view'] = '?view=addIndicador'?>&id_grado=<?php echo $id_grado; ?>" method="POST">
      		<div class="form-group">
    			<label for="Indicador">Nombre de indicador</label>
    			<textarea class="form-control" name="indicador" rows="3" placeholder="Porfavor no usar caracteres especiales, ni acentuaciones" required=""></textarea>
  			</div>
  	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
       	</form>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
		
	