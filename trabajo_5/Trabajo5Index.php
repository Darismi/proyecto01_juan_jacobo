<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 5</title>
</head>
<body>
    Definición de tipos o Hint type. <br><br>

    <?php

        require 'Carro.php';
        require 'Conductor.php';
        
        function mostrarRendimiento (array $carros){
            foreach($carros as $carro){
                echo $carro->getModelo();
                echo " : ";
                echo "Recorre ".
                $carro->calcNumKilTanqueLleno().
                " kms con tanque lleno.";
                echo "<br />";
            }
        }

        $conductor = new Conductor();

        $my_car = new Carro("Toyota", true, 4, 80000000, 1.8, $conductor);

        $los_carros = array(
            new Carro("Toyota", true, 4, 80000000, 1.8, $conductor),
            new Carro("Ford", false, 4, 120000000, 2.4, $conductor),
            new Carro("Hunday", true, 4, 58000000, 2.7, $conductor),
            new Carro("Nisan", true, 4, 150000000, 4, $conductor),
            new Carro("Ford", true, 4, 170000000, 6, $conductor)
        );

        mostrarRendimiento($los_carros);
        

    ?>

</body>
</html>