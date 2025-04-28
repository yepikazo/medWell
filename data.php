<?php 
    include 'koneksi.php';

    $query = 'SELECT * FROM tb_pasien;';
    $sql = mysqli_query($conn,$query);

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
    <header>
        <p>tabel data pasien</p>
    </header>
    <main>
        <div class="tdata">
            <a href="form.php">tambahkan data</a>
            

            <table class="table">
                <thead>
                    <tr>
                        <th>nama Pasien</th>
                        <th>jenis Kelamin</th>
                        <th>tanggal lahir</th>
                        <th>alamat</th>
                        <th>golongan darah</th>
                        <th>riwayat alergi</th>
                        <th>riwayat penyakit</th>
                        <th>nama kontak</th>
                        <th>hubungan dengan pasien</th>
                        <th>no hp</th>
                        <th>id kamar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($result = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        
                        <th><?php echo $result['namaPasien'] ?></th>
                        <th><?php echo $result['jenisKelamin'] ?></th>
                        <th><?php echo $result['tglLahir'] ?></th>
                        <th><?php echo $result['alamat'] ?></th>
                        <th><?php echo $result['golDar'] ?></th>
                        <th><?php echo $result['rAlergi'] ?></th>
                        <th><?php echo $result['rPenyakit'] ?></th>
                        <th><?php echo $result['nKontak'] ?></th>
                        <th><?php echo $result['rPasien'] ?></th>
                        <th><?php echo $result['nohp'] ?></th>
                        <th><?php echo $result['id_kamar'] ?></th>
                        <th>
                            <a href="form.php?update=1">perbarui</a>
                            <a href="proses.php?delete=<?php echo $result['id_pasien']?>">hapus</a>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
</body>
</html>