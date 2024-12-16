<?php
    if (isset($_GET["status"])) {
        $status = $_GET["status"];

        if ($status == "denied") {
            echo '<script type="text/javascript">';
            echo 'alert("Akses Anda Ditolak, Silahkan Login Dahulu !");';
            echo 'window.location.href = "main.php";';
            echo '</script>';
        }
    }
    ?>