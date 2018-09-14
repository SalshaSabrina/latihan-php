<?php
function luas_persegipanjang($panjang,$lebar){
    return $panjang*$lebar;
}
$p = 2;
$l = 3;
echo "luas persegi panjang adalah $p x $l = ";
echo luas_persegipanjang($p,$l);
?>