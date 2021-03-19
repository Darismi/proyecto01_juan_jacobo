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
        require 'Car.php';
        //require 'Usuario.php';
    ?>

    <?php
    /*
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
    */


        
        $mercedes = new Car("BMW-1000");  
        $bmw = new Car("mod-2");
        $audi = new Car("AudiZ10");

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

        echo "<br/><br/> Probando el uso de la variable this";
        echo "<br/>";
        $carro1 = new Car("mod-4");
        $carro2 = new Car("mod-5");

        $carro1->tieneCapota = false;
        $carro1->empresa = "Toyota";
        $carro1->color = "Verde";

        $carro2->empresa = "Renault";
        $carro2->color = "Blanco";

        echo $carro1->pedirRevision();
        echo "<br/>";
        echo $carro1->levantarCapota();
        echo "<br/><br/>";
        echo $carro2 -> pedirRevision();
        echo "<br/>";
        echo $carro2 -> levantarCapota();
        echo "<br/><br/> Usando el encadenamiento:";
        $carro3 = new Car("mod-6");
        $gasolina = $carro3 -> llenar(10) -> correr(40) -> contenidoTanque;
        echo "<br/>El número de galones que quedan en el tanque son: ". $gasolina . " galones.";
        echo "<br/><br/> Accediendo a un atributo publico ";
        $carro3 -> setModelo("audi");
        //$carro3 -> modelo = "Audi";
        echo "<br/> Carro $3 tiene el siguiente modelo: ". $carro3 -> getModelo();

        echo "<br/><br/>Imprimiendo modelos: <br/>".$bmw -> getModelo() . "<br/>".
        $mercedes ->getModelo()."<br/>". $audi->getModelo()."<br/>".
        $carro1->getModelo()."<br/>".$carro2->getModelo()."<br/>".$carro3->getModelo()."<br/>";
    ?>
</body>
</html>