<?php
    $host = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Lab 20 DAW-BD
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo 'https://'.$host.'/Lab20/css/style.css'?>" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body>
        <nav>
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="<?php echo 'https://'.$host.'/Lab20/index.php'?>">New form</a></li>
          </ul>
        </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
        <li><a href="<?php echo 'https://'.$host.'/Lab20/index.php'?>">New form</a></li>
        </ul>
        <main>
            