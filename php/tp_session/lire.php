<?php
session_start();
if(isset($_SESSION['fruits'])){
    foreach($_SESSION['fruits']as $fruits => $prix){
        echo "<p> le prix du $fruits est $prix </p>";
    }
}
else
echo "tout est vide";