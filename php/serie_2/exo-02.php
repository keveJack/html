<?php
$tableauNombre = [0,1,2,3,4,5,6];
$tableauDifValeur = [];
$somme =  array_sum($tableauNombre);
echo "somme = " . $somme ;
echo "\n";
$moyenne = $somme / count($tableauNombre);
echo "moyenne = " . $moyenne ;
echo "\n";
foreach ($tableauNombre as $key => $value) {
    $difValeur = abs($value-$moyenne);
    $tableauDifValeur[] = $difValeur;
    
}

$ecartType = (array_sum($tableauDifValeur)/count($tableauDifValeur));
echo "Ecarttype(tableauNombre)= $ecartType";
?>