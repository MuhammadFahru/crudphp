<?php

    include 'config/connection.php';

    $sql = 'SELECT * FROM mahasiswa';

    // Searching

    // Untuk Mengambil data yang di serach
    $search = @$_GET['searchData'];

    // Jika variable $search tidak kosong (artinya user mengisi inputan search pada form) maka, tambahkan sintaks SQL untuk mencari data
    // sql untuk mencari data
    if (!empty($search)) {
        // Perhatikan tanda spasi sebelum WHERE karena variable sql sudah di inisialisasi di atas jadi query ini akan meneruskan query yang di atas
        $sql .= " WHERE
        nim LIKE '%$search%' OR
        nama LIKE '%$search%' OR
        gender LIKE '%$search%'";
    }

    $list = $mysqli->query($sql);

    include 'views/v_index.php';

?>