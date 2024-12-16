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

        a {
            text-decoration: none;
        }

        .navbar .nav-item a:hover {
            color: red;
        }

        .navbar .nav-item a:active {
            color: white;
        }

        .table-hover {
            border-spacing: 10px; /* Menambahkan jarak antar kolom dan baris */
        }

        .table-hover td,
        .table-hover th {
            padding: 10px; /* Memberikan padding agar konten tidak terlalu dekat dengan batas */
        }

        .table-hover thead th {
            text-align: center;
            padding: 10px;
            background-color: #f5f5f5;
        }

        .table-hover tbody td {
            text-align: center;
            padding: 10px;
        }

        .table-hover tbody td img {
            display: inline-block;
            max-width: 80px;
            height: auto;
        }

        .aksi-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px; /* Mengatur jarak antar tombol */
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
            <div class="row">
                <div class="col" style="font-size:20px">
                    <h4><b>Tabel Kelola Produk</b></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="boxIsi textbirutua">
        <div class="d-flex justify-content-end mt-3">
            <a href="tambahProduk.php" class="btn btn-warning">+ Tambah Data Produk</a>
        </div>
        <table class="table table-striped table-hover tabell textbirutua">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = $produk->tampilProduk();
                foreach ($data as $dProduk) {
                ?>
                    <tr>
                        <td><?php echo $dProduk["id_produk"]; ?></td>
                        <td><?php echo $dProduk["nama"]; ?></td>
                        <td><?php echo $dProduk["nama_kategori"]; ?></td>
                        <td><?php echo $dProduk["deskripsi"]; ?></td>
                        <td><?php echo $dProduk["harga"]; ?></td>
                        <td><img src="src/img/<?php echo $dProduk['gambar']; ?>" alt="Gambar Produk"></td>
                        <td>
                            <div class="aksi-container">
                                <a href="ubahProduk.php?id=<?php echo $dProduk["id_produk"]; ?>">
                                    <button type="button" class="btn btn-success">Edit</button>
                                </a>
                                <a href="Controller/cUpdateProduk.php?id=<?php echo $dProduk["id_produk"]; ?>&aksi=hapus">
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><br><br>

    <?php include 'View/vFooter.php'; ?>

    <!-- Bootstrap JQuery & JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
