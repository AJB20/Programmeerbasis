<?php
function func() {
    echo "+deze regel is in een func() uitgevoerd.\n";

}
echo "+deze regel is voor een for-lus uitgevoerd.\n";

for ($counter=1;$counter<=3;$counter++) {
    echo "=deze code is in de forlus uitgevoer\n";
    echo "maar voor de func() uitgevoerd";
    func();
    echo "=deze code is in de for lus uitgevoerd";
    echo " maar na func() uitgevoerd.\n";
    echo "- Deze code is na de for-lus uitgevoerd.\n";

}
?>