<?php
$hari = 50000;
$makan = 25000;
$minum = 10000;

$jumlah = $hari - ($makan+$minum);
$bayar = $makan+$minum;
echo "uang hari : Rp. $hari <br>";
echo "makan : Rp. $makan <br>";
echo "minum : Rp. $minum <br>";
echo "jumlah harga yang harus di bayar : Rp. $bayar <br>";
echo "sisa uang anda :Rp. $jumlah <br>";
if($jumlah >= 10000){
    echo "anda termasuk orang <b>hemat</b>";
}
else{
    echo "anda termasuk orang boros";
}
