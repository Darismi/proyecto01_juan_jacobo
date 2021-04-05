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
        require 'Usuario.php';
        require 'Honda.php';
        require 'Toyota.php';
        require 'MiniCar.php';
        require 'Administrador.php';
        require 'Programador.php';
    ?>

    <?php
        /*
        class Padre{
            que putas jajaja jjajajajajaja mera vuelta parce, si idea que pasa

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

        /*
        $toyota1 = new Toyota();

        $toyota1 -> setContenidoTanque(10);

        echo "Con el tanque lleno el toyota recorre ".$toyota1->calcNumKilomConTanqueLleno();
        echo "El color de toyota es ".$toyota1->getColor().".";
        */

        /*
        $carro1 = new MiniCar();
        $carro1 -> setModel("Modelo AX");
        echo "Modelo: ".$carro1->getModel();
        echo "<br />";
        echo "Pitando: ".$carro1->pitar();
        echo "<br />";
        $carro1->setTieneLlantas(true);
        echo "<br />";
        echo "¿Tiene llantas? ".$carro1->getTieneLlantas();
        echo "<br />";
        */

        
        $admin1 = new Administrador("Pedro","Romero");
        $admin1->setNombre("Pedro");
        $admin1->setApellido("Romero");
        $admin1->saludar();
        
        $financiero = new Financiero("Armando","Casas");
        $financiero->setSalario(100);
        $financiero->definirArea();

        $recursosHumanos = new RecursosHumanos("Juan","Reyes");
        $recursosHumanos->setSalario(150);
        $recursosHumanos->definirArea();


        $usuario1 = new Programador("carlos","gil");
        
        $usuario1->agregarLenguajeDeProgramacionBackend("Python"); 
        $usuario1->agregarLenguajeDeProgramacionBackend("C#"); 
        $usuario1->agregarLenguajeDeProgramacionBackend("Java");
        
        $usuario1->agregarLenguajeDeProgramacionFrontend("Javascript"); 
        $usuario1->agregarLenguajeDeProgramacionFrontend("Jquery"); 
        $usuario1->agregarLenguajeDeProgramacionFrontend("Angular"); 

        $usuario1->mostrarLenguajesDeProgramacionBackend();
        $usuario1->mostrarLenguajesDeProgramacionFrontend();


    ?>    
</body>
</html>

