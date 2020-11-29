<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function barajar($bolsa){
    $barajado = [];
    $count = count($bolsa);
    for($i = 0; $i < $count; $i ++){
        $rand = array_rand($bolsa);
        array_push($barajado, $bolsa[$rand]);
        array_splice($bolsa, $rand,1);
    }
    return $barajado;
}

function pintarBolsa($bolsa){
    echo "<p class = titulo>Estas son las bolas disponibles</p>";
    echo "<table style='border: 1px solid black'><tr>";
    foreach($bolsa as $bola){
        echo "<td style='background-color: green'>".$bola."</td>";
    }
    echo "</tr></td>";
}
function pintarsacadas($bolsa){
    echo "<p class = titulo>Estas son las bolas sacadas</p>";
    echo "<table style='border: 1px solid black'><tr>";
    foreach($bolsa as $bola){
        echo "<td style='background-color: red'>".$bola."</td>";
    }
    echo "</tr></td>";
}
function form(){
      echo  '<form method="post" action="#">
            <input type="submit" name="sacarBolas" value="sacar bolas">
            </form>'; 
}

function sacarBolas($bolsa){
    $sacadas = [];
    $count = count($bolsa);
    echo "<div class='contain'>";
    for($i = 0; $i < $count; $i++){
        pintarBolsa($bolsa);
        $rand = array_rand($bolsa);
        array_push($sacadas, $bolsa[$rand]);
        array_splice($bolsa, $rand,1);
        pintarsacadas($sacadas);
        $bolsa = barajar($bolsa);
    }
    echo "</div>";
}

function sacarBolasAleatorio($bolsa){
    $bolasSacadas = [];
    $cont = count($bolsa);
    echo "<div class='contain'>";
    for ($i=0; $i < $cont; $i++) { 

        pintarBolsa($bolsa);

        $key = array_rand($bolsa);
        array_push($bolasSacadas,$bolsa[$key]);
        array_splice($bolsa,$key,1);

        pintarsacadas($bolasSacadas);
        
        //$bolsa = barajar($bolsa);
    }
    echo "</div>";
}