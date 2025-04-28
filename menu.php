<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="menu.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="assets/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="form.php">Tentang</a></li>
            <li><a href="data.php">Kontak</a></li>
        </ul>
    </nav>
    </nav>
    <main>
        <div class="content">
            <a href="datdir.php">Data Diri Pasien</a>
        </div>
        <div class="content">
            <a href="infok.php">Informasi Kesehatan</a>
        </div>
        <div class="content">
            <a href="kontak.php">Informasi Kontak Darurat</a>
        </div>
        <div class="content">
            <a href="sakit.php">Kategori Sakit</a>
        </div>
    </main>
</body>
</html>