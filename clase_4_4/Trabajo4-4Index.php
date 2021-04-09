<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polimorfismo</title>
</head>
<body>
    <?php
        require 'Articulo.php';
        require 'JSONWriterr.php';
        require 'XMLWriterr.php';      
        require 'FactoryWriter.php';

        $article = new Articulo('Polimorfismo', 'Esteven Gallego', '25/03/2021', "Programación");
        $xml = new XMLWriterr();
        $json = new JSONWriterr();
        echo $article->write($json);
        echo "<br/>";
        echo $article->write($xml);

        $writer = FactoryWriter::getWriter('JSON');
        echo "<br/>";
        echo $article->write($writer);
    ?>
</body>
</html>