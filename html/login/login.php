<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="vistas/css/sweetalert.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vistas/css/util.css">
		<link rel="stylesheet" type="text/css" href="vistas/css/main-login.css">
	<!--===============================================================================================-->
  <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="vistas/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="vistas/icon/favicon.ico" type="image/x-icon">
  </head>

  <body>
<!-- Formulario Login -->
    <body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('vistas/images/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Iniciar Sesion
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5">

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" id="user" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" id="clave" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="vistas/images/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <!-- Fin load -->

          <div class="container-login100-form-btn m-t-32">
            <button type="button" class="login100-form-btn" name="button" id="login">
              Login
            </button>

            <a href="<?php echo $_GET['view'] = '?view=view-register'; ?>">Aún no estas en el sistema? Registrate!</a>
          </div>

        </form>
      </div>
    </div>
  </div>
    <!-- Final del formulario login -->

	<!--jquery -->
	<script type="text/javascript" src="vistas/js/jquery.js"></script>
	<!-- popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- bootstrap js-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	<!-- Js personalizado -->
  <script src="core/bin/ajax/login.js"></script>
  <!-- SweetAlert js -->
  <script src="vistas/js/sweetalert.min.js"></script>  
  </body>

</html>