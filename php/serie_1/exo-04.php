<?php
$n = $argv[1];
function afficherLesNombres($nombre){
    $n = 10;
    
for ($i=1; $i <= $nombre ; $i++) { 
    $i++;
 echo "$i,";
 
}

}
afficherLesNombres($n);
?>