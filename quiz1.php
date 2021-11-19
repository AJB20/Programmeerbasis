<?php
#begin php script.
#in dit programma word er een quiz uitgevoerd: de quiz gaat als volgt:
#WIP (work in progress) het programma is nog niet klaar.
#lees quiz eisen.md voor meer informatie.

#er worden twee zinnen laten zien die een introductie van het programma geven
echo "Welkom bij getal raad quiz, kies een getal tussen de 1 en 100.\n";
echo "Let op: het programma stopt bij een getal onder de 1 en boven de 100!\n";
#varbiable $random genereert een random nummer tussen de 1 en 100
$random = rand(1,2);
#bij $vraag word er van de user gevraagt om een getal.
$vraag=readline("voer uw bedachte getal in: \n");

print "$raad \n";

#hier worden de functies stoppen_cijfer en stop_woord en goed_hoog_laag uitgevoerd
stoppen_cijfer()&&stop_woord(); 
goed_hoog_laag();


#bij functie stoppen_cijfer word de gebruiker gelimiteerd door een getal tussen de 1 en 100 te kiezen, anders stopt het programma.
function stoppen_cijfer() {
    global $vraag; #met global word de variabele die BUITEN de functie staat aangeroepen
    if ($vraag<1) { #als user input kleiner is dan 1

        exit(); #sluit het gehele programma af
    }
         elseif ($vraag>100) { #als user input groter is dan 100
             exit(); #sluit het gehele programma af
         }
     }
#bij de functie stop_woord kan de gebruiker het programma stoppen door stop in te typen.
     function stop_woord() {
        global $vraag; #met global word de variabele die BUITEN de functie staat aangeroepen
        if ($vraag=="stop") { #als $vraag dus input van de user gelijk is aan stop 
            exit(); #sluit het gehele programma af
        }
         }
        




#
         function goed_hoog_laag() { #naam functie verschillende if statements worden in 1 functie uitgevoerd
             global $vraag; #variabele BUITEN de functie word aangeroepen/gebruikt.
             global $random; #variabele BUITEN de functie word aangeroepen/gebruikt.
             if ($vraag==$random) { #als $vraag dus user input gelijk aan het gegenereede getal is
                 echo "goed gedaan juiste getal"; #laat dan de zin "goed gedaan juiste getal" zien
                 exit(); #sluit hierna het volledige programma af
             }
             
             
             elseif ($vraag>$random) { #als $vraag dus user input NIET gelijk is aan het gegenereerde getal maar hoger
                 readline("te hoog, uw nieuwe getal:"); #laat de gebruiker dan zien dat het getal te hoog is en laat-
             }#de user een eigen nieuw getal invoeren
             elseif ($vraag<$random) { #als $vraag dus user input NIET gelijk is aan het gegenereerde getal maar lager
                 readline("te laag getal, uw nieuwe getal:"); #laat de gebruiker dan zien dat het getal te laag is en laat-
                }#de user een eigen nieuw getal invoeren
                 exit(); #sluit hierna het volledige programma af
             }
         
         
            
         
         
 

        
#einde van php script 
?>