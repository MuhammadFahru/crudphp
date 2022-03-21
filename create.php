<?php

    include 'config/connection.php';

    // Jika ada request POST yang masuk
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
        $nim            = @$_POST['nim'];
        $nama           = @$_POST['nama'];
        $gender         = @$_POST['gender'];
        $tanggal_lahir  = @$_POST['tanggal_lahir'];

        // Jika nim kosong maka hentikan program dan keluarkan perintah (karena kolom nim di database di set NOT NULL artinya tidah boleh kosong)
        if (empty($nim)) {
            die("Masukan NIM");
        }
        // Jika nama kosong maka hentikan program dan keluarkan perintah (karena kolom nama di database di set NOT NULL artinya tidah boleh kosong)
        else if (empty($nama)) {
            die("Masukan Nama");
        }

        // Untuk membuat SQL string untuk memasukan data ke tabel mahasiswa
        $sql = "INSERT INTO mahasiswa VALUES (0, '$nim', '$nama', '$gender', '$tanggal_lahir')";

        // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
        $mysqli->query($sql) or die($mysqli->error);

        // Digunakan untuk mengarahkan (redirect) halaman ke index.php
        header('location: index.php');
    }

    include 'views/v_form.php';

?>