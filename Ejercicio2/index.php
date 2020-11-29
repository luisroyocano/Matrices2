<?php
    require_once 'funciones.php';
    
    
   $barajaEspañola = generarBaraja();

   pintaBaraja($barajaEspañola);
   echo ' <form action="barajar.php">
            <input type="submit" value="barajar">
        </form>';
   