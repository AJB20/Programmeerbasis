<?php
$random = rand(1,1);
$raad= readline("raad het getal, voer getal in: \n");


echo "$raad \n";

  if ($raad ==$random) {
    echo "juist\n";   
} elseif ($raad >$random) {
    echo "getal te hoog probeer opnieuw\n";
    readline("raad het getal, voer getal in: \n");
} else {
    echo "getal te laag\n";
    readline("raad het getal, voer getal in: \n");
}