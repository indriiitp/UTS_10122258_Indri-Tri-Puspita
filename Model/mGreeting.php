<?php
date_default_timezone_set("Asia/Jakarta");
$hour = date("H");

if ($hour >= 5 && $hour < 12) {
    $greeting = " Selamat Pagi :)";
} elseif ($hour >= 12 && $hour < 18) {
    $greeting = " Selamat Siang :)";
} elseif ($hour >= 18 && $hour < 24) {
    $greeting = " Selamat Malam :)";
} else {
    $greeting = " Selamat Tidur :)";
}
?>