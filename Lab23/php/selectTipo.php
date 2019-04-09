<?php

require_once("utils.php");
header("Content-Type: text/plain; charset=iso-8859-1");
$result = select_tipo();

if(mysqli_num_rows($result) > 0)
{
    $response = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $response .= '<option value="'.$row['idtipo'].'">'.$row['descripcion'].'</option>';
    }
    echo $response;
}

?>