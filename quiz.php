<?php
#variabelen
#random= willekeurig getal dat door programma word gegenereert
$random = rand(1,1);
#naam readline= user input 
$naam= readline("wat is je naam? \n");
#user muber = user input + user input van vorige antwoord word getoont.
$user_number= readline("$naam, welk nummer denk je dat het programma heeft bedacht? \n");
#juist = vriabele voor if word getoont bij goed antwoord
$juist= "goed gedaan! je hebt het juiste nummer geraden!";
#opnieuw= variabele voor als user niet juiste antwoord heeft gegeven word getoont en gevraagd om nieuw nummer.
$opnieuw= readline("fout laatste kans! \ntyp je nummer: ");


#uitvoering

$naam;
$random;
$user_number;


#if=als gebruiker juist getal heeft ingevoerd 
if ($random==$user_number) {
    echo $juist;
    #else als gebruiker verkeerd getal heeft ingevoerd dan.
}
else {$random<>$user_number;
    $opnieuw;
   
}






    





?>