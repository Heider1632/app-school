  <header>
    <div class="wrapper">
      <div class="logo">Sistema Académico</div>
      <nav>
        <a href="<?php echo $_GET['view'] = '?view=home'; ?>">Inicio</a>
        <a href="<?php echo $_GET['view'] = '?view=perfil'; ?>">Perfil</a>
        <?php
          if($_SESSION['director_grupo'] == '1'){
            ?>
            <a href="<?php echo $_GET['view'] = '?view=director_grupo'; ?>">Director Grupo</a>
            <?php
          }
        ?>
        <a href="<?php echo $_GET['view'] = '?view=cerrarSesion'; ?>">Cerrar sesion</a>
      </nav>
    </div>
  </header>