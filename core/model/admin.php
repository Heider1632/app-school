<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

  class Admin extends Conexion
  {

  	public function getGrados(){

  		parent::conectarbachillerato();

  		$consulta = 'SELECT grado.id, grado.nombre, grupo.namescape FROM grado INNER JOIN grado_grupo ON grado_grupo.id_grado = grado.id INNER JOIN grupo ON grado_grupo.id_grupo = grupo.id';

  		$registro = parent::query($consulta);

  		while ($fila = mysqli_fetch_array($registro)) {
  			
  			$grados[] = array(

  				'id_grado' => $fila['id'],
  				'nombre' => $fila['nombre'],
  				'grupo' => $fila['namescape']

  			);
  		}

  		return $grados;

  		parent::cerrar();
  	}

  	 public function getGrupos($estudiantes, $id_grado, $id_grupo){

      parent::conectarbachillerato();

      $consulta = 'SELECT estudiantes.id, estudiantes.foto, estudiantes.primer_nombre, estudiantes.segundo_nombre, estudiantes.primer_apellido, estudiantes.segundo_apellido FROM estudiantes 
                    INNER JOIN grado ON estudiantes.id_grado = grado.id 
                    INNER JOIN grupo ON estudiantes.id_grupo = grupo.id
                    WHERE grado.id = "'.$id_grado.'" AND grupo.id = "'.$id_grupo.'"';


      $results = parent::query($consulta);

      while ($fila = mysqli_fetch_array($results)) {

        $estudiantes[] = array(

          'id' => $fila['id'],
          'foto' => $fila['foto'],
          'primer_nombre' => $fila['primer_nombre'],
          'segundo_nombre' => $fila['segundo_nombre'],
          'primer_apellido' => $fila['primer_apellido'],
          'segundo_apellido' => $fila['segundo_apellido'],

        );

      }

      return $estudiantes;

      parent::cerrar();
    }

  }
?>