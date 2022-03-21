<?php 

    include 'config/connection.php';

    // Digunakan untuk mengambil value dari GET parameter dengan key id
    $id = $_GET['id'];

    // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini
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

        // Digunakan untuk membuat SQL string untuk mengubah data pada tabel mahasiswa
        $sql = "UPDATE mahasiswa SET
        nim = '$nim',
        nama = '$nama',
        gender = '$gender', 
        tanggal_lahir = '$tanggal_lahir'
        WHERE id = $id";

        // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
        $mysqli->query($sql) or die($mysqli->error);

        // Digunakan untuk mengarahkan (redirect) halaman ke index.php
        header('location: index.php');
    }

    // Digunakan untuk memeriksa apakah parameter id ada pada url? Jika tidak ada maka arahkan halaman kembali ke index.php
    if(empty($id)) header('location : index.php');

    // Mengambil data dari tabel mahasiswa berdasarkan id sesuai dengan parameter get nya
    $sql    = "SELECT * FROM mahasiswa WHERE id = '$id' ";
    $query  = $mysqli->query($sql);

    // $query->fetch_array() tanpa looping artinya hanya mengambil hasil query baris pertama saja (1 data)
    $mahasiswa  = $query->fetch_array();

    // Digunakan untuk memeriksa apakah data mahasiswa dengan id tersebut ada pada tabel mahasiswa? Jika tidak ada maka arahkan halaman kembali ke index.php
    if(empty($mahasiswa))header('location : index.php');


    include 'views/v_form.php';

?>