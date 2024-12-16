<?php
include 'Model/mGreeting.php';
?>

<header>
        <div class="boxheader1">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <span><i class="fa-solid fa-circle-info textbirutua" style="margin-right: 5px"></i>
                        <m>Hai Admin ! <?php echo $greeting; ?></m>
                    </span>
                    <a href="Controller/cLogout.php" class="btn btn-outline-dark textbirutua">LogOut</a>
                </div>
            </nav>
        </div>

        <div class="boxheader2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="src/img/logo.png" width="100px">
                    <span class="h4" style="font-family: Sniglet">Keroffee</span>
                </a>

                <!-- Tombol toggle untuk navbar (responsive mode) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse daftarmenu" id="navbarSupportedContent">
                    <!-- Menambahkan ms-auto untuk menggeser menu ke kanan -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item my-2">
                            <a href="dashboard.php" style="text-decoration:none" class="text-nowrap adaftar"><i class="fa fa-home"></i> <b>Beranda</b></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="lihatProduk.php" style="text-decoration:none" class="text-nowrap adaftar"><i class="fa-solid fa-mug-hot"></i> <b>Lihat Produk</b></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="pegawai.php" style="text-decoration:none" class="text-nowrap"><i class="fa solid fa-users"></i> <b>Data Pegawai</b></a>
                        </li>
                        <li class="nav-item my-2">
                            <a href="produk.php" style="text-decoration:none" class="text-nowrap"><i class="fa-brands fa-docker"></i> <b>Kelola Produk</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>