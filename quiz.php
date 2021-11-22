<?php

$aantalx_raden = 0;
$goed_geraden = 0;



echo "elkom, in dit programma is het de bedoeling dat je het getal raad wat het programma heeft bedacht.\n";
echo "Het getal mag niet onder de 1 worden ingevoerd dan stopt het programma.\n";
echo "Het getal mag ook niet boven de 100 zijn dan stopt het programma.\n";
echo "Wil je het programma zelf stoppen typ dan: stop.\n";
echo "Succes!\n"; 

function getal_raden() {
global $aantalx_raden, $goed_geraden;

$aantalx_raden ++;
$programma_nummer= rand(1,2);
echo "typ hier je getal";
$spelernummer= readline(">>");
$spelernummer= intval($spelernummer);

if ($spelernummer=="stop") {
    exit("gestopt");
}
if ($spelernummer<0) {
    echo "lager dan nul programma stopt";
    exit();
}
if ($spelernummer>100) {
    echo "hoger dan 100 programma stopt.";
    exit();
}
    if ($spelernummer==$programma_nummer) {
        $aantalx_raden;
        echo "goed geraden!\n";
        echo "aantal keer geprobeert: $aantalx_raden";
        exit();
    }
    elseif ($spelernummer>$programma_nummer) {
        $aantalx_raden++;
        getal_raden();
        exit();
    }
    elseif ($spelernummer<$programma_nummer) {
        $aantalx_raden++;
        getal_raden();
        exit();
        
       
    }
}


getal_raden();




?>
