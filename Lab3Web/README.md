<?php
$host = "localhost";// Variabel ini menyimpan nama host database.
$user = "root";// Variabel ini menyimpan nama pengguna untuk mengakses database.
$pass = "";// Variabel ini menyimpan kata sandi untuk pengguna database.
$db = "latihan1";// Variabel ini menyimpan nama database yang akan digunakan.
$conn = mysqli_connect($host, $user, $pass, $db);//untuk membuat koneksi ke database MySQL. Ini menerima empat parameter: nama host, nama pengguna, kata sandi, dan nama database. Hasil koneksi akan disimpan dalam variabel $conn.
if ($conn == false)memeriksa apakah koneksi berhasil atau gagal. Jika koneksi gagal, maka akan ditampilkan pesan "Koneksi ke server gagal."
{
echo "Koneksi ke server gagal.";
die();
} # else echo "Koneksi berhasil";
?>
----------------------------------------------------------------------------------------------------------------
<?php
include("koneksi.php");//mengimpor file koneksi.php, yang berisi skrip untuk membuat koneksi ke database.
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';//menyiapkan pernyataan SQL untuk memilih semua data dari tabel data_barang.
$result = mysqli_query($conn, $sql);//menjalankan pernyataan SQL menggunakan fungsi mysqli_query() dan menyimpan hasilnya dalam variabel $result.
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Data Barang</title>
</head>
<body>
<div class="container">
<h1>Data Barang</h1>
<p><a href="tambah.php">Tambah Data</a></p>
<div class="main">
<table>
<tr>
<th>Gambar</th>
<th>Nama Barang</th>
<th>Katagori</th>
<th>Harga Jual</th>
<th>Harga Beli</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
<?php if($result): ?>
<?php while($row = mysqli_fetch_array($result)): ?>//loop PHP yang digunakan untuk mengambil setiap baris data dari hasil query dan menampilkannya dalam tabel.
<tr>
<td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
$row['nama'];?>"></td>
<td><?= $row['nama'];?></td>
<td><?= $row['kategori'];?></td>
<td><?= $row['harga_beli'];?></td>
<td><?= $row['harga_jual'];?></td>
<td><?= $row['stok'];?></td>
<td><a href="ubah.php">Ubah</a> <a href="hapus.php">Hapus</a></td>// bagian yang menyediakan tautan untuk mengubah dan menghapus data. Saat ini, tautan ini hanya mengarah ke halaman ubah.php dan hapus.php. 
</tr>
<?php endwhile; else: ?>
<tr>
<td colspan="7">Belum ada data</td>
</tr>
<?php endif; ?>
</table>
</div>
</div>
</body>
</html>
---------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Tambah Barang</title>
</head>
<body>
<div class="container">
<h1>Tambah Barang</h1>
<div class="main">

<form method="post" action="tambah.php" enctype="multipart/form-
data">

<div class="input">
<label>Nama Barang</label>
<input type="text" name="nama" />
</div>
<div class="input">
<label>Kategori</label>
<select name="kategori">
<option value="Komputer">Komputer</option>
<option value="Elektronik">Elektronik</option>
<option value="Hand Phone">Hand Phone</option>
</select>
</div>
<div class="input">
<label>Harga Jual</label>
<input type="text" name="harga_jual" />
</div>
<div class="input">
<label>Harga Beli</label>
<input type="text" name="harga_beli" />
</div>
<div class="input">
<label>Stok</label>
<input type="text" name="stok" />
</div>
<div class="input">
<label>File Gambar</label>
<input type="file" name="file_gambar" />
</div>
<div class="submit">
<input type="submit" name="submit" value="Simpan" />
</div>
</form>
</div>
</div>
</body>
</html>
---------------------------------------------------------------------------------------------------