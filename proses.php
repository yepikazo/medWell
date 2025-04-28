<?php
    include 'koneksi.php';
    if(isset($_POST['kirim'])){
        if($_POST['kirim'] == 'add'){
            $nama = $_POST['nama'];
            $kelamin = $_POST['kelamin'];
            $tgl = date('y-m-d',strtotime($_POST['tgl']));
            $alamat = $_POST['alamat'];
            $goldar = $_POST['goldar'];
            $ralergi = $_POST['ralergi'];
            $rpenyakit = $_POST['rpenyakit'];
            $kontak = $_POST['kontak'];
            $rpasien = $_POST['rpasien'];
            $nohp = $_POST['nohp'];
            $idkamar = $_POST['noKamar'];
            $query = "INSERT tb_pasien VALUES(null,'$nama','$kelamin','$tgl','$alamat','$goldar','$ralergi','$rpenyakit','$kontak','$rpasien','$nohp','$idkamar')";
            $sql = mysqli_query($conn, $query);
            
            if($sql){

                header('location: data.php');
                // echo 'cek notip';
            } else{
                echo $query;
            }
            
        } else {
            echo 'perbarui data <a href="menu.php">menu</a>';
        }
    }

    if(isset($_GET['delete'])){
        $idPasien = $_GET['delete'];
        $query = "DELETE FROM tb_pasien WHERE id_pasien ='$idPasien';";
        $sql = mysqli_query($conn, $query);
        if($sql){
            header('location: data.php');
        } else{
            echo $query;
        }

        echo "yahaha kehapus data nya awokawokawokao";
    }


?>