<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

  class Usuario extends Conexion
  {

    private $indicador;

    public function login($user, $clave)
    {

      # Nos conectamos a la base de datos
      parent::conectarbachillerato();

      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $consulta = 'select id, cargo from usuario where email="'.$user.'" and clave= "'.$clave.'"';


      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = parent::consultaArreglo($consulta);

        $inf = 'select nombre, apellido from docentes where id = "'.$user['id'].'"';

        $datos = parent::consultaArreglo($inf);

        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['cargo']  = $user['cargo'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['apellido'] = $datos['apellido'];

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){
          echo $_GET['view'] = '?view=admin';

        }else if($_SESSION['cargo'] == 2){

          echo $_GET['view'] = '?view=home';

          $consulta = 'SELECT director_grupo FROM docentes WHERE id = "'.$_SESSION['id'].'"';

          $results = parent::query($consulta);

          while ($fila = mysqli_fetch_array($results)) {
        
            $_SESSION['director_grupo'] = $fila['director_grupo'];

            }

          }

        // u.u finalizamos aqui :v

      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar(); 
    }

    public function register($nombre, $apellido, $titulo, $identificacion, $email, $clave)
    {
      parent::conectarbachillerato();

      $nombre  = parent::filtrar($nombre);
      $apellido = parent::filtrar($apellido);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      // validar que el correo no exito
      $verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" LIMIT 1');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        $keyreg = md5(time());

        $link  = APP_URL . '?view=activar&key=' . $keyreg;

        require 'html/overall/mail-register.php';

        parent::query('insert into docentes(nombre, apellido, titulo, identificacion) value("'.$nombre.'", "'.$apellido.'", "'.$titulo.'", "'.$identificacion.'")');
        parent::query('insert into usuarios(email, clave, keyregister) values("'.$email.'", MD5("'.$clave.'"), "'.$keyreg.'")');

        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;

        $sql_cargo = parent::query('select cargo from usuario where nombre = "'.$nombre.'" and apellido = "'.$apellido.'" LIMIT 1');

        $cargo = parent::consultaArreglo($sql_cargo);

        $_SESSION['cargo']  = $cargo[0];

      }

      parent::cerrar();
    }

    public function activarUsuario($key){

      parent::conectarbachillerato();

      $id = $_SESSION['id'];

      $consulta = 'SELECT id FROM usuario WHERE id = "'.$id.'" ADN keygeister = "'.$key.'" LIMIT 1';

      $usuario = parent::query($consulta); 

      if (parent::verificarRegistros($usuario) > 0) {
              
              parent::query('UPDATE usuario SET activo = "1", keyregister="" WHERE id = "'.$id.'"');

      }else {

        echo 'error';

      }

      parent::cerrar();
    }

    public function getGrado(){

      parent::conectarbachillerato();

      $consulta = 'SELECT docentes.nombre, grado.id, grado.nombre, grupo.id, grupo.namescape
                    FROM docentes 
                    INNER JOIN docente_grado ON docentes.id = docente_grado.id_docente
                    INNER JOIN grado ON docente_grado.id_grado = grado.id
                    INNER JOIN grupo ON docente_grado.id_grupo = grupo.id
                    WHERE docentes.id = "'.$_SESSION['id'].'"';

      $results = parent::query($consulta);
          
      while ($fila = mysqli_fetch_array($results)) {
            
            $array[] = array(

              'nombre_docente' => $fila['nombre'],
              'id_grado' => $fila['1'],
              'nombre_grado' => $fila['2'],
              'id_grupo' => $fila['3'],
              'grupo' => $fila['namescape']

            );

            $_SESSION['grado'] = $fila['2'];
      }

      return $array;

      parent::cerrar();
    }

    public function getEstudiantes($grado, $grupo, $estudiantes){

      parent::conectarbachillerato();

      $consulta = 'SELECT estudiantes.foto, estudiantes.primer_nombre, estudiantes.segundo_nombre, estudiantes.primer_apellido, estudiantes.segundo_apellido, grado.nombre, grupo.namescape FROM estudiantes 
                    INNER JOIN grado ON estudiantes.id_grado = grado.id 
                    INNER JOIN grupo ON estudiantes.id_grupo = grupo.id
                    WHERE grado.id = "'.$grado.'"';


      $results = parent::query($consulta);

      while ($fila = mysqli_fetch_array($results)) {

        $estudiantes[] = array(

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

    public function getIndicador($grado, $indicador){

      parent::conectarbachillerato();

      $consulta = 'SELECT indicadores.nombre FROM indicadores INNER JOIN grado_indicador ON grado_indicador.id_indicador = indicadores.id INNER JOIN grado ON grado_indicador.id_grado = grado.id WHERE grado.id = "'.$grado.'"';

      $results = parent::query($consulta);

      while ($fila = mysqli_fetch_array($results)) {
        
        $indicador[] = array(

          'nombre' => $fila[0],

        );

      }

      return $indicador;

      parent::cerrar();
    }

    public function getMateria(){

      parent::conectarbachillerato();

      $consulta = 'SELECT materias.nombre FROM materias INNER JOIN docente_grado ON docente_grado.id_materia = materias.id WHERE docente_grado.id_docente = "'.$_SESSION['id'].'"';

      $results = parent::query($consulta);
          
      while ($fila = mysqli_fetch_array($results)) {
            
            $array[] = array(

              'nombre' => $fila['nombre'],

            );
      }

      return $array;

      parent::cerrar();

    }

    public function addIndicador($ins_indicador, $id_grado){

      parent::conectarbachillerato();

      $consulta = parent::query('SELECT id FROM indicadores WHERE nombre = "'.$ins_indicador.'"');

      $verificar = parent::verificarRegistros($consulta);

      if($verificar > 0){

        echo 'error_2';

      }else {

        $insertar = parent::query('INSERT INTO indicadores (nombre) VALUE ("'.$ins_indicador.'")');

        $SQL = parent::query('SELECT id FROM indicadores WHERE nombre = "'.$ins_indicador.'"');

        $verificar_indicador = mysqli_num_rows($SQL);

        if ($verificar_indicador > 0) {

          while($fila = mysqli_fetch_array($SQL)){

            $id[] = array(

              'id' => $fila['id']

            ); 
          }

          parent::query('INSERT INTO grado_indicador (id_grado, id_indicador) VALUES ("'.$id_grado.'", "'.$id['id'].'")');

          echo $_GET['view'] = '?view=indicador';

        }else{

          echo 'error_3';

        }

      }

      parent::cerrar();
    }

  }
?>
