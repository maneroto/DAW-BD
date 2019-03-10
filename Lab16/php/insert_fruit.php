<?php
    require_once("util.php");
    
   if (isset($_POST["name"]) && isset($_POST["name"]) != "" &&
        isset($_POST["units"]) && isset($_POST["units"]) != "" &&
        isset($_POST["quantity"]) && isset($_POST["quantity"]) != "" &&
        isset($_POST["price"]) && isset($_POST["price"]) != "" &&
        isset($_POST["country"]) && isset($_POST["country"]) != "")
    {
        $name = htmlspecialchars($_POST['name']);
        $units = htmlspecialchars($_POST['units']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $price = htmlspecialchars($_POST['price']);
        $country = htmlspecialchars($_POST['country']);
        
        if (strlen($name) > 0 && strlen($units) > 0 && strlen($quantity) > 0 && strlen($price)> 0 && strlen($country) > 0)
        {
            if (is_numeric($units) && is_numeric($price) && is_numeric($quantity))
            {
                if (insertFruit($name, $units, $quantity, $price, $country))
                {
                    echo "<span style = 'color:#42a5f5;'>";
                    echo "Se ha dado de alta a ".$name . " de manera correcta";
                    echo "</span>";
                }
            }
        }
        else
        {
            echo "<span style = 'color:red;'>";
            die("Llena todos los campos");
            echo "</span>";
        }
    }
?>