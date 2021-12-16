<?php #begin php
#gemaakt door: arcticjelle (ikbenjelle.nl)
#gebruiker krijg onderstaande zinnen te zien
#legenda afkortingen:
#snum = spelernummer
#ar = aantal keer raden
#pnum= programma nummer

echo "Welkom,\n\n";
echo "REGELS:\n\n getal onder de 1 niet toegestaan. \n\n getal boven de 100 niet toegestaan\n\n stoppen? typ: s of stop.\n\n\n\n";
$pnum= rand(1,100);
echo $pnum;
$ar =0;
#functie genaamd getal_raden 
#rand = random getal door programma gegenereeerd tussen de 1 en de 100
#snum = speler word gevraagd om een getal en met intval word gekeken of het wel een getal is.
#ar = hoe vaak user heeft geprobeert te raden.
function getal_raden() {
global $pnum;
global $ar;
$snum= readline("\n\n\n\n uw getal: \n\n");
$snum= intval($snum);


#if snum = stop betekent dat als snum gelijk is aan het woord  stop dan stopt het programma.
if ($snum=="stop"&&$snum=="s") {
    die("het programma stopt");
}
 
#ingevoerd getal kleiner dan 1 stop het programma
if ($snum<1) {
    die();
}
#ingevoerd getal boven de 100 stop het programma
if ($snum>100) {
    die();
}
#als spelernummmer gelijk aan programma nummer is laat dan onderstaande zien en stop het programma
    if ($snum==$pnum) {
        
        echo "goed\n\n";
        echo "goed geraden! keren: $ar";        
    }
    #als snum groter is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    elseif ($snum>$pnum) {
        echo("TE HOOG\n\n");
        getal_raden($pnum,$ar++);
    }
    #als snum lager is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    
    elseif ($snum<$pnum) {
        echo("TE LAAG\n\n");
        getal_raden($pnum,$ar++);           
    }  
}

getal_raden(); //funtie word uitgevoert.

?>