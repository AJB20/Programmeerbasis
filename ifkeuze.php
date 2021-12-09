<?php 
#variabelen aangemaakt
$wetleeftijd= 18; //variabele met de waarde 18.
#hier word de variabele #wetleeftijd gebruikt en er word dus 18 laten zien .
echo "De wettelijke leeftijd om alcohol te nuttigen is $wetleeftijd, via dit programma word uw leeftijd gecontroleerd\n.";
$naam= readline("naam:\n"); //variabele met een readline waar de gebruiker word gevraagt hij/zij/het naam te geven.
$leeftijd= readline("leeftijd:\n"); //variabele met een readline waar de gebruike word gevraagt hij/zij/het leeftijd te geven.
#hier word de gebruiker gegroet met zijn/haar/anders naam van de gebruiker via de variabele $naam
echo "hallo $naam\n";
echo "Uw leeftijd is $leeftijd controle word uit\n";
#hier word de leeftijd van de gebruiker getoont via de variabele $leeftijd en word gezegt dat de controle gestart is
#met de if statement  word er gecontroleerd of de leeftijd van de gebruiker aan de wettelijke eis voldoet 
#dit word gedaan  door $leeftijd van de gebruiker te vergelijken met $wetleeftijd  het teken > staat voor kleiner dan.
# er word dus in de basis  gezegt: als de  leeftijd groter of gelijk aan de wettelijke leeftijd is dan mag de gebruiker alcohol mag nuttigen.
if ( $leeftijd >= $wetleeftijd) {
    echo "uw Leeftijd voldoet aan de wettelijke eis, u mag  alcohol nuttigen.\n";
    }
#met dit if statement  word er gecontroleerd of de leeftijd van de gebruiiker aan de wettelijke eis voldoet 
#dit word gedaan  door $leeftijd van de gebruiker te vergelijken met $wetleeftijd  het teken < staat voor groter dan.
# in de basis word dus gezegt: als de gebruiker ingevulde leeftijd kleiner  is dan de wettelijke leeftijd mag de gebruiker geen alcohol nuttigen
if ( $leeftijd <$wetleeftijd) {
    echo "uw Leeftijd voldoet  niet aan de wettelijke eis, u mag geen  alcohol nuttigen.\n";
}
    die("Bedankt voor het gebruik van het programma. het programma stopt nu."); //het programma word gestopt
?>