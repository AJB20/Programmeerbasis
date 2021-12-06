<?php #begin php
#gemaakt door: Jb200126 (ikbenjelle.nl)



#gebruiker krijg onderstaande zinnen te zien
echo "Welkom, raad het getal.\n";
echo "is uw getal onder de 1 dan stopt het programma\n is uw getal boven de 100 dan stopt het programma\n stoppen? type: stop.\n";


#functie genaamd getal_raden 
#rand = random getal door programma gegenereeerd tussen de 1 en de 100
#spelernummer = speler word gevraagd om een getal en met intval word gekeken of het wel een getal is.
#aantalx_raden = hoe vaak user heeft geprobeert te raden.
function getal_raden() {
$programma_nummer= rand(1,100);
$spelernummer= readline("uw getal: \n");
$spelernummer= intval($spelernummer);
$aantalx_raden = 0;
#if spelernummer = stop betekent dat als spelernummer gelijk is aan stop dan stopt het programma.
if ($spelernummer=="stop") {
    die("gestopt");
}
#ingevoerd getal kleinder dan 1 stop het programma
if ($spelernummer<1) {
    die("gestopt");
}
#ingevoerd getal boven de 100 stop het programma
if ($spelernummer>100) {
    die("gestopt");
}
#als spelernummmer gelijk aan programma nummer is laat dan onderstaande zien en stop het programma
    if ($spelernummer==$programma_nummer) {
        $aantalx_raden++;
        echo "goed\n";
        echo "keren: $aantalx_raden";
        die();
    }
    #als spelernummer groter is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    elseif ($spelernummer>$programma_nummer) {
        $aantalx_raden++;
        echo "te hoog";
        getal_raden();
        die();
    }
    #als spelernummer lager is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    elseif ($spelernummer<$programma_nummer) {
        $aantalx_raden++;
        echo "te laag";
        getal_raden();
        die();               
    }
}

getal_raden();

?>