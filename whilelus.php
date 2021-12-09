<?php
//veriabele teller heeft de waarde 1 
 $teller=1; 
 //variabele maximum heeft de waarde 10.
 $maximum=10;
//hier word laten zien aan de gebruiker (laten zien op zijn of haar scherm) wat de waarde van $teller is voordat de while lus word uitgevoert
 echo "Teller is voor de while lus ".$teller."\n";
//hier word de while lus uitgevoert, hier staat zo lang  de variabele teller kleiner of gelijk aan variabele maximum is laat de gebruiker zien wat na de echo staat en welk nummer in de variabele staat.
// als de while lus is uitgevoert tel bij variabele teller 1 op.
//
 while ( $teller <= $maximum ) { //zo lang variabele $teller lager of gelijk aan variabele $maximum is voer de volgende code uit
     echo "Teller is nu ".$teller."\n"; //toon wat hier naast staat aan de gebruiker en het getal wat in de $teller variabele staat
 $teller++; //tel zo lang de variabele $teller gelijk of lager is dan variabele $maximum er +1 bij variabele $teller op
 }

 echo "Teller is na de while lus ".$teller."\n"; //laat de tekst hiernaast zien met het eind getal van variabele $teller na de while lus is uitgevoert.
?>