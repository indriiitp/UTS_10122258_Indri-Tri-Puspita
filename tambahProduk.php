<?php
include_once("Model/mProduk.php");

$produk = new Produk();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Gecko';
            src: url('src/fonts/Gecko Lunch.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Maven';
            src: url('src/fonts/MavenPro-VariableFont_wght.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Sniglet';
            src: url('src/fonts/Sniglet-Regular.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .boxheader1 {
            background-color: orange;
            color: black;
            padding-left: 50px;
            padding-right: 50px;
            font-family: Sniglet;
        }

        .boxheader2 {
            padding-left: 30px;
            padding-right: 30px;
            background-color: #F5F0CD;
        }

        .textbirutua {
            color: rgb(38, 38, 95);
        }

        .bgbirutua {
            color: rgb(38, 38, 95);
        }

        .daftarmenu {
            margin-left: 80px;
            margin-right: 30px;
        }

        i {
            margin-right: 3px;
            margin-left: 10px;
        }

        .boxinti1 {
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 30px;
            margin-right: 30px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        .boxJudul {
            background-color: yellow;
            font-family: Maven;
            font-size: 20px;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .boxIsi {
            background-color: white;
            font-family: Sniglet;
            font-size: 18px;
            padding-top: 30px;
            padding-bottom: 10px;
            padding-right: 100px;
            padding-left: 100px;
            border: 1px solid #ddd;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 15px;
        }

        a: {
            text-decoration: none;
        }

        .navbar .nav-item a:hover {
            color: red;
        }

        .navbar .nav-item a:active {
            color: white;
        }

        .row>.col {
            padding: 8px;
        }

        .table-hover tbody td:hover {
            background-color: yellow;
        }

        .tabell {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include 'View/vHeaderAdmin.php'; ?>
    <br><br>
    <div class="boxInti1">
        <div class="boxJudul textbirutua">
            <h4><b>Form Tambah Produk</b></h4>
        </div>
    </div>

    <div class="boxIsi textbirutua">
        <form method="POST" action="Controller/cUpdateProduk.php?aksi=tambah" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="idProduk" class="form-label">ID Produk</label>
                <input type="text" class="form-control" name="id_produk" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="id_kategori" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                    include_once("Model/mDatabase.php");
                    $db = new mDatabase();
                    $result = mysqli_query($db->get_koneksi(), "SELECT * FROM kategori");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['id_kategori']}'>{$row['nama_kategori']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3"
                    placeholder="Masukkan Deskripsi Produk"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Produk">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <br>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" name="btnSimpan" value="Simpan" class="btn btn-success"
                    style="margin-right: 5px">Simpan</button>
                <button type="reset" name="btnReset" value="Reset" class="btn btn-danger"
                    style="margin-left: 5px">Reset</button>
            </div>
        </form>
    </div>
    <br><br>

    <?php include 'View/vFooter.php'; ?>

    <!-- Bootstrap JQuery & JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>