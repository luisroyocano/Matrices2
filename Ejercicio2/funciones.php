<?php
function generarBaraja(){
   $matriz = [];
    $palos = ["oros","copas","espadas","bastos"];
    for($i = 0; $i < count($palos); $i++){
        for($j = 1; $j <= 12; $j++){
            $aux = $j." de ".$palos[$i];
            array_push($matriz, $aux);
        }
    }
    return $matriz;
}
function pintaBaraja($barajaEspañola){
    foreach($barajaEspañola as $carta){
       echo $carta."<br>";
   }
}

function barajar($barajaEspañola){
    $barajada = [];
    $count = count($barajaEspañola);
    for($i = 0; $i < $count; $i ++){
        $rand = array_rand($barajaEspañola);
        array_push($barajada, $barajaEspañola[$rand]);
        array_splice($barajaEspañola, $rand, 1);
        
    }
    return $barajada;
}

