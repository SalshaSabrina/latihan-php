<?php
if(isset($_POST['Input'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = nl2br($_POST['alamat']);
    $jk = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $asal = $_POST['asalsekolah'];
    $ortu = $_POST['namaortu'];
    $nilai = $_POST['nilai'];
    echo "Nama : <b>$nama</b><br>";
    echo "Nis  : <b>$nis</b><br>";
    echo "Alamat : <b>$alamat</b><br>";
    echo "Jenis Kelamin : <b>$jk</b><br>";
    echo "Agama : <b>$agama</b><br>";
    echo "Asal Sekolah : <b>$asal</b><br>";
    echo "Nama Orang Tua : <b>$ortu</b><br>";
    echo "Mata Pelajaran yang disukai : ";
    if(isset($_POST[mapel1])){
        $pel = $_POST[mapel1];
        echo "~<b>$pel</b> ";
    }
    if(isset($_POST[mapel2])){
        $pel = $_POST[mapel2];
        echo "~<b>$pel</b> ";
    }
    if(isset($_POST[mapel3])){
        $pel = $_POST[mapel3];
        echo "~<b>$pel</b> ";
    }
    if(isset($_POST[mapel4])){
        $pel = $_POST[mapel4];
        echo "~<b>$pel</b> ";
    }
    if(isset($_POST[mapel5])){
        $pel = $_POST[mapel5];
        echo "~<b>$pel</b>";
    }
    
    echo "<br>Nilai ijazah SD : <b>$nilai</b><br>";
    echo "Selamat anda di terima";
}