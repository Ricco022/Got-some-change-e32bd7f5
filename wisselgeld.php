<?php

$string = $argv[1] . "";
$int = (int)$string;
if ($int > 0) {
    echo $int . " x 1 euro";
    
}
else {
    exit ("Geen wisselgeld");
}
?>