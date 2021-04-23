<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estaticos</title>
</head>
    <body>

        <?php

            require 'Visitas.php';

            echo Visitas::$numeroVisitas;

            Visitas::$numeroVisitas = 12;           
            echo "<br/>";
            echo Visitas::$numeroVisitas;

            Visitas::agregarNumVisitas(3);
            echo "<br/>";
            echo Visitas::$numeroVisitas;

            Visitas::agregarNumVisitas(-5);
            echo "<br/>";
            echo Visitas::$numeroVisitas;

            Visitas::redirect("https://www.google.co.uk/");

        ?>
        
    </body>
</html>