
 <?php
//code onderzoeken want ik begrijp het nog niet.
 $tafel=readline("Welke tafel wil je zien? ");
 $begin=1;
 $eind=10;
 $teller=$begin;$teller<=$eind;$teller++;
 echo "Tafel van $tafel:\n";

 for($teller=$begin;$teller<=$eind;$teller++); {
 $product=$teller*$tafel;
 echo "$teller."keer".$tafel." = $product."\n";
 }
}

 ?>
