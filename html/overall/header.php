<!DOCTYPE html>
<html lang="es">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sistema de notas academicas</title>
    <meta name="description" content="">
    <meta name="author" content="Heider Zapa">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Es-es -->
    <script type="text/javascript" src="vistas/js/es-ES.js"></script>
    <!-- jquery required -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- moment.js -->
    <script src="vistas/js/moment.js"></script>
    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- calendario -->
    <script src="vistas/js/bootstrap-datetimepicker.js"></script>     
    <script src="vistas/js/bootstrap-datetimepicker.es.js"></script>

    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/css/estilos.css">
    <link rel="stylesheet" href="vistas/css/estilos-nav.css">
    <!-- estilos footer -->
    <link rel="stylesheet" href="vistas/css/footer.css">
    <!-- estilos fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- estilos calendario -->
    <link rel="stylesheet" href="vistas/css/calendar.css">
    <link rel="stylesheet" href="vistas/css/bootstrap-datetimepicker.min.css" />
    <!-- estilos adicionales -->
    <?php if($_GET['view'] = '?view=home'): ?> 
        <link rel="stylesheet" type="text/css" href="vistas/css/reloj.css">
    <?php endif; ?>

    <?php if($_GET['view'] = '?view=perfil'): ?> 
    <link rel="stylesheet" type="text/css" href="vistas/css/perfil.css">
    <?php endif; ?>

    <?php if($_GET['view'] = '?view=admin'): ?> 
    <link rel="stylesheet" type="text/css" href="vistas/css/admin.css">
    <?php endif; ?>

    <!-- SWEETALERT
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="vistas/css/sweetalert.css">

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="vistas/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="vistas/iconfavicon.ico" type="image/x-icon">

</head>