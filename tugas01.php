<html>
<head><title>Sistem Raport Sederhana</title></head>
<body>
    <form action="sistem.php" METHOD="POST" >
    <center><h2>Tugas Form</h2></center>
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" size="50"></td>
    </tr>
    <tr>
    <td>NIS</td>
    <td><input type="number" name="nis" size="50"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><textarea name="alamat" cols="50" rows="10"></textarea></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jeniskelamin" value="Laki-laki" checked>Laki-laki
    <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
    </tr>
    <tr>
    <td>Agama</td>
    <td><select name="agama">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Budha">Budha</option>
    <option value="Lainnya">Lainnya</option>
    </select></td>
    </tr>
    <tr>
    <td>Asal Sekolah</td>
    <td><input type="text" name="asalsekolah" size="50"></td>
    </tr>
    <tr>
    <td>Nama OrangTua/Wali</td>
    <td><input type="text" name="namaortu" size="50"></td>
    </tr>
    <tr>
    <td>Mata Pelajaran yang disukai</td>
    <td><input type="checkbox" name="mapel1" value="MTK">Matematika
    <input type="checkbox" name="mapel2" value="IPA">Ilmu Pengetahuan Alam
    <input type="checkbox" name="mapel3" value="IPS">Ilmu Pengetahuan Sosial
    <br><input type="checkbox" name="mapel4" value="PAI">Pendidikan Agama Islam
    <input type="checkbox" name="mapel5" value="BI">Bahasa Indonesia
    </td>
    </tr>
    <tr>
    <td>Total Nilai Ijazah</td>
    <td><input type="text" name="nilai" size="50"></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="email" name="email" size="50"></td>
    </tr>
    <tr>
    <td> </td>
    <td><input type="submit" name="Input" value="InputData"></td>
    </tr>
    </table>
</body>
</html>