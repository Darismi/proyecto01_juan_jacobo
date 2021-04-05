<!DOCTYPE html>
<html lang="es">
<head>
    <title>  </title>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Gerente.php';
        
        $gerente = new Gerente("Ana Villegas", 3000000, "Producción");
        $gerente->dar_aumento(500000);

        $empleado = new Empleado("John Zapata", 1000000);
        $empleado->dar_aumento(500000);
    ?>
</body>
</html>