<?php 

$naam= readline("naam:");
$leeftijd= readline("leeftijd:");
$wetleeftijd= 18;

echo "De wettelijke leeftijd om alcohol te nuttigen is $wetleeftijd, via dit programma word uw leeftijd gecontroleerd\n.";
echo "Uw naam is $naam\n";
echo "Uw leeftijd is $leeftijd\n";


if ( $leeftijd >$wetleeftijd) {
    echo "Leeftijd voldoet aan de wettelijke eis, u mag  alcohol nuttigen.\n";
    }

if ( $leeftijd <$wetleeftijd) {
    echo "Leeftijd voldoet niet aan de wettelijke eis, u mag geen  alcohol nuttigen.\n";
    }
    
if ( $leeftijd ==$wetleeftijd) {
 echo "Leeftijd is gelijk  aan de wettelijke eis, u mag  alcohol nuttigen.\n";
}
