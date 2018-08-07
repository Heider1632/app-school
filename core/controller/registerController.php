<?php

  # Leemos las variables enviadas mediante Ajax
  $nombre = $_POST['nombre_php'];
  $apellido = $_POST['apellido_php'];
  $titulo = $_POST['titulo_php'];
  $identificacion = $_POST['identificacion_php'];
  $email = $_POST['email_php'];
  $clave = $_POST['clave_php'];

  echo $nombre, $apellido, $titulo, $identificacion, $email, $clave;
  /*

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($email) || empty($clave) || empty($nombre) || empty($apellido) || empty($identificacion)){

    # mostramos la respuesta de php (echo)
    echo 'error_1';

  }else{

    //
       Si tu usuario require de una validacion de email,
       es decir que contenga @ y .com, .es etc.
       habilita las lineas 21, 32, 33 y 34
    //

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    # Incluimos la clase usuario
    require_once('../model/usuario.php');

    # Creamos un objeto de la clase usuario
    $usuario = new Usuario();

    # Llamamos al metodo login para validar los datos en la base de datos
    $usuario -> register($nombre, $apellido, $titulo, $identificacion, $email, $clave);

    }else{
      echo 'error_2';
    }

  }*/


?>