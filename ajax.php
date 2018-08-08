<?php

if ($_POST) {

	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		case 'login':
			# code...
			break;
		
		
		default:
		header('location: ../index.php');
		break;
	}
 	
 }else{

 	header('location: ../index.php');
 }

?>