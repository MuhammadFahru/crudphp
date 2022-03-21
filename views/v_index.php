<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Native</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <center>
        <h2>Daftar Mahasiswa Ilmu Komputer C1</h2>
    </center>
    <div class="layout">
        <!-- Tambahan Fitur Search -->
        <div class="search">
            <form method="GET" action="index.php">
                <input type="text" name="searchData" id="search" value="<?= @$search ?>" autocomplete="off" class="search_field">
                <button type="submit" class="search_data">Cari</button>
            </form>
            <!-- Link directory -->
            <a href="http://localhost/kuliah/crudphp/" class="refresh_data">Refresh</a>
        </div>
        <!-- Direct ke halaman create.php -->
        <a href="create.php" class="create_data">Tambah</a>
    </div>
    <table class="my_table">
        <tr>
            <th>Aksi</th>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php
            $i = 1;
            while ($data = @$list->fetch_array()) {
        ?>
            <tr align="center">
                <td>
                    <div class="flex">
                        <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?');">Delete</a>
                        <a href="update.php?id=<?= $data['id'] ?>">Edit</a>
                    </div>
                </td>
                <td><?= $i++ ?></td>
                <td><?= $data['nim'] ?></td>
                <td align="left"><?= $data['nama'] ?></td>
                <td><?= $data['gender'] ?></td>
                <td>
                    <?php
                        $date = date_create($data['tanggal_lahir']);
                        echo date_format($date, "d F Y");
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>