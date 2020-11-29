


<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
         
       include 'funciones.php';
        $modulos = ['mates','lengua','historia','inglés'];
        array_walk($modulos, 'redireccionar');
        pintaCabecera();
        ?>
        
    </body>
</html>
