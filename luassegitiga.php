<?php
function luas_segitiga($alas,$tinggi){
    return ($alas*$tinggi)/2;
}
$a = 2;
$t = 3;
echo "luas segitiga adalah ($a x $t) / 2 = ";
echo luas_segitiga($a,$t);
?>