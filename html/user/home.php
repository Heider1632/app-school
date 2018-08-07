<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
	<div class="row">
	<div class="col-md-8">
    	<h1 class="display-4">Bienvenido docente: <?php echo $_SESSION['nombre'] .", ". $_SESSION['apellido']; ?></h1>
    	<p class="lead">En esta seccion podrá ver sus grupos con su respectiva materia asignada.</p>
	</div>
	<div class="col-md-2">
		<div class="fecha">
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>de </p>
				<p id="mes" class="mes"></p>
				<p>del </p>
				<p id="year" class="year"></p>
		</div>
	
		<div class="reloj">
				<p id="horas" class="horas"></p>
				<p>:</p>
				<p id="minutos" class="minutos"></p>
				<p>:</p>
				<div class="caja-segundos">
					<p id="ampm" class="ampm"></p>
					<p id="segundos" class="segundos"></p>
				</div>
		</div>
	</div>
  </div>
</div>
</div>