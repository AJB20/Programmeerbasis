<?php

echo "Welkom, raad het getal.\n";
echo "getal onder 1 dan stopt het programma\n";
echo "getal boven 100 dan stopt het programma\n";
echo "stoppen? type: stop.\n";


function opnieuw() {


}



function getal_raden() {
$aantalx_raden = 0;

$aantalx_raden ++;
$programma_nummer= rand(1,2);
$spelernummer= readline("uw getal: \n");
$spelernummer= intval($spelernummer);

if ($spelernummer=="stop") {
    exit("gestopt");
}
if ($spelernummer<0) {
    exit("gestopt");
}
if ($spelernummer>100) {
    exit("gestopt");
}
    if ($spelernummer==$programma_nummer) {
        $aantalx_raden;
        echo "goed\n";
        echo "keren: $aantalx_raden";
        exit();
    }
    elseif ($spelernummer>$programma_nummer) {
        $aantalx_raden++;
        echo "te laag";
        getal_raden();
        exit();
    }
    elseif ($spelernummer<$programma_nummer) {
        $aantalx_raden++;
        echo "te hoog";
        getal_raden();
        exit();
        
       
    }
}


getal_raden();




?>