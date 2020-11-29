<?php

function pintaTablero(){
    echo "<table>";
    for ($i=0; $i < 8; $i++) { 
        echo "<tr>";
        for ($j=0; $j < 8; $j++) {
            if(($j+$i)%2 !== 0){
                echo "<td class='black'></td>";
            }else{
                echo "<td class='white'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function tableroAjedrez(){
    $figuras = ["peon","torre","caballo","alfil","rey","reina"];
    echo "<table>";
    for ($i=0; $i < 8; $i++) { 
        echo "<tr>";
        for ($j=0; $j < 8; $j++) {
            if(($j+$i)%2 !== 0){
                echo "<td class='black'></td>";
            }else{
                echo "<td class='white'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
