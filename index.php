<?php

$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" => 19
];

 foreach ($students as $noms => $age){
     echo '<h1>' . $noms . ' a ' . $age . ' ans. </h1>';
 }



$Moyenne = (42+51+45+48+19) / 5;
echo '<h1> La moyenne est de ' . $Moyenne . ' ans </h1>';


?>