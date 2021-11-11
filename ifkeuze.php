<?php 
#variabelen aangemaakt
$naam= readline("naam:");
$leeftijd= readline("leeftijd:");
$wetleeftijd= 18;
#hier word de variabele #wetleeftijd gebruikt en er word dus 18 laten zien .
echo "De wettelijke leeftijd om alcohol te nuttigen is $wetleeftijd, via dit programma word uw leeftijd gecontroleerd\n.";
#hier word de naam van de gebruiker getoont via een variabele $naam
echo "Uw naam is $naam\n";
echo "Uw leeftijd is $leeftijd\n";
#hier word de leeftijd van de gebruiker getoont via een variabele #leeftijd

#met dit if statement  word er gecontroleerd of de leeftijd van de gebruiiker aan de wettelijke eis voldoet 
#dit word gedaan  door $leeftijd van de gebruiker te vergelijken met $wetleeftijd  het teken > staat voor kleiner dan.
# in de basis word dus gezegt: als de gebruiker ingevulde leeftijd groter is dan de wettelijke leeftijd mag de gebruiker alcohol nuttigen
if ( $leeftijd >$wetleeftijd) {
    echo "Leeftijd voldoet aan de wettelijke eis, u mag  alcohol nuttigen.\n";
    }

#met dit if statement  word er gecontroleerd of de leeftijd van de gebruiiker aan de wettelijke eis voldoet 
#dit word gedaan  door $leeftijd van de gebruiker te vergelijken met $wetleeftijd  het teken < staat voor groter dan.
# in de basis word dus gezegt: als de gebruiker ingevulde leeftijd kleiner  is dan de wettelijke leeftijd mag de gebruiker geen alcohol nuttigen
if ( $leeftijd <$wetleeftijd) {
    echo "Leeftijd voldoet niet aan de wettelijke eis, u mag geen  alcohol nuttigen.\n";
    }
#met dit if statement  word er gecontroleerd of de leeftijd van de gebruiiker gelijk is  aan de wettelijke eis leeftijd.
#dit word gedaan  door $leeftijd van de gebruiker te vergelijken met $wetleeftijd  het teken == staat voor gelijk aan.
# in de basis word dus gezegt: als de gebruiker ingevulde leeftijd gelijk is aan de wettelijke leeftijd mag de gebruiker alcohol nuttigen.
if ( $leeftijd ==$wetleeftijd) {
 echo "Leeftijd is gelijk  aan de wettelijke eis, u mag  alcohol nuttigen.\n";
}
?>