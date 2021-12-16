<?php #begin php
#gemaakt door: arcticjelle (ikbenjelle.nl)
#gebruiker krijg onderstaande zinnen te zien
echo "Welkom, raad het getal.\n\n";
echo "is uw getal onder de 1 dan stopt het programma\n is uw getal boven de 100 dan stopt het programma\n\n stoppen? type: stop.\n";
$programma_nummer= rand(1,100);
echo $programma_nummer;
#functie genaamd getal_raden 
#rand = random getal door programma gegenereeerd tussen de 1 en de 100
#spelernummer = speler word gevraagd om een getal en met intval word gekeken of het wel een getal is.
#aantalx_raden = hoe vaak user heeft geprobeert te raden.
function getal_raden() {
global $programma_nummer;
$spelernummer= readline("uw getal: \n\n");
$aantalx_raden =0;
$aantalx_raden++;
$spelernummer= intval($spelernummer);


#if spelernummer = stop betekent dat als spelernummer gelijk is aan het woord  stop dan stopt het programma.
if ($spelernummer=="stop") {
    die("gestopt");
}
 
#ingevoerd getal kleiner dan 1 stop het programma
if ($spelernummer<1) {
    die("gestopt getal  mag niet lager zijn dan 1\n herstart het programma en probeer opnieuw");
}
#ingevoerd getal boven de 100 stop het programma
if ($spelernummer>100) {
    die("gestopt getal mag niet hoger zijn dan 100\n herstart het programma en probeer opnieuw");
}
#als spelernummmer gelijk aan programma nummer is laat dan onderstaande zien en stop het programma
    if ($spelernummer==$programma_nummer) {
        $aantalx_raden++;
        
        echo "goed\n\n";
        echo "goed geraden! keren: $aantalx_raden";
        
    }
    

    #als spelernummer groter is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    elseif ($spelernummer>$programma_nummer) {
        echo("TE HOOG\n\n");
        $aantalx_raden++;
        getal_raden($programma_nummer);
      
    }
    #als spelernummer lager is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    
    elseif ($spelernummer<$programma_nummer) {
        echo("TE LAAG :\n\n");
        getal_raden($programma_nummer);
            
            
    }  
}

getal_raden(); //funtie word uitgevoert.

?>