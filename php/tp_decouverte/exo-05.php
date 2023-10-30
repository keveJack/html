<?php
$x = 6700;
$y = 60;

$minute = intdiv($x,$y);
    $seconde = ($x%$y);
    $heure = intdiv($minute,$y);
    $minute = ($minute%$y);
    echo "\n";
    echo "il y a $heure heures, $minute minutes et $seconde secondes dans 6700 secondes";
    ?> 
