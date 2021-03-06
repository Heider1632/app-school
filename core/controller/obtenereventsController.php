<?php

// Incluimos nuestro archivo config
include 'core/model/conexion.php';

$db = new Conexion(); 

// Sentencia sql para traer los eventos desde la base de datos
$sql="SELECT * FROM eventos"; 

// Verificamos si existe un dato
if ($db->query($sql)->num_rows)
{ 

    // creamos un array
    $datos = array(); 

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0; 

    // Ejecutamos nuestra sentencia sql
    $e = $db->query($sql); 

    while($row=$db->fetch_array($e)) // realizamos un ciclo while para traer los eventos encontrados en la base de dato
    {
        // Alimentamos el array con los datos de los eventos
        $datos[$i] = $row; 
        $i++;
    }

    // Transformamos los datos encontrado en la BD al formato JSON
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        // Si no existen eventos mostramos este mensaje.
        echo "No hay datos"; 
    }


?>
