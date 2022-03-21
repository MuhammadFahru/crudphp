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
        <h2>Form Input Data Mahasiswa Ilmu Komputer C1</h2>
    </center>
    <br>
    <div class="card">
        <br>
        <a href="http://localhost/kuliah/crudphp/" class="back">Kembali</a>
        <br><br><br>
        <form action="" method="POST">
            <div class="form-group">
                <b>NIM</b>
                <input type="text" name="nim" value="<?= @$mahasiswa['nim'] ?>">
            </div>
            <div class="form-group">
                <b>Nama</b>
                <input type="text" name="nama" value="<?= @$mahasiswa['nama'] ?>">
            </div>
            <div class="form-group">
                <b>Gender</b>
                <div class="radio">
                    <input type="radio" name="gender" id="male" class="male" value="Laki - Laki" <?= @$mahasiswa['gender'] == 'Laki - Laki' ? 'checked' : '' ?>>
                    <label for="male">Laki - Laki</label>
                    <input type="radio" name="gender" id="female" class="female" value="Perempuan" <?= @$mahasiswa['gender'] == 'Perempuan' ? 'checked' : '' ?>>
                    <label for="female">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <b>Tanggal Lahir</b>
                <input type="date" name="tanggal_lahir" value="<?= @$mahasiswa['tanggal_lahir'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="simpan">Simpan Data</button>
            </div>
        </form>
    </div>
</body>
</html>