<?php
//1- tomar dos funciones de PHP de la pagina
//metodo implode obtiene los elementos de un array en un string
echo "2-tomar dos funciones de PHP de la pagina";
echo "<br>";
$frutas = array ("mango, mandarina, uva");
$frutas_string = implode(",", $frutas);
echo "Las frutas que mas me gustan son: " .
$frutas_string;
echo "<br>";
//metodo strlen obtiene la lingitud del string
$str = 'Viva Alemania';
$NumeroLetras = strlen($str);
echo 'La cadena "'. $str. '" tiene '. $NumeroLetras. ' letras';
echo "<br>";
echo "<br>";

//2- Juego del baloto (del 1 al 43) y una superbola del 1 al 16
echo "3- Juego del baloto (del 1 al 43) y una superbola del 1 al 16";
echo "<br>";
echo "Juego del baloto \n";
echo "<br>";
echo "Numeros ganadores\n";
echo "<br>";
echo "<br>";

//3- solucionar lo de la zona horaria
echo "4- solucionar lo de la zona horaria";
echo "<br>";
date_default_timezone_set("America/Bogota");

$hoy = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
echo $hoy ;
echo "<br>";
$hoy = date("m.d.y");
echo $hoy ;
echo "<br>";                      // 03.10.01
$hoy = date("j, n, Y");
echo $hoy ;
echo "<br>";                      // 10, 3, 2001
$hoy = date("Ymd");
echo $hoy ;
echo "<br>";                           // 20010310
$hoy = date('h-i-s, j-m-y, it is w Day');
echo $hoy ;
echo "<br>";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$hoy = date('\i\t \i\s \t\h\e jS \d\a\y.');
echo $hoy ;
echo "<br>";   // it is the 10th day.
$hoy = date("D M j G:i:s T Y");
echo $hoy ;
echo "<br>";             // Sat Mar 10 17:16:18 MST 2001
$hoy = date('H:m:s \m \i\s\ \m\o\n\t\h');
echo $hoy ;
echo "<br>";    // 17:03:18 m is month
$hoy = date("H:i:s");
echo $hoy ;
echo "<br>";      // 17:16:18
$hoy = date("Y-m-d H:i:s");
echo $hoy ;
echo "<br>";        // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
echo "<br>";

