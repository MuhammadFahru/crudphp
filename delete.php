<?php 

    include 'config/connection.php';

    // untuk mengambil value dari GET parameter dengan key id
    $id = $_GET["id"];
    if (!empty($id)) {
        $sql = "DELETE FROM mahasiswa WHERE id = $id";
        if($mysqli->query($sql)) {
            // Digunakan untuk mengarahkan (redirect) halaman ke index.php
            header('location: index.php');
        } else {
            echo 'Gagal hapus';
        }
    }    
?>