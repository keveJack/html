<?php
$n = $argv[1];
function afficherPuissanceDe2($nombre){
    $i=1;   
while ($i <= $nombre) {
  
echo (2 ** $i);
 echo ",";  $i++ ;
}

}
afficherPuissanceDe2($n);
?>