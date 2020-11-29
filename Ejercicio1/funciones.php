<?php

function generarMatriz($num_total, $valor_h, $valor_w){
    $rango = range(1, $num_total);
    $matriz = [];
    $aux = 0;
    for($i = 1; $i <= $valor_h; $i ++){
        array_push($matriz, array_slice($rango, $aux, $valor_w * $i));
        $aux =  $valor_w * $i;
    }
    return $matriz;
}
function pintarMatriz($matriz){
    echo "<table style='border: 1px solid black'>";
        for($i = 0; $i < 20; $i++){
            echo "<tr style='border: 1px solid black'>";
            for($j = 0; $j < 20; $j++){
                echo "<td style='border: 1px solid black'>" .$matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
}
