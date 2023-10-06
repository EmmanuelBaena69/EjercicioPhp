<?php
    if (isset($_POST['calcular'])) {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $operacion = $_POST['operacion'];

        if ($operacion == "suma") {
            $resultado = $valor1 + $valor2;
            echo "La suma es: " . $resultado;
        } elseif ($operacion == "resta") {
            $resultado = $valor1 - $valor2;
            echo "La resta es: " . $resultado;
        } elseif ($operacion == "dividir") {
            if ($valor2 != 0) {
                $resultado = $valor1 / $valor2;
                echo "La división es: " . $resultado;
            } else {
                echo "No se puede dividir por cero.";
            }
        } elseif ($operacion == "multiplicar") {
            $resultado = $valor1 * $valor2;
            echo "La multiplicación es: " . $resultado;
        }
    }