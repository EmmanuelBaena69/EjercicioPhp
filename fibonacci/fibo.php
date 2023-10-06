<hr>
<h1>Fibonacci</h1>
<?php
//1- Serie Fibonacci
$b=0;
$c=1;
for ($i=0; $i < 12 ; $i++)
 {
  $suma=$b+$c;
  echo $c.  "<br>";
  $b=$c;
  $c=$suma;
 }