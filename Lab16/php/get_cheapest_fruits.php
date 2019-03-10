<?php
    require_once("util.php");
    $price = htmlspecialchars($_POST['price']);
    $result = getCheapestFruits($price);
    
    if (mysqli_num_rows($result) > 0)
    {
        echo "<table style = 'text-align: center; width: 100%; height: 100%; background: #eee;'>";
        echo "<tr style = 'font-size: 130%; background: #e57373'>".
                "<td>Nombre</td>".
                "<td>Unidades</td>".
                "<td>Cantidad</td>".
                "<td>Precio</td>".
                "<td>País</td>".
              "</tr>";
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr style = 'background: #ffcdd2'>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["units"]."</td>";
            echo "<td>".$row["quantity"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo "<td>".$row["country"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<p style = 'width: 100%; height; 100%; text-align: center; color: #ef5350;'>No hay frutas menores o iguales a $".$price."</p>";
    }
?>