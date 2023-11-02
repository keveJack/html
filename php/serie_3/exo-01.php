<?php
//tableau simple
$tableau[0]=2023;
$tableau[1]="DEVWEB-18-S2";
$tableau[]=11.12;
//tableau à 2 dimensions
$tab[0][0]=12;
$tab[0][1]="tv";
$tab[1][0]=1245.678;
$tab[1][1]="bye";
//tableau associatif
$toto["Nom"]="le nom de famille de Toto...";
$toto["Age"]=12;
$toto["Adresse"]="22 rue des bois fleuri";


var_dump($tableau);
foreach ($tableau as $key => $value) {
    echo "\n $key -> $value";
    # code...
}
// for ($i=0; $i < ; $i++) { 
//     # code...
// }
var_dump($tab);
foreach ($tab as $key => $value) {
    echo "\n $key => $value";
    # code...
}



var_dump($toto);
foreach ($toto as $key => $value) {
    echo "\n $key => $value";
    # code...
}
?>