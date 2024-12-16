<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["login"])) {
    header("Location: ../main.php");
    exit;
}

//Tampil Produk
include_once("Model/mProduk.php");
$produk = new Produk();

//Ambil Data Produk Dari Database
$produkList = $produk->tampilProduk();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 50px;
            padding-left: 50px;
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

        .judulKonten {
            font-family: Gecko;
            font-size: 25px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .custom-title {
            font-family: Sniglet;
            font-weight: bold;
        }

        .custom-card {
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: white;
        }

        .custom-card:hover {
            box-shadow: 0 4px 15px aqua;
            cursor: pointer;
        }

        .card-body .btn {
            font-weight: bold;
            padding: 8px 16px;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

    </style>
</head>

<body>

    <?php include 'View/vHeaderAdmin.php'; ?>
    <br><br>

    <div class="boxInti1">
        <div class="boxJudul textbirutua">
            <div class="row">
                <div class="col" style="font-size:20px">
                    <h4><b>Katalog Menu </b></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="boxIsi textbirutua">
        <?php
        // Mengelompokkan data berdasarkan kategori
        $dataKategori = [];
        foreach ($produkList as $produk) {
            $dataKategori[$produk['nama_kategori']][] = $produk;
        }
        ?>
        <div class="container my-5">
            <?php foreach ($dataKategori as $kategori => $produkKategori): ?>
                <!-- Nama Kategori -->
                <div class="judulKonten">
                    <h3 class="judulKategori"><?= htmlspecialchars($kategori) ?></h3>
                </div>
                <!-- Wrapper untuk Card -->
                <div class="row">
                    <?php foreach ($produkKategori as $produk): ?>
                        <div class="col-md-3">
                            <div class="card custom-card mb-4" style="width: 18rem;">
                                <img src="src/img/<?= htmlspecialchars($produk['gambar']) ?>" class="card-img-top" alt="<?= htmlspecialchars($produk['nama']) ?>">
                                <div class="card-body">
                                    <h4 class="card-title custom-title" style="font-size: 23px;"><?= htmlspecialchars($produk['nama']) ?></h4><br>
                                    <p class="card-text" style="font-size: 16px; color: black;"><?= htmlspecialchars($produk['deskripsi']) ?></p><br>
                                    <div class="d-flex justify-content-end mt-auto">
                                        <a href="#" class="btn btn-warning">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'View/vFooter.php'; ?>


    <!-- Bootstrap JQuery & JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>