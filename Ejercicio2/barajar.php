<?php

require_once 'funciones.php';

$barajaEspañola = generarBaraja();
$barajada = barajar($barajaEspañola);
pintaBaraja($barajada);
echo ' <form action="barajar.php">
            <input type="submit" value="barajar">
        </form>';
echo ' <form action="index.php">
            <input type="submit" value="ordenar">
        </form>';