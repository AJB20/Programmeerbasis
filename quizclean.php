<?php 


echo "Welkom,\n\n";
echo "REGELS:\n\n getal onder de 1 niet toegestaan. \n\n getal boven de 100 niet toegestaan\n\n stoppen? typ: s of stop.\n\n\n\n";
$pnum= rand(1,100);
echo $pnum;
$ar =0;

function getal_raden() {
global $pnum;
global $ar;
$snum= readline("\n\n\n\n uw getal: \n\n");
$snum= intval($snum);


if ($snum=="stop"&&$snum=="s") {
    die("het programma stopt");
}
 

if ($snum<1) {
    die();
}

if ($snum>100) {
    die();
}

    if ($snum==$pnum) {
        
        echo "goed\n\n";
        echo "goed geraden! keren: $ar";        
    }
    
    elseif ($snum>$pnum) {
        echo("TE HOOG\n\n");
        getal_raden($pnum,$ar++);
    }
  
    
    elseif ($snum<$pnum) {
        echo("TE LAAG\n\n");
        getal_raden($pnum,$ar++);       
    }  
}

getal_raden();

?>