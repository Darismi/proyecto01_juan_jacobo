<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflections</title>
</head>
<body>
    <?php
        require 'ClaseA.php';

        //NOTA -> SÍ SE PUEDE VER LAS PROPIEDADES DE LOS OBJETOS
        $o = new ClaseA();
        echo "<br/>Mirar si tiene propiedades:";
        echo "<br/>ClaseA tiene el atributo propiedad_publica: ".(property_exists($o,'propiedad_publica') ? "SI":"NO");
        echo "<br/>ClaseA tiene el atributo propiedad_protected: ".(property_exists(new ClaseA,'propiedad_protected')==true ? "SI":"NO");
        echo "<br/>ClaseA tiene el atributo propiedad_privada: ".(property_exists('ClaseA','propiedad_privada')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el atributo propiedad_static: ".(property_exists('ClaseA','propiedad_static')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el atributo otra_propiedad: ".(property_exists('ClaseA','otra_propiedad')==1 ? "SI":"NO");

        echo "<br/><br/>Mirar si tiene propiedades:";
        echo "<br/>ClaseA tiene el método public_function(): ".(method_exists('ClaseA','public_function')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el método protected_function(): ".(method_exists('ClaseA','protected_function')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el método private_function(): ".(method_exists('ClaseA','private_function')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el método static_function(): ".(method_exists('ClaseA','static_fucntion')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el método static_function2(): ".(method_exists('ClaseA','static_fucntion2')==1 ? "SI":"NO");

        echo "<br/><br/>Pero con constantes:";
        echo "<br/>ClaseA tiene el objeto CONSTANTE: ".(property_exists('ClaseA','CONSTANTE')==1 ? "SI":"NO");
        echo "<br/>Existe el objeto CONSTANTE: ".(property_exists((object)new class{}, 'CONSTANTE')==1 ? "SI":"NO");

        echo "<br/><br/>Usando ReflectionClass:";
        $r = new ReflectionClass('ClaseA');
        echo "<br/>ClaseA tiene el atributo propiedad_publica: ".($r->hasProperty('propiedad_publica')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene el atributo public_function(): ".($r->hasMethod('public_function')==1 ? "SI":"NO");
        echo "<br/>ClaseA tiene la constante CONSTANTE: ".($r->hasConstant('CONSTANTE')==1 ? "SI":"NO");



    ?>
</body>
</html>