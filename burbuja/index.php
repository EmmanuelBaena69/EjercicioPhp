<?php
$arreglo = array(5, 2, 9, 1, 7, 3, 10, 8, 12, 11,22);

function burbuja(&$arreglo) {
    $n = count($arreglo);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                list($arreglo[$j], $arreglo[$j + 1]) = array($arreglo[$j + 1], $arreglo[$j]);
            }
        }
    }
}

burbuja($arreglo);

echo "Arreglo ordenado: ";
foreach ($arreglo as $valor) {
    echo "$valor ";
}
?>
