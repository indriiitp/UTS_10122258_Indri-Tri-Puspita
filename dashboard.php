<a?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["login"])) {
    header("Location: ../main.php");
    exit;
}
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

        .custom-carousel-img {
            height: 400px;
            object-fit: cover;
        }

        .boxinti1 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .katalogdashboard {
            background-image: url(src/img/gambar3.jpg);
            height: 280px;
            background-size: cover;
            background-position: center;
            color: white;
        }
        a:{
            text-decoration: none;
        }

        /* Hover effect */
        .navbar .nav-item a:hover {
            color: red;
        }

        /* Active effect */
        .navbar .nav-item a:active {
            color: white;
        }
    </style>
</head>

<body>

    <?php include 'View/vHeaderAdmin.php'; ?>

    <div id="Carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/gambar1.jpg" class="d-block w-100 custom-carousel-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/img/gambar2.jpg" class="d-block w-100 custom-carousel-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src/img/gambar1.jpg" class="d-block w-100 custom-carousel-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="boxinti1">
        <div class="mx-5 px-5 mt-4">
            <div class="mt-4">
                <div class="mb-5">
                    <div class="row">
                        <div class="col">
                            <div class=" p-5 shadow katalogdashboard">
                                <h4 style="font-family: Trebuchet MS;"><b>COFFEE</b></h4>
                                <h3 style="font-family: Candara Light;">Sajian kopi terbaik dengan aroma dan rasa yang otentik, untuk menemani hari Anda.</h3><br><br>
                                <a href="lihatProduk.php" class="btn btn-warning">Lihat Daftar</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class=" p-5 shadow katalogdashboard">
                                <h4 style="font-family: Trebuchet MS;"><b>NON-COFFEE</b></h4>
                                <h3 style="font-family: Candara Light;">Minuman segar dan nikmat tanpa kafein, cocok untuk berbagai selera dan suasana.</h3><br><br>
                                <a href="lihatProduk.php" class="btn btn-warning">Lihat Daftar</a>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <div class=" p-5 shadow katalogdashboard">
                                <h4 style="font-family: Trebuchet MS;"><b>DESSERT</b></h4>
                                <h4 style="font-family: Candara Light;">Hidangan penutup manis yang menggoda, sempurna untuk menutup makan dengan kenikmatan.</h4>
                                <br><br>
                                <a href="lihatProduk.php" class="btn btn-warning">Lihat Daftar</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class=" p-5 shadow katalogdashboard">
                                <h4 style="font-family: Trebuchet MS;"><b>MAIN COURSE</b></h4>
                                <h4 style="font-family: Candara Light;">Hidangan utama yang lezat dan mengenyangkan, siap memuaskan rasa lapar Anda.</h4><br><br>
                                <a href="lihatProduk.php" class="btn btn-warning">Lihat Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'View/vFooter.php'; ?>


        <!-- Bootstrap JQuery & JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>