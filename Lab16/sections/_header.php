<!DOCTYPE html>
<?php
    $host  = $_SERVER['HTTP_HOST'];
?>
<html>
    <head>
        <title>
            Frutería DAW-BD
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo 'https://'.$host.'/Lab16/css/style.css'?>" rel = "stylesheet">
    </head>
    <body>
    <?php ?>
    <div class = "navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="<?php echo 'https://'.$host.'/Lab16/index.php'?>" class="right brand-logo"><i class="large material-icons">home</i></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="<?php echo 'https://'.$host.'/Lab16/index.php'?>">Inicio</a></li>
                    <li><a href="<?php echo 'https://'.$host.'/Lab16/views/update.php'?>">Actualizar</a></li>
                    <li><a href="<?php echo 'https://'.$host.'/Lab16/views/check.php'?>">Consultar</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?php echo 'https://'.$host.'/Lab16/index.php'?>">Inicio</a></li>
            <li><a href="<?php echo 'https://'.$host.'/Lab16/views/update.php'?>">Actualizar</a></li>
            <li><a href="<?php echo 'https://'.$host.'/Lab16/views/check.php'?>">Consultar</a></li>
        </ul>
    </div>
    <header>
        <div class = "container">
            <h1>
                Frutería DAW-BD
            </h1>
        </div>
    </header>