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
        <p>Data Kontak Darurat</p>
    </header>
    <form action="POST" >
        <div class="mb-3">
            <label class="form-label">Nama Kontak</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tiara Basori">
        </div>
        <div class="mb-3">
            <label class="form-label">Hubungan Dengan Pasien</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tiara Basori">
        </div>
        <div class="mb-3">
            <label class="form-label">No Hp</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="085678910111">
        </div>
        <button type="submit" name="event" value="edit" class="btn btn-secondary mb-3" >simpan</button>
    </form>
    <a class="kembali" href="menu.php">kembali</a>
</body>
</html>