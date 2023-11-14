<?php

include('../database/persistencia.php');

$lista = "";

$bd = new Bd();


$result = $bd -> read("redbull",$_POST['tabla']);

foreach($result as $i){
    $lista .= "
    <tr>
        <td>$i[0]</td>
        <td>$i[1]</td>
        <td>$i[2]</td>
        <td>$i[3]</td>
        <td>$i[4]</td>
    </tr>
    \n
    ";
}

echo($lista);
