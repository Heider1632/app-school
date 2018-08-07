<?php
	require 'core/model/usuario.php';

	if($_GET){

	$grado = $_GET['id_grado'];
	$grupo = $_GET['id_grupo'];
	$estudiantes = null;

	$usuario = new Usuario();

	$usuario->getEstudiantes($grado, $grupo, $estudiantes);

	}else{

		$_GET['view'] = '?view=error';
	}

	include 'html/overall/header.php';
?>
<body>
	<?php
	include'html/overall/nav-user.php';
	
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php
				include 'html/user/estudiantes.php'; 
				?>
			</div>
		</div>
	</div>
</body>
	<?php
	include'html/overall/footer.html';
	include'html/overall/scripts.php';
	?>
</html>
