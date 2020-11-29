<?php

require_once 'funciones.php';
$bolsa = [1,2,3,4,5,6,88,99,666,545,564,65,498,4736514,698,4365,49847];



if(!isset($_POST['sacarBolas'])){
     form();
    pintarBolsa($bolsa);
   
   
}else{
    sacarBolasAleatorio($bolsa);
}