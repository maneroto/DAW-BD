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
        $result = mysqli_query($conn, $sql);
        closeDB($conn);
        return $result;
    }
    
    function getCheapestFruits($cheapPrice)
    {
        $conn = connectDB();
        $sql = "SELECT name, units, quantity, price, country FROM Fruit WHERE price <= '".$cheapPrice."'";
        $result = mysqli_query($conn, $sql);
        closeDB($conn);
        return $result;
    }
    
    function insertFruit($name, $units, $quantity, $price, $country)
    {
        $conn =connectDB();
        $query = "INSERT INTO Fruit(name, units, quantity, price, country) VALUES(?,?,?,?,?);";
        $result = false;
        
        if (!($statement = $conn->prepare($query)))
        {
            echo "<span style = 'color:red;'>";
            die("Preparation failed: ".$conn->errno.") ". $conn->error);
            echo "</span>";
        }
        $name = $conn->real_escape_string($name);
        $units = $conn->real_escape_string($units);
        $quantity = $conn->real_escape_string($quantity);
        $price = $conn->real_escape_string($price);
        $country = $conn->real_escape_string($country);
        if(!($statement->bind_param("sssss", $name, $units, $quantity, $price, $country)))
        {
            echo "<span style = 'color:red;'>";
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error); 
            echo "</span>";
        }
        if(!($statement->execute()))
        {
            echo "<span style = 'color:red;'>";
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            echo "</span>";
        }
        else
        {
            $result = true;
        }
        $statement->close();
        closeDB($conn);
        return $result;
    }
    
    function deleteByName($fruitName)
    {
        $conn = connectDB();
        $query = "DELETE FROM Fruit WHERE name =?;";
        $result = false;
        
        if(!($statement = $conn->prepare($query)))
        {
            echo "<span style = 'color:red;'>";
            die("Preparation failed: ".$conn->errno.") ".$conn->error);
            echo "</span>";
        }
        $fruitName = $conn->real_escape_string($fruitName);
        if(!($statement->bind_param("s", $fruitName)))
        {
            echo "<span style = 'color:red;'>";
            die("Parameter vinculation failed: (".$statement->errno.") ".$statement->error);
            echo "</span>";
        }
        if(!($statement->execute()))
        {
            echo "<span style = 'color:red;'>";
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            echo "</span>";
        }
        if (!($statement->affected_rows))
        {
            echo "<span style = 'color:red;'>";
            die("No rows affected");
            echo "</span>";
        }
        else
        {
            $result = true;
        }
        $statement->close();
        closeDB($conn);
        return $result;
    }

    function updateByName($name, $units, $quantity, $price, $country)
    {
        $conn = connectDB($conn);
        $query = "UPDATE Fruit SET name =?, units =?, quantity=?, price=?, country=? WHERE name = ?";
        $result = false;
        
        if(!($statement = $conn->prepare($query)))
        {
            echo "<span style = 'color:red;'>";
            die("Preparation failed: ".$conn->errno.") ". $conn->error);
            echo "</span>";
        }
        $name = $conn->real_escape_string($name);
        $units = $conn->real_escape_string($units);
        $quantity = $conn->real_escape_string($quantity);
        $price = $conn->real_escape_string($price);
        $country = $conn->real_escape_string($country);
        if(!($statement->bind_param("ssssss", $name, $units, $quantity, $price, $country, $name)))
        {
            echo "<span style = 'color:red;'>";
            die("Parameter vinculation failed: (".$statement->errno.") ".$statement->error);
            echo "</span>";
        }
        if (!($statement->execute()))
        {
            echo "<span style = 'color:red;'>";
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            echo "</span>";
        }
         if (!($statement->affected_rows))
        {
            echo "<span style = 'color:red;'>";
            die("No rows affected");
            echo "</span>";
        }
        else
        {
            $result = true;
        }
        $statement->close();
        closeDB($conn);
        return $result;
    }
?>