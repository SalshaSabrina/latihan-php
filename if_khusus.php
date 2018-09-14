<?php
$tahun = date ("Y");
$kabisat = ($tahun%4 == 0) ? "kabisat" : "bukan kabisat";
echo "Tahun <b>$tahun</b> $kabisat";
?>