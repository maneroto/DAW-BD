<?php
    require_once("util.php");
    $fruitName = htmlspecialchars($_POST['name']);
    if (deleteByName($fruitName))
    {
        echo "<span style = 'color:#42a5f5;'>";
        echo "Se ha eliminado de manera correcta a ".$fruitName;
        echo "<span>";
    }
    else
    {
        echo "<span style = 'color:red;'>";
        echo "No se ha podido eliminar a ".$fruitName;
        echo "</span>";
    }
?>