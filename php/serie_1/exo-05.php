<?php
$n = $argv[1];
function afficherLesNombres($nombre){
    
    
for ($i=1; $i <= $nombre ; $i++) { 
echo (2 ** $i);
 echo ",";
}

}
afficherLesNombres($n);
?>