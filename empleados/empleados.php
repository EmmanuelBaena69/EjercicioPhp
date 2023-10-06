<?php
$nombre = $_POST['nombre'];
$valorHora = floatval($_POST['valorhora']);
$horasTrabajadas = floatval($_POST['horastraba']);
$opcion = $_POST['opcion'];

$salario = $valorHora * $horasTrabajadas;

switch ($opcion) {
    case 'ninos':
        $porcentajeDescuento = 5;
        break;
    case 'abuelos':
        $porcentajeDescuento = 7;
        break;
    case 'incapacitados':
        $porcentajeDescuento = 3;
        break;
    default:
        $porcentajeDescuento = 0; 
}

$descuento = ($salario * $porcentajeDescuento) / 100;
$salarioNeto = $salario - $descuento;

echo "Nombre del empleado: $nombre<br>";
echo "Salario antes del descuento: $salario<br>";
echo "Porcentaje de descuento seleccionado: $porcentajeDescuento%<br>";
echo "Cantidad a deducir: $descuento<br>";
echo "Salario neto a pagar: $salarioNeto";
?>
