<?php

$kirjaimet = range('A','Z');
$numerot = range('1','26');
$lopputulos = array_combine($kirjaimet, $numerot);
echo $lopputulos['M'];


?>
