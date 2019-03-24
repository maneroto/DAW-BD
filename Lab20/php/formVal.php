<?php
    $name = $color = $animal = $hobby = "";
    
    $name = test_input($_POST["name"]);
    $color = test_input($_POST["color"]);
    $animal = test_input($_POST["animal"]);
    $hobby = test_input($_POST["hobby"]);
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
