<?php

function redireccionar($dato, $key){
   echo "<a href='index.php?id=$key&modulo=$dato'>-$dato</a><br>";
}
function pintaCabecera(){
    $días = ['lunes','martes','miércoles','jueves','viernes'];
    echo "<tr>";
    echo "<td>Horas</td>";
    for($i = 0; $i < 5; $i ++){
        echo "<td class='dias'>".$días[$i]."</td>";
    }
    echo "</tr>";
}
