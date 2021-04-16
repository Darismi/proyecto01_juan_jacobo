<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividad 5</title>
    </head>
    <body>
        <?php
        require 'Persona.php';
        require 'Usuario.php';

        function asignarGenero(Persona $person){
            if($person->getSexo() == "Femenino"){
                echo "Señora " . $person->getNombre() . "<br/>";
            } elseif ($person->getSexo() == "Masculino") {
                echo "Señor " . $person->getNombre() . "<br/>";
            } else {
                echo $person->getNombre() . "<br/>";
            }
        }

        try{
            $user1 = new Usuario("Pedro", "Masculino", 32);
            asignarGenero($user1);
        } catch (Exception $e) {
            echo "<br/>Mensaje: ". $e->getMessage()."<br/>"; 
        }
        
        try{
            $user2 = new Usuario("Rose", "Femenino", 28);
            asignarGenero($user2);
        } catch (Exception $e) {
            echo "<br/>Mensaje: ". $e->getMessage()."<br/>"; 
        }

        try{
            $user3 = new Usuario("Jose Maria", "Otro", 3); 
            asignarGenero($user3);
        } catch (Exception $e) {
            echo "<br/>Mensaje: ". $e->getMessage()."<br/>"; 
        }

        $personas = array(
            array("Li","Masculino",-50),
            array("fu","Masculino",0),
            array("ceos","Femenino",-3),
            array("ras","masculino",-13),
            array("pedro","masculino",-9),                      
        );

        foreach($personas as $person=> $dato){
            try{
            $user = new Usuario($dato[0], $dato[1], $dato[2]);
            } catch (Exception $e){
                echo "<br/>Mensaje: ". $e->getMessage()."<br/>";           
                echo "Archivo: ". $e->getFile()."<br/>";
                echo "Línea: ". $e->getLine()."<br/>";
                echo "<hr/>";
            }
        }
        

        ?>
    </body>
</html>