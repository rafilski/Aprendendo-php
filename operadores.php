<?php 

$a = 50;
$b = 5;
$c = NULL;
$d = NULL;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";
echo $a ** $b;
echo "<br>";



var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a !== $b);
echo "<br>";
var_dump($a <=> $b);
echo "<br>";
echo $a ?? $b ?? $c;
echo "<br>";
echo --$a;
echo "<br>";
$resultado = (10 + 3) / 5 > 5 || 10 + 5 > 3;
var_dump($resultado);

 ?>