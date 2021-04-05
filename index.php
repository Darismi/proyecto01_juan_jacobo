<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Proyecto Heroku</title>
        <meta charset="utf-8">
        <link rel="stylesheet" content="text/css" href="css/normaliza.css" />
        <link rel="stylesheet" content="text/css" href="css/estilos.css" />
    </head>
    <body>
        <div id="envoltura">
            <header>
                <h1>Programaci&oacute;n web</h1>                
            </header>
            <div id="main">
                <p>
                    En este curso aprender&eacute; a programar p&aacute;ginas web usando Git.
                    <br>
                    <?php 
                        $curso = "Construccion del elementos del software 2";                        
                        echo "estás en el curso: $curso"
                    ?>
                </p>
                <a href="ClasesObjetos.php">Clases y objetos</a>
                <br><br>
                <a href="HerenClsAbsInter.php">Herencia, Clases Abstractas, Interfaces</a>
                <br><br>
                <a href="clase_4/Trabajo4Index.php">Herencia y sobrecarga, acoplamiento, cohesion, polimorfismo</a>
                <img src="/assets/img/piezas-de-construccion.jpg" width="300" heigth="300">
            </div>

            

        </div>
    </body>
</html>