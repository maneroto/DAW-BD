<?php
    function connectDB()
    {
        $servernaame = "localhost";
        $username = "maneroto";
        $password = "";
        $dbname = "dbname";
        
        $SQLconnection = mysqli_connect($servernaame, $username, $password, $dbname);
        
        if ($SQLconnection == NULL) die ("Connection failed: ". mysqli_connect_error());
        $SQLconnection->set_charset(" ");
        return $SQLconnection;
    }
    
    function closeDB($conn)
    {
        mysqli_close($conn);
    }
    
    function getFruits()
    {
        $conn = connectDB();
        $sql = "SELECT name, units, quantity, price, country FROM Fruit";
        $result = $conn->query($sql);
        closeDB($conn);
        return $result;
    }
    
    function getFruitsByName($fruitName)
    {
        $conn = connectDB();
        $sql = "SELECT name, units, quantity, price, country FROM Fruit WHERE name LIKE '%".$fruitName."%'";
        $result = mysql_query($conn, $sql);
        closeDB($conn);
        return $result;
    }
    
    function getCheapestFruits($cheapPrice)
    {
        $conn = connectDB();
        $sql = "SELECT name, units, quantity, price, country FROM Fruit WHERE price <= '".$cheapPrice."'";
        $result = mysql_query($conn, $sql);
        closeDB($conn);
        return $result;
    }
?>