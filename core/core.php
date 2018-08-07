<?php

// NUCLEO DE LA APLICACION //

//zona horaria //
date_default_timezone_set('America/Bogota');

//CONSTANTES DE LA APP
define('HTML_DIR', 'html/');
define('APP_TITLE', 'Sistema de notas académicas');
define('APP_URL', 'http://localhost/app-colegio/');

//constantes de PHPMAILER
define('PHPMAILER_HOTS', '');
define('PHPMAILER_USER', '');
define('PHPMAILER_PASS', '');
define('PHPMAILER_PORT', '');


//ESTRUCTURA//
//Load Composer's autoloader
/*require ('vendor/autoload.php');*/
require('core/bin/functions/eliminarCaracteres.php');
require('core/bin/functions/horario.php');
require('core/bin/functions/funciones.php');
require('core/bin/functions/Emailtemplate.php');

//CICLO//
define('HORA_INICIO', $_SESSION['hora_inicio']);
define('HORA_CIERRE', $_SESSION['hora_cierre']);


?>