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
            <li><a href="">Tentang</a></li>
            <li><a href="data.php">Kontak</a></li>
        </ul>
    </nav>
    <header>
        <p>Data Diri Pasien</p>
    </header>
    <form method="POST" action='proses.php'>
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Tiara Basori">
        </div>
        <div class="mb-3">
                <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <select id ="jkel" name="kelamin" class="form-select">
                        <!-- opsi selected optimasi lebih lanjut -->
                        <option value="jw" selected>pilih jenis kelamin</option> 
                        <option value="lk">Laki Laki</option>
                        <option value="pr">Perempuan</option>
                    </select>
            </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Golongan Darah</label>
            <input type="text" class="form-control" name="goldar" placeholder="ex: O">
        </div>
            <label class="form-label">Riwayat Alergi</label>
            <input type="text" class="form-control" name="ralergi" placeholder="ex: alergi kucing">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Riwayat Penyakit</label>
            <textarea class="form-control" name="rpenyakit" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kontak</label>
            <input type="text" class="form-control" name="kontak" placeholder="impostor">
        </div>
        <div class="mb-3">
            <label class="form-label">Hubungan Dengan Pasien</label>
            <input type="text" class="form-control" name="rpasien" placeholder="ayah kandung">
        </div>
        <div class="mb-3">
            <label class="form-label">No Hp</label>
            <input type="number" class="form-control" name="nohp" placeholder="085678910111">
        </div>
        <div class="mb-3">
            <label class="form-label">No Kamar</label>
            <input type="text" class="form-control" name="noKamar" placeholder="K001">
        </div>
        <?php
            if(isset($_GET['update'])){
        ?>
        <button type="submit" name="kirim" value="perbarui" class="btn btn-secondary mb-3" >perbarui</button>
        <?php
            } else {
        ?>
        <button type="submit" name="kirim" value="add" class="btn btn-secondary mb-3" >simpan</button>
        <?php
            }
        ?>
    </form>
    <a class="kembali" href="menu.php">kembali</a>
</body>
</html>