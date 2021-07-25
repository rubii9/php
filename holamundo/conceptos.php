<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro primer programa</title>
</head>

<body>
    <h1><?php echo "hola mundo" ?></h1>

    <!-- Variables -->
    <?php
    $variable_uno = 23;
    $variable_dos = "hola mundo";
    echo "tengo " . $variable_uno . " años ";
    echo "<br />";
    echo " $variable_dos " . $variable_uno;
    ?>

    <br>
    <!-- Arrays -->
    <?php

    $frutas = array('manzanas', 'uvas', 'platanos', 'peras');

    if ($frutas[0] == "manzanas") {
        echo "es corecto";
    } else {
        echo "es incorrecto";
    }

    $frutas2 = array("clave1" => "manzanas", "clave2" => "uvas");
    echo "<br />";
    echo $frutas2["clave2"]
    ?>

    <br>

    <!-- Constantes -->
    <?php

    define("constante", "hola");
    echo constante;

    ?>


    <br>

    <!-- IF / Switch / For / While -->
    <?php
    $edad = 14;
    $opc = 2;

    if ($edad >= 18) {
        echo "somos mayores de edad";
    } else {
        echo "somos menores de edad";
    }

    echo "<br>";

    switch ($opc) {
        case 2:
            echo "vale 2";
            break;
        case 3:
            echo "vale 3";
            break;
        case 4:
            echo "vale 4";
            break;

        default:
            echo "no encuentra valor";
            break;
    }
    echo "<br>";

    for ($i = 0; $i < 11; $i++) {
        echo "variable incrementa " . $i;
        echo "<br>";
    }

    echo "<br>";

    $j = 0;
    while ($j <= 10) {
        $j++;
        echo $j;
        echo "<br>";
    }
    ?>

    <br>

    <!-- Operaciones con fechas -->
    <?php

    echo "fecha de hoy: " . date("d-m-Y");
    echo "<br>";
    echo "el dia de hoy es: " . date("d");
    echo "<br>";
    echo "el mes actual es: " . date("M");
    echo "<br>";
    echo "el mes actual es: " . date("F");
    ?>


    <br>
    <br>

    <!-- Operadores lógicos-->
    <?php
    $a = 0;
    $b = 2;

    if ($a == 1 and $b == 2) {
        echo "se cumple la condicion";
    } else {
        echo "no se cumple";
    }

    echo "<br>";

    if ($a == 1 or $b == 2) {
        echo "se cumple alguna condición";
    } else {
        echo "no se cumple ninguna";
    }

    echo "<br>";

    if ($a == 1 xor $b == 2) {
        echo "se cumple alguna condición";
    } else {
        echo "no se cumple";
    }

    ?>

    <br>
    <br>


    <!-- Operadores Aritméricos -->

    <?php
    $val1 = 2;
    $val2 = 3;
    echo $val1 + $val2;
    echo "<br>";
    echo $val1 - $val2;
    echo "<br>";
    echo $val1 / $val2;
    echo "<br>";
    echo $val1 * $val2;
    echo "<br>";
    echo $val1 ** $val2;
    ?>

    <br>
    <br>

    <!-- Operadores de comparación -->

    <?php
    /*  
        == Igual
        === Identico
        !=  <> Diferente 
        !== No identico
        <= mayor igual que
        >= menor igual que
        
    */
    ?>


    <!-- Manipulaciñón de cadenas -->
    <?php
    $cadena = "hola mundo";
    echo "caracteres de la string " . strlen($cadena);
    echo "<br>";
    echo "remplazar h por H " . str_replace("h", "H", $cadena);
    echo "<br>";
    echo "pasar a mayusculas " . strtoupper($cadena);
    echo "<br>";
    echo "pasar a minusculas " . strtolower($cadena);
    echo "<br>";
    echo "extraer caracteres " . substr($cadena, 0, 4);
    ?>

    <br>
    <br>

    <!-- Funciones -->
    <?php

    function fun($var1, $var2)
    {
        $suma = $var1 + $var2;
        return $suma;
    }

    echo fun(1, 2);
    ?>



</body>

</html>