<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="style/main.css" type="text/css" />
        <title>Lab9 DAW-BD</title>
    </head>
    <body>
        <h1>Lab 9 A01703442</h1>
        <div id = "content">
        <?php
            require_once("Utils/utils.php");
            echo "<div class = 'section'>";
            echo "<h2>Problema 1:</h2>";
            problem1(array(3,4,2,2,5,6,7,2,3,3,2,8,9,6,9));
            echo "</div><div class = 'section'>";
            echo "<h2>Problema 2:</h2>";
            problem2(array(2,4,6,3,8,3,7,2,8,4,6,5,7,3,8));
            echo "</div><div class = 'section'>";
            echo "<h2>Problema 3:</h2>";
            problem3(array(2,4,2,5,6,2,3,5,7,4,5,3,5,7,8,9));
            echo "</div><div class = 'section'>";
            echo "<h2>Problema 4:</h2>";
            problem4(10);
            echo "</div><div class = 'section'>";
            echo "<h2>Problema 5:</h2>";
            problem5(200);
            echo "</div>";
        ?>
        </div>
    </body>
</html>