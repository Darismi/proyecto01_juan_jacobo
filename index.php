<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Programacion Web</title>
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
                <a href="clase_4/Trabajo4Index.php">Herencia y sobrecarga</a>
                <br><br>
                <a href="clase_4_2/Trabajo4-2Index.php">Acoplamiento</a>
                <br><br>
                <a href="clase_4_3/Trabajo4-3Index.php">Cohesion</a>
                <br><br>
                <a href="clase_4_4/Trabajo4-4Index.php">Polimorfismo</a>
                <br><br>
                <a href="clase_5_1/Trabajo5Index.php">Type Hinting Tipo 1</a>
                <br><br>
                <a href="clase_5_2/Trabajo5_2Index.php">Type Hinting Tipo 2</a>
                <br><br>
                <a href="clase_5_3/clase_5_3Index.php">Manejo de Excepciones</a>
                <br><br>
                <a href="clase_6_3/ReflectionIndex.php">Reflection 1</a>
                <br><br>
                <a href="clase_6_4/Reflection2Index.php">Reflection 2</a>
                <br><br>                
                <a href="clase_6_5/Reflection3Index.php">Reflection 3</a>
                <br><br>
                <a href="clase_6_2/clase_6_2Index.php">Propiedades y Metodos Estaticos</a>
                <br><br> 
                <a href="clase_6_1/clase_6_1Index.php">Dependency Injection</a>
                <br><br>                  
            </div>        
        </div>
    </body>
</html>