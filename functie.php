<?php
function func() { //functie genaamt func.
    echo "+deze regel is in een func() uitgevoerd.\n"; //De tekst word in een functie uitgevoert en word getoont  op een nieuwe lijn.

}
echo "+deze regel is voor een for-lus uitgevoerd.\n"; //De tekst word voor een for-lus uitgevoert en word getoont op een nieuwe lijn.

for ($counter=1;$counter<=3;$counter++) { //for lus  variabele counter heeft de waarde 1 en als de variabele kleiner of gelijk aan 3 is tel er 1 bij op. 
    echo "=deze code is in de forlus uitgevoer\n"; //tekst dat in een forlus word getoont
    echo "maar voor de func() uitgevoerd"; //tekst dat voor een functie word uitgevoert
    func(); //Hier word de functie uitgevoert.
    echo "=deze code is in de for lus uitgevoerd"; //code dat word uitgevoert in een for lus maar na de func(); wordt uitgevoert
    echo " maar na func() uitgevoerd.\n"; //uitgevoert na de functie wat logisch is aangezien de functie uitgevoert is voor deze lijnen code
    echo "- Deze code is na de for-lus uitgevoerd.\n"; //uitgevoert na de functie wat logisch is aangezien de functie uitgevoert is voor deze lijnen code

}
?>