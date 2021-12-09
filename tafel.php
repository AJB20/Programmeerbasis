<?php
 $tafel=readline("Welke reken tafel wil je zien? "); //hier word de gebruiker met een readline gevraagt welke tafel hij wilt zien.
 $begin=1; //variabele met waarde 1
 $eind=10; //variabele met waarde 10
 echo "\n\nTafel van $tafel:\n"; //hier word aan de gebruiker laten zien welke tafel hij heeft gekozen
 for ($teller=$begin;$teller<=$eind;$teller++) { //in de forlus word een nieuwe variabele teller aangemaakt en met als waarde begin
    //daarna staat er als $teller kleiner of gelijk aan variabele $eind is tel bij de variabele $teller er +1 op.
 $product=$teller*$tafel; //nieuwe variabele met een keer som van variabele $teller en $tafel (getal wat de gebruiker heeft ingevoert)
 echo " $teller x $tafel = $product "; //hier word aan de gebruiker de uitkomst getoont van de x som.
 }

 ?>