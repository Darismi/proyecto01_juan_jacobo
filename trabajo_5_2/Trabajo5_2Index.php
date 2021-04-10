<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos 2</title>
</head>
<body>
    <?php
        require 'Carro.php';
        require 'Bmw.php';
        require 'Mercedes.php';

        function calcPrecioTanq(Carro $carro, int $precioPorGalon){
            return "Precio: ".$carro->calcVolumenTanq()*0.000264172*$precioPorGalon."<br />";
        }

        $bmw1 = new Bmw("EVQ169", 25, 18);
        echo "BMW ".calcPrecioTanq($bmw1, 9789);

        $mercedes1 = new Mercedes("FBR108", 10, 23);
        echo "Mercedes ".calcPrecioTanq($mercedes1, 9789);
    ?>
</body>
</html>
