<?php
    require_once("utils.php");
    
    if (isset($_POST["lugar"]) && isset($_POST["lugar"]) != "" &&
    isset($_POST["tipo"]) && isset($_POST["tipo"]) != "")
    {
        $lugar = $_POST['lugar'];
        $tipo = $_POST['tipo'];
        if(strlen($lugar) > 0 and strlen($tipo) > 0)
        {
            $lugar = htmlspecialchars($lugar);
            $tipo = htmlspecialchars($tipo);

            if (insert_incident($lugar, $tipo))
            {
                echo "Registro exitoso";
            }
            else
            {
                echo "Falla al registrar incidente";
            }
        }
        else
        {
            echo "Llena todos los campos";
        }
    }
    else
    {
        echo "Llena todos los campos";
    }
?>