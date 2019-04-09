<?php
require_once("utils.php");
header("Content-Type: text/plain; charset=iso-8859-1");
if($_GET['byDate'] == 'true' && $_GET['byPlace'] == 'true' && $_GET['byIncident'] == 'true') 
{

$result = select_incident();

if(mysqli_num_rows($result) > 0)
{
    $response = '';
    while ($row = mysqli_fetch_assoc($result))
    {
        $response .= 
            "<tr>
                <td>".$row['fecha']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['descripcion']."</td>
            </tr>";
    }
    echo $response;
}

}
?>