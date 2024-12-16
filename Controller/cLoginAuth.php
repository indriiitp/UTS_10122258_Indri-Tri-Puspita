<?php
include_once("../Model/mUser.php");

$user = new User();

//Memeriksa apakah ada aksi pada form -> Trigger tombol Login
if (isset($_POST["btnLogin"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        //Lakukan proses autentifikasi
        $result = $user->getUsername($username);
        if (mysqli_num_rows($result) === 1){
            $data = mysqli_fetch_assoc($result);

            //Cek valid password
            if($password === $data["password"]){

                // Set session login
                session_start();
                $_SESSION["login"] = true;

                echo '<script type = "text/javascript">';
                echo 'alert("Login Berhasil ! ");';
                echo 'window.location.href="../dashboard.php";';
                echo '</script>';
                exit();
            } else {
                echo '<script type = "text/javascript">';
                echo 'alert("Username / Password Salah ! ");';
                echo 'window.location.href="../main.php";';
                echo '</script>';
            }
        }
        else {
            echo '<script type = "text/javascript">';
            echo 'alert("Data User Tidak Ditemukan ! ");';
            echo 'window.location.href="../main.php";';
            echo '</script>';
        }
    }
    catch (mysqli_sql_exception $ex) {
        echo '<script type = "text/javascript">';
        echo 'alert("Terjadi Error Pada Query Database :)");';
        echo 'window.location.href="../main.php";';
        echo '</script>';
    }
}