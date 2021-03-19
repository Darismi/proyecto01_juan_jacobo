<!DOCTYPE html>
<html lang="es">
<head>
	<title>Clases y Objetos</title>
	<meta charset="utf-8">
    <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
    <link rel="stylesheet" content="text/css" href="css/estilos.css" />	
</head>
<body>
	<?php
        //require 'Car.php';
        require 'Usuario.php';
    ?>

    <?php
        $usuario1 = new Usuario("","");
        $usuario2 = new Usuario("","");
        $usuario3 = new Usuario("","");
        $usuario4 = new Usuario("","");
        $usuario5 = new Usuario("Mateo","Ortiz");


        $usuario1->nombre = "Juan";
        $usuario1->apellido = "Poli";
        $usuario1->saludar();
        echo "<br>";

        $usuario2->nombre = "Jina";
        $usuario2->apellido = "Poli";
        echo $usuario2->getNombre();

        echo "<br>";echo "<br>";
        $usuario3->nombre = "Jhonny";
        $usuario3->apellido = "Ruiz";
        $usuario3->registrar()->enviarEmail();

        $usuario3->setNombre("Alejandro");
        $usuario3->getNombre();

        $usuario5->getNombreCompleto();






    /*        
        $mercedes = new Car();  
        $bmw = new Car();
        $audi = new Car();

        echo "Color del bmw $bmw->color";
        echo "<br/>";
        echo "Color del mercedes: $mercedes->color";

        $bmw -> color = "Blue";
        $bmw -> empresa = "BMW";

        $mercedes -> color = "negro";
        $mercedes -> empresa = "Mercedez Benz";
        echo "<br/>";
        echo "Color del bmw $bmw->color compañia: $bmw->empresa";
        echo "<br/>";
        echo "Color del mercedes: $mercedes->color compañia: $mercedes->empresa";
        echo "<br/>";
        echo "Bmw pitando: ".$bmw->pitar();
        echo "<br/>";
        echo "Mercedes pitando: ".$mercedes->pitar();

        echo "<br/><br/> Probando el uso de this";

        $carro1 = new Car();
        $carro2 = new Car;

        $carro1->tieneCapota = false;
        $carro1->empresa = "Toyota";
        $carro1->color = "Verde";

        $carro2->empresa = "Renault";
        $carro2->color = "Blanco";

        echo $carro1->pedirRevision();
        echo $carro1->levantarCapota();
        echo "<br/><br/>";
        echo $carro2 -> pedirRevision();
        echo $carro2 -> levantarCapota();
    */
    ?>
</body>
</html>