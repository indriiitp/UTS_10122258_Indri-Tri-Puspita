<?php
// Include model Pegawai
include_once("../Model/mPegawai.php");

// Buat instance dari model Pegawai
$pegawai = new Pegawai();
$aksi = $_GET["aksi"];

if(($_SERVER["REQUEST_METHOD"] == "POST") && ($aksi == "tambah")){
    $id_user = $_POST["id_user"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];
    $jabatan = $_POST["jabatan"];

    try {

        $data = $pegawai->tambahPegawai($id_user, $username, $password, $nama, $no_hp, $alamat, $jabatan);

        if ($data == true) {
            // Jika berhasil, tampilkan alert dan redirect ke halaman pegawai
            echo '<script type="text/javascript">';
            echo 'alert("Data Pegawai Berhasil Disimpan!");';
            echo 'window.location.href = "../pegawai.php";';
            echo '</script>';
        } else {
            // Jika gagal, tampilkan alert gagal
            echo '<script type="text/javascript">';
            echo 'alert("Data Pegawai Gagal Disimpan!");';
            echo 'window.location.href = "../tambahPegawai.php";';
            echo '</script>';
        }
    } catch (mysqli_sql_exception $ex) {
        echo '<script type="text/javascript">';
        echo 'alert("Data Pegawai Tidak Berhasil Di Simpan");';
        echo 'window.location.href = "../tambahPegawai.php";';
        echo '</script>';
    }
} else if (($_SERVER["REQUEST_METHOD"] == "GET") && ($aksi == "hapus")){

    $id_user = $_GET["id"];

    try{
        $data = $pegawai->hapusPegawai($id_user);
        if ($data == true){
            echo '<script type="text/javascript">';
            echo 'alert("Data Pegawai Dengan id : ' . $id_user . ' Berhasil Dihapus !");';
            echo 'window.location.href = "../pegawai.php";';
            echo '</script>';
        }
    } catch (mysqli_sql_exception $ex){
        echo '<script type="text/javascript">';
        echo 'alert("Data Pegawai Dengan id : ' . $id_user . ' Tidak Ditemukan !");';
        echo 'window.location.href = "../pegawai.php";';
        echo '</script>';
    }
} else if (($_SERVER["REQUEST_METHOD"] == "POST") && ($aksi == "edit")){
    $id_user = $_POST["id_user"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];
    $jabatan = $_POST["jabatan"];

    try {
        $data = $pegawai->updatePegawai($id_user, $username, $password, $nama, $no_hp, $alamat, $jabatan);
        if ($data == true){
            echo '<script type="text/javascript">';
            echo 'alert("Data Pegawai Berhasil Diubah !");';
            echo 'window.location.href = "../pegawai.php";';
            echo '</script>';
        }
    } catch (mysqli_sql_exception $ex){
        echo '<script type="text/javascript">';
        echo 'alert("Data Pegawai Tidak Berhasil Diubah");';
        echo 'window.location.href = "../ubahPegawai.php";';
        echo '</script>';
    }
}




?>
