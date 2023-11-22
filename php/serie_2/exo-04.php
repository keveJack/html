<?php
$individu = array(
    'Nom'=>'Dupont',
    'Prenom'=>'Martin',
    'Age'=> 18,
    'Nationalité'=>'Francais',
);
$individu2 = array(
    'Nom'=>'Durand',
    'Prenom'=>'Bernard',
    'Age'=> 19,
    'Nationalité'=>'Francais',
);
$individu3 = array(
    'Nom'=>'Dubois',
    'Prenom'=>'Thomas',
    'Age'=> 23,
    'Nationalité'=>'Francais',
);
$individus = array($individu, $individu2, $individu3);
var_dump($individus);
foreach ($individus as $key => $individu) {
    foreach ($individu as $key => $value) {
        echo "$key $value \n";
        # code...
    }
    # code...
}
// var_dump($individu2);
// foreach ($individu2 as $key => $value) {
//     echo "\n $key -> $value";
// }
//     var_dump($individu3);
// foreach ($individu3 as $key => $value) {
//     echo "\n $key -> $value";
// }
// var_dump($individus);
// foreach ($individus as $key => $value) {
//     echo "\n $key -> $value";
// }
// ?>