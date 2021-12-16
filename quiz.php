<?php #begin php
#gemaakt door: arcticjelle (ikbenjelle.nl)
#gebruiker krijg onderstaande zinnen te zien
#legenda afkortingen:
#snum = spelernummer
#ar = aantal keer raden
#pnum= programma nummer
#gr=functie getal raden 
echo "Welkom,\n\n";
echo "Regels:\n helaas zijn getallen onder de 1 niet toegestaan, dan stopt het programma.\n helaas zijn getallen boven de 100 niet toegestaan, dan stopt het programma\n  \n  wilt u het programma stoppen? typ: s of stop.\n\n";
echo "als u niet aan de hierboven regels houd stopt het programma.\n\n";
$pnum= rand(1,100);
echo $pnum;
$ar =0;
#functie genaamd gr 
#rand = random getal door programma gegenereeerd tussen de 1 en de 100
#snum = speler word gevraagd om een getal en met intval word gekeken of het wel een getal is.
#ar = hoe vaak user heeft geprobeert te raden.
function gr() {
global $pnum;
global $ar;
$snum= readline("\n\n\n\n typ hier uw getal, dat u denkt dat het programma heeft bedacht.: \n\n");
$snum= intval($snum);


#if snum = stop betekent dat als snum gelijk is aan het woord  stop dan stopt het programma.
if ($snum=="stop"&&$snum=="s") {
    die("Bedankt voor het gebruik van het programma!\n Programma is gestopt.");
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
        $ar++;
        echo "goed geraden! keren geprobeert: $ar.";        
    }
    #als snum groter is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    elseif ($snum>$pnum) {
        echo("te hoog getal");
        gr($pnum,$ar++);
    }
    #als snum lager is dan programma nummer is tel +1 pogingen er bij en laat te hoog zien geef user nog een kans en stop het programma
    
    elseif ($snum<$pnum) {
        echo("te laag getal ");
        gr($pnum,$ar++);  //hier word de functie getal raden aangeroepen en parameters pnum en ar          
    }  
}

gr(); //funtie word uitgevoert.

?>