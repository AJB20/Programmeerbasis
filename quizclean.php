<?php 


echo "Welkom,\n\n";
echo "Regels:\n Getal onder de 1 NIET toegestaan.\n getal boven de 100 NIET toegestaan.\n wilt u stoppen? typ: s of stop.\n\n";
echo "worden de regels van dit programma overtreden stopt het programma!\n\n";
$pnum= rand(1,100);
echo $pnum;
$ar =0;
function gr() {
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
#
    if ($snum==$pnum) {
        $ar++;
        echo "goed\n\n";
        echo "goed geraden! keren: $ar";        
    }
    
    elseif ($snum>$pnum) {
        echo("TE HOOG\n\n");
        gr($pnum,$ar++);
    }

    
    elseif ($snum<$pnum) {
        echo("TE LAAG\n\n ");
        gr($pnum,$ar++);     
    }  
}

gr();
?>