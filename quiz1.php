<?php

echo "Welkom bij getal raad quiz, kies een getal tussen de 1 en 100.\n";
echo "Let op: het programma stopt bij een getal onder de 1 en boven de 100!\n";
$random = rand(1,1);
$vraag=readline("voer uw bedachte getal in: \n");


stoppen_cijfer()&&stop_woord(); 
goed_hoog_laag();



//-----------------------------------------------------------------------------------

//stoppen werkt?:
function stoppen_cijfer() {
    global $vraag;
    if ($vraag<1) {

        exit();
    }
         elseif ($vraag>100) {
             exit();
         }
     }

     function stop_woord() {
        global $vraag;
        global $stop;
        if ($vraag=="stop") {
            exit();
        }
         }
        




         function goed_hoog_laag() {
             global $vraag;
             global $random;         
             if ($vraag==$random) {
                 echo "geraden";
                return;
               global $opnieuw;
         } elseif ($vraag>$random) {
            echo "te hoog getal, probeer een lager getal\n";
            $opnieuw= readline("uw nieuwe getal (lager):");   
         } elseif ($vraag<$random) {
            echo "te laag getal, probeer een hoger getal\n";
            $opnieuwh= readline("uw nieuwe getal (lager):");  
            $opnieuwh; 
         }
            
         }
         
         
 
count()
        
        

?>