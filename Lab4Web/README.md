<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contoh Modularisasi</title>
<link href="style.css" rel="stylesheet" type="text/stylesheet"
media="screen" />
</head>
<body>
<div class="container">// digunakan untuk menempatkan konten utama halaman.
<header>//digunakan untuk judul halaman
<h1>Modularisasi Menggunakan Require</h1>
</header>
<nav>// digunakan untuk menampilkan navigasi.
<a href="home.php">Home</a>
<a href="about.php">Tentang</a>
<a href="kontak.php">Kontak</a>
</nav>
-------------------------------------------------------------------------------------
<footer>// untuk menampilkan kredit atau hak cipta dan informasi lainnya.
<p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
</footer>
</div>
</body>
</html>
---------------------------------------------------------------------------------------
<?php require('header.php'); ?>// tag PHP yang digunakan untuk memasukkan file header.php ke dalam halaman        saat halaman dimuat.
<div class="content">// adalah bagian konten dari halaman
<h2>Ini Halaman Home</h2>
<p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require('footer.php'); ?>// tag PHP yang digunakan untuk memasukkan file footer.php ke dalam halaman saat halaman dimuat
----------------------------------------------------------------------------------------
<?php require('header.php'); ?>//untuk memasukkan isi dari file header.php ke dalam halaman saat halaman dimuat. 
<div class="content">// adalah bagian konten dari halaman
<h2>Ini Halaman About</h2>
<p>Ini adalah bagian content dari halaman.</p>
</div>
<?php require('footer.php'); ?>// tag PHP yang digunakan untuk memasukkan file footer.php ke dalam halaman saat halaman dimuat
----------------------------------------------------------------------------------------
<?php
$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : 'home'; // Memeriksa apakah 'mod' telah didefinisikan dalam permintaan. Jika tidak, maka mod akan diatur ke 'home' secara default.
switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about.php"); // File 'about.php' harus disertakan dengan ekstensi file '.php'.
        break;
    default: // Gunakan default untuk menangani semua kasus yang tidak sesuai dengan 'home' atau 'about'.
        require("home.php");
        break;
}
?>