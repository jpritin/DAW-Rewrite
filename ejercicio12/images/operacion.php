<?php
    $op = $_GET["op"];
    $op1 = $_GET["op1"];
    $op2 = $_GET["op2"];

    switch ($op) {
        case "sumar":
            $result = $op1 + $op2;
            break;
        case "restar":
            $result = $op1 - $op2;
            break;
        case "multiplicar":
            $result = $op1 * $op2;
            break;
        case "dividr":
            $result = $op1 / $op2;
            break;
        default:
            $result = "Operacion invalida";
            break;
    }
    echo $result;
?>
