<?php

	require('core/model/usuario.php');

	$ins_indicador = strtolower($_POST['indicador']);

	$id_grado = $_GET['id_grado'];

	if (!empty($ins_indicador)) {
		
		$usuario = new Usuario();

		$usuario->addIndicador($ins_indicador, $id_grado);
		
	} else {

		echo 'error_1';
	}
?>