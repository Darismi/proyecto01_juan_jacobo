<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Herencia, Clases Abstractas, Interfaces</title>
    <meta charset="utf-8">
    <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
    <link rel="stylesheet" content="text/css" href="css/estilos.css" />	
</head>
<body>
    <?php
        //require 'Car.php';
        require 'Deportivo.php';
        //require 'Usuario.php';
        require 'Honda.php';
        require 'Toyota.php';
    ?>

    <?php
        /*
        class Padre{

        }

        class Hija extends Padre{

        }
        */
        /*
        $deportivo1 = new Deportivo();

        $deportivo1->setModelo("lamborgini");        

        echo "<br />".$deportivo1->getModelo();        
        
        $deportivo1->verMiModelo();
        echo "Modelo: ".$deportivo1->getModelo();
        echo "<br />".$deportivo1->pitar();
        echo "<br />".$deportivo1->conducirConEstilo();
        
        echo  "<br />".$deportivo1->levantarCapota();
        */
        $toyota1 = new Toyota();

        $toyota1 -> setContenidoTanque(10);

        echo "Con el tanque lleno el toyota recorre ".$toyota1->calcNumKilomConTanqueLleno();
        echo "El color de toyota es ".$toyota1->getColor().".";

    ?>    
</body>
</html>

