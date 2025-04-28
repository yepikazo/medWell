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
            <img src="" alt="logo">
        </div>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="">Tentang</a></li>
            <li><a href="">Kontak</a></li>
        </ul>
    </nav>
    <header>
        <p>Data Informasi Kesehatan</p>
    </header>
    <form action="POST" >
        <div class="mb-3">
            <label class="form-label">Golongan Darah</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tiara Basori">
        </div>
            <label class="form-label">Riwayat Alergi</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: alergi kucing">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Riwayat Penyakit</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="event" value="edit" class="btn btn-secondary mb-3" >simpan</button>
    </form>
    <a class="kembali" href="menu.php">kembali</a>
</body>
</html>