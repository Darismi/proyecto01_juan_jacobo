<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dependency Injection</title>
</head>
<body>
<?php

    require 'InterfacePiloto.php';
    require 'Piloto.php';
    require 'Avion.php';
    require 'PilotoRobot.php';

    $pilotoHumano = new Piloto();
    $avion = new Avion();
    $avion->setPiloto($pilotoHumano);
    echo $avion->getPiloto()->digaSuNombre("Alex");

    echo "<br/>";

    $pilotoRobot = new PilotoRobot();
    $avion = new Avion();
    $avion->setPiloto($pilotoRobot);
    echo $avion->getPiloto()->digaSuNombre("Arturito");

?>        
</body>
</html>