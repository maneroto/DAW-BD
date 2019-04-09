  <!DOCTYPE html>
  <?php
  $httpProtocol = "https://";
  $host = $_SERVER['SERVER_NAME'];
  $url= "/Examen/";
  $js = '<script type="text/javascript" src="'.$httpProtocol.$host.$url.'js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>';
  ?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf8"/>
      <meta charset="utf-8">
    </head>

    <body>
      <div class="container">
        <h1>Welcome to Jurassic Park &reg</h1>
