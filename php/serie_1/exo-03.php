<?php
$n = $argv[1];
function afficherLesNombresRebour($nombre){
    $n = 10;
    
for ($i=$nombre; $i>=0 ; $i--) { 
 echo "$i,";
 
}

}
afficherLesNombresRebour($n);
?>