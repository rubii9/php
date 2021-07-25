<?php

$val1 = $_POST["valor1"];
$val2 = $_POST["valor2"];
$operador = $_POST["operador"];

function calcular($v1, $v2)
{
    $ope = $_POST["operador"];
    switch ($ope) {
        case 0:
            $res = $v1 + $v2;
            break;
        case 1:
            $res = $v1 - $v2;
            break;
        case 2:
            $res = $v1 * $v2;
            break;
        case 3:
            $res = $v1 / $v2;
            break;
    }

    return $res;
}

$operacion = array("SUMA", "RESTA", "PRODUCTO", "DIVISION");
echo "el resultado de la: " . $operacion[$operador] . " es: " . calcular($val1, $val2);
echo "<br>";
