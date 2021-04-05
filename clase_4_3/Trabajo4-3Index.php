<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cohesion</title>
</head>
<body>
    <?php
        require 'GestorArchivoDeudores.php';
        require 'Rankings.php';
        require 'MostrarInformacion.php';
        /*
        $gestor = new GestorArchivoDeudores();

        $gestor->abrirArchivo();
        $gestor->mostrarDeudores();

        $gestor->abrirArchivo();
        $gestor->mostrarDeudor(1019670032);

        $gestor->abrirArchivo();
        $gestor->mostrarDeudor(101967003);

        $gestor->abrirArchivo();    
        $gestor->mostrarRanking();
        */

        $informacion = new MostrarInformacion();
        $informacion->mostrarDeudores();
        $informacion->mostrarDeudor(1019670032);
        
        $ranking = new Rankings();
        $ranking->mostrarRanking();
    ?>
</body>
</html>