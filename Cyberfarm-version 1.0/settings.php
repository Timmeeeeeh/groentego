<?php
$ID = "";
$weather = "";
$hash = "";

//Maak een ID aan Random
$ID = (rand(10000,1000000));

//Maak een random weather nummer aan
$weather = (rand(1,100));

//Maak een hash aan met het ID
$hash = hash('ripemd160', $ID);
?>
