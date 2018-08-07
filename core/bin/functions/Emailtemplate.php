<?php

	function Emailtemplate($nombre, $apellido, $link){
		$HTML = '
		<html lang="es">
		<body>
			<div style="">
				<h2>Hola Docente'. $nombre.', '.$apellido.'</h2>
				<p style="">Gracias por entrar al sistema de notas académicas</p>
				<p>Solo resta un paso más para disfrutar de todos los servicios </p>
				<p>Para activar tu cuenta solo haz <a href='.$link.' targer="_blank">Click aquí &raquo; </a></p>
				<p>$copy; '.date('Y', time()) .' '.APP_TITLE.' Todos los derechos reservados</p>
			</div>
		</body>
		<html>';

		return $HTML;
	}
?>