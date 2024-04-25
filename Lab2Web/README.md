<?php
echo "Hello World"; // Menampilkan Tulisan dalam tanda petik dua
?>
--------------------------------------------------------------------------
<?php
$nim = "312010052";
$nama = 'Nur Khotimah';
echo "NIM : " . $nim . "<br>";// $nim untuk menampilkan nim dalam tanda petik dua
echo "Nama : $nama";// $nama untuk menampilkan nama dalam tanda petik dua
?>
------------------------------------------------------------------------------
<?php
echo 'Selamat Datang ' . $_GET['nama'];// $_GET digunakan untuk menampilkan nama di $nama dalam tanda petik dua
?>
------------------------------------------------------------------------------
<h2>Form Input</h2>
<form method="post">
<label>Nama: </label>// Menampilkan form inputan nama
<input type="text" name="nama">
<input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];//$_POST digunakan untuk menampilkan hasil inputan nama
?>
----------------------------------------------------------------------------
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);// Menghitung variabel gaji dikali variabel pajak
echo "Gaji sebelum pajak = Rp. $gaji <br>";// Menampilkan Gaji sebelum kena pajak
echo "Gaji yang dibawa pulang = Rp. $thp";// Menampilkan gaji setelah perhitungan pajak
?>
---------------------------------------------------------------------------
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
echo "Minggu";
} elseif ($nama_hari == "Monday") {// else if digunakan untuk menmpilkan pernyataan jika maka
echo "Senin";
} else {
echo "Selasa";
}
?>
--------------------------------------------------------------------------
<h2> Kondisi Switch</h2>
<?php
$nama_hari = date("l");
switch ($nama_hari) {// switch digunakan untuk melakukan perbandingan 
case "Sunday":// jika case sunday
echo "Minggu";// maka akan tampil minggu
break;
case "Monday":
echo "Senin";
break;
case "Tuesday":
echo "Selasa";
break;
default:
echo "Sabtu";
}
?>
------------------------------------------------------------------------------
<h2>Perulangan FOR</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) { //Menampilkan perulangna dari 1 sanmai perulangan 10
echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) { //Menampilkan perulangna dari 10 sampai perulangan 1
echo "Perulangan ke: " . $i . '<br />';
}
?>
-----------------------------------------------------------------------------
<h2>Perulangan while</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {a
echo "Perulangan ke: " . $i . '<br />';//Menampilkan perulangna dari 1 sanmai perulangan 10
$i++;
}
?>
------------------------------------------------------------------------------
<h2>Perulangan dowhile</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
echo "Perulangan ke: " . $i . '<br />';//Menampilkan perulangna dari 1 sanmai perulangan 10
$i++;
} while ($i<=10);
?>