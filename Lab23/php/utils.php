<?php
function connect()
{
    $servername = "localhost";
    $username = "maneroto";
    $password = "";
    $dbname = "Examen2";
    $SQLconnection = mysqli_connect($servername, $username, $password, $dbname);
    if($SQLconnection == null) die("Connection failed: ".mysqli_connect_error());
    $SQLconnection->set_charset = " ";
    return $SQLconnection;
}

function close ($conn)
{
    mysqli_close($conn);
}

function insert_incident($idlugar, $idtipo)
{
    $conn = connect();
    
    $query = "CALL insertIncident(?,?)";
    
    $result = false;
    
    if(!($statement = $conn->prepare($query))){
        die("Preparation failed " .$conn->errno.": ".$conn->error);
    }
    $idlugar = $conn->real_escape_string($idlugar);
    $idtipo = $conn->real_escape_string($idtipo);
    if(!($statement->bind_param("ss",$idlugar,$idtipo))){
        die("Parameter vinculation failed " .$statement->errno.": ".$statement->error);
    }  
    
    if(!($statement->execute())){
        die("Execution failed " .$statement->errno.": ".$statement->error);
    } 
    if(!($statement->affected_rows)){
        die("No rows affected" .$statement->errno.": ".$statement->error);
    } 
    else
    {
        $result=true;
    }
    
    $statement->close();
    close($conn);
    return $result;
}

function select_tipo()
{
    $conn = connect();
    $result = "";
    $query = "CALL selectTipo()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_lugar()
{
    $conn = connect();
    $result = "";
    $query = "CALL selectLugar()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}

function select_incident()
{
    $conn = connect();
    $result = "";
    $query = "CALL selectIncident()";
    $result = $conn->query($query);
    close($conn);
    return $result;
}
    
?>