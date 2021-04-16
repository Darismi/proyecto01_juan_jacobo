<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manejo de Excepciones</title>
    </head>
    <body>
        <?php
        require 'Gasolina.php';

        $datos_de_carros = array(
            array(50, 10),
            array(50, 0),
            array(50, -3),
            array(30, 5)
        );

        foreach($datos_de_carros as $dato=> $valor){
            try{
            $gasolina = new Gasolina();
            echo $gasolina->calcularGasto($valor[0],$valor[1])."<br/>";
            } catch (Exception $e){
                echo "<br/>Mensaje: ". $e->getMessage()."<br/>";           
                echo "Archivo: ". $e->getFile()."<br/>";
                echo "Línea: ". $e->getLine()."<br/>";
                echo "<hr/>";
                error_log($e->getMessage());
                error_log($e->getFile());
                error_log($e->getLine());
            }
        }


        ?>
        <a href="../clase_5_actividad/clase_5_actividad_Index.php">Actividad Clase 5</a>
        <br><br>
    </body>
</html>