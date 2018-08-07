<?php
if (isset($_GET['key'])) {
	
	$key = $_GET['key'];

	# Incluimos la clase usuario
    require_once('../model/usuario.php');

    # Creamos un objeto de la clase usuario
    $usuario = new Usuario();

    # Llamamos al metodo login para validar los datos en la base de datos
    $usuario -> activarUsuario($key);
    
}else{

	header('locacion: ?view=index');
}
?>