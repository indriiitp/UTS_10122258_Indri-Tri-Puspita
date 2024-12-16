<?php
include 'Model/mGreeting.php';
?>

<header>
        <div class="boxheader1">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <span><i class="fa-solid fa-circle-info textbirutua" style="margin-right: 5px"></i>
                        <m><?php echo $greeting; ?></m>
                    </span>
                    <a href="#" class="btn btn-outline-dark textbirutua" data-bs-toggle="modal" data-bs-target="#auth">Login Admin</a>
                    <?php include 'View/vLogin.php'; ?>
                </div>
            </nav>
        </div>

        <div class="boxheader2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="src/img/logo.png" width="100px">
                    <span class="h4" style="font-family: Gecko">Keroffee</span>
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
                            <a href="katalog.php" style="text-decoration:none" class="text-nowrap"><i class="fa fa-ticket-alt"></i> <b>Daftar Menu</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>