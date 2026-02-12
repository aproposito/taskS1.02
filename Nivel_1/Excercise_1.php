<?php

echo "<h2>Ejercicio 1</h2>";

$age = 52;
$height = 1.73;
$name = "Álvaro";
$isMarried = true;

echo "Mi nombre es " . $name . " tengo " . $age . " mido " . $height . " metros y estoy casado. <br>"; 
const NOMBRE = "Álvaro Martínez";

echo "<h1>". NOMBRE . "</h1>" . "<hr></hr>";
echo "<h2>Ejercicio 2</h2>";

$text1 = "Hello, World!";

echo "$text1 <br><br>";

echo strtoupper($text1) . "<br><br>" ;
echo "La longitud del texto es de " . strlen($text1) . " caracteres." . "<br><br>";
echo "Y al revés se escribe: " . strrev($text1) . "." . "<br><br>"; 

$text2 = "Este es el curso de PHP ";
echo "$text1 " . " $text2"; 

echo "<br><br>" . "<hr></hr>";
echo "<h2>Ejercicio 3</h2>";

$x = 10;
$y = 5;
$n = 0.5;
$m = 10.1;

echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br><br>";

echo "$n + $m = " . ($n + $m) . "<br>";
echo "$n - $m = " . ($n - $m) . "<br>";
echo "$n * $m = " . ($n * $m) . "<br>";
echo "$n / $m = " . ($n / $m) . "<br><br>";
//echo "$n % $m = " . $n % $m . "<br><br>"; Parece el módulo no funciona bien con double.

echo "El doble de $x es " . ($x*2) . "<br>";
echo "El doble de $y es " . ($y*2) . "<br>"; 
echo "El doble de $n es " . ($n*2) . "<br>"; 
echo "El doble de $m es " . ($m*2) . "<br><br>"; 

echo "La suma de todas las variables es = " . ($x + $y + $n + $m) . "<br>";
echo "El producto de todas las variables es = " . ($x * $y * $n * $m) . "<br><br>";

echo "<br><br>" . "<hr></hr>"; 
echo "<h2>Ejercicio 4</h2>";

$limit = 0;
$increase = 0;

function counting ($increase = 1, $limit = 10){
for ($i = 0; $i < $limit; $i += $increase){
    echo "$i <br>";
};
};
counting(3);

echo "<br><br><hr></hr>"; 
echo "<h2>Ejercicio 5</h2>";

$grade = 0;

function comprobarGrado ($grade){

if ($grade >= 60){
    echo "Tu grado es: Primera División.";
}
elseif ($grade < 60 && $grade >= 45){
    echo "Tu grado es: Segunda División.";
}elseif ($grade <= 44 && $grade >= 33){
    echo "Tu grado es: Tercera División.";
}else {
    echo "Lo siento has suspendido.";
}
};
comprobarGrado(44);

echo "<br><br><hr></hr>"; 
echo "<h2>Ejercicio 6</h2>";

// Exercici 6
// Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
// Escriu La funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
//  Important
// Consell: pot ser que la funció rand () et resulti útil.


function isBitten (){
    $isBitten = rand(0,1);
    if ($isBitten == 1){
        return true;
    }else { 
        return false;
}}
$isBitten = isBitten();
    if ($isBitten == true){
    echo "true";
    }else {
       echo "false"; 
    }
?>
