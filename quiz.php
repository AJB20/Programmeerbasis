<?php

echo "Welkom, raad het getal.\n";
echo "is uw getal onder de 1 dan stopt het programma\n";
echo "is uw getal boven de 100 dan stopt het programma\n";
echo "stoppen? type: stop.\n";

function getal_raden() {
$programma_nummer= rand(1,100);
$spelernummer= readline("uw getal: \n");
$spelernummer= intval($spelernummer);
$aantalx_raden = 0;
if ($spelernummer=="stop") {
    die("gestopt");
}
if ($spelernummer<1) {
    die("gestopt");
}
if ($spelernummer>100) {
    die("gestopt");
}
    if ($spelernummer==$programma_nummer) {
        $aantalx_raden++;
        echo "goed\n";
        echo "keren: $aantalx_raden";
        die();
    }
    elseif ($spelernummer>$programma_nummer) {
        $aantalx_raden++;
        echo "te hoog";
        getal_raden();
        die();
    }
    elseif ($spelernummer<$programma_nummer) {
        $aantalx_raden++;
        echo "te laag";
        getal_raden();
        die();               
    }
}

?>