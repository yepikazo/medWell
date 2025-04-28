<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'rumah_sakit';

    $conn = mysqli_connect($host, $user, $pw, $db);
    if ($conn) {
        // echo "koneksi berhasil";
    }

    mysqli_select_db($conn, $db);
?>