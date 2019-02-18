<?php
    function getItems($arr)
    {
        $res = "";
        for ($i = 0; $i < count($arr)-1; $i ++) 
            $res .= $arr[$i].", ";
        $res .= $arr[count($arr)-1];
        return $res;
    }

    function average($arr)
    {
        $res = 0;
        foreach($arr as $item) $res += (int) $item;
        $res /= count($arr);
        return $res;
    }
    
    function median($arr)
    {
        sort($arr);
        $res = 0;
        if (count($arr) % 2 == 1) $res = $arr[count($arr)/2];
        else $res = ($arr[count($arr)/2] + $arr[(count($arr)/2)-1])/2;
        return $res;
    }
    
    function itemsToHTMLList($arr)
    {
        $res = "<ul>";
        for ($i = 0; $i < count($arr); $i ++)
            $res .= "<li>".$arr[$i]."</li>";
        return $res."</ul>";
    }
    
    function itemsToHTMLTable($head, $arr)
    {
        $res = "<table> <thead><tr>";
        for ($i = 0; $i < count($head); $i++)
            $res .= "<th class = 'tableHeader'>".$head[$i]."</th>";
        $res .= "</tr></thead><tbody>";
        for ($i = 0; $i < count($arr[0]); $i++)
        {
            $res .= "<tr>";
            for ($j = 0; $j < count($arr); $j ++)
                $res .= "<td class = 'tableData'>".$arr[$j][$i]."</td>";
            $res .= "</tr>";
        }
        return $res."</tbody></table>";
    }
    
    function problem1($arr)
    {
        echo "<p>El pormedio de los numeros:<br>[".
        getItems($arr)."]<br> es: ".average($arr)."</p>";
    }
        
    function problem2($arr)
    {
        echo "<p> La mediana de los números: <br>[".
        getItems($arr)."]<br>es: ".median($arr)."</p>";
    }
    
    function problem3($arr)
    {
        echo "<p> Se tiene a los números: <br>".getItems($arr)."<br>";
        echo "Y con ellos podemos obtener: </p><p>";
        echo itemsToHTMLList(array(
            "El promedio:<br>".average($arr),
            "La mediana:<br>".median($arr)));
        sort($arr);
        echo "</p><p>El arreglo ordenado es:<br>".getItems($arr)."<br>";
        rsort($arr);
        echo "El arreglo ordenado de forma inversa es:<br>".getItems($arr);
        echo "</p>";
    }
    
    function problem4($number)
    {
        echo "<p> Los cubos y cuadrados del 1 al ".$number." son:";
        $arr = array(array(), array(), array());
        for ($i = 1; $i <= $number; $i++)
        {
            array_push($arr[0], $i);
            array_push($arr[1], $i*$i);
            array_push($arr[2], $i*$i*$i);
        }
        $head = array("x","cuadrado","cubo");
        echo itemsToHTMLTable($head, $arr)."<br></p>";
    }
    
    function problem5($number)
    {
        echo "<p> Los números impares encontrados del rango del 1 al ".$number;
        echo " son:<br>";
        $arr = array();
        for ($i = 0; $i <= $number; $i ++)
            if ($i % 2 == 1) array_push($arr, $i);
        echo getItems($arr). "</p>";
    }
?>