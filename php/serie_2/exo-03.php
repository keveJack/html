<?php
$tableau[0]= "The Shawshank Redemption";
$tableau[1]= "The Godfather";
$tableau[2]= "The Dark Knight";
$tableau[3]= "The Lord of the Rings: The Return of the King";
$tableau[4]= "Pulp Fiction"; 
var_dump($tableau);
foreach ($tableau as $key => $value) {
    echo "\n $key -> $value";
}
?>