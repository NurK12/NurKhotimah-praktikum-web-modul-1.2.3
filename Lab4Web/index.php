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
