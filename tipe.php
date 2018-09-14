<?php
$nim = "12343565736";
$nama = 'cacaaa';
$umur = 16;
$nilai = 82.25;
$status = true;
echo "NIM : ".$nim."<br>";
echo "NAMA : $nama<br>";
print "UMUR : ".$umur;
print "<br>";
printf ("nilai : %.3f<br>", $nilai);
if($status){
    echo "status : aktif";
}
else{
    echo "status :tidak aktif";
}