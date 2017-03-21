<?php

$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" => 19
];

foreach ($students as $noms => $age){
    $somme += $age / count($students);
    echo '<h1>' . $noms . ' a ' . $age . ' ans. </h1>';
}

echo 'L\'age moyen est de ' . $somme. ' ans';

?>
