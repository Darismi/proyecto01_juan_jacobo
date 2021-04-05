<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Hija.php';
        require 'Mami.php';

        $hijita = new Hija();
        $hijita->gastarPlata();
        echo $hijita->mostrarPlata();

        $mami = new Mami($hijita);
        $mami->muestrameTuPlata();

        echo "Despues de dar plata: ";
        $mami->darPlata(500);
        $mami->muestrameTuPlata();

        echo "Despues de dar otra vez plata: ";
        $mami->darPlata(15000);
        $mami->muestrameTuPlata();
    ?>
</body>
</html>