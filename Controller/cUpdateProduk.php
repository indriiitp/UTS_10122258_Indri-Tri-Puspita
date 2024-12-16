<?php
include_once("../Model/mProduk.php");

// Buat instance dari model Produk
$produk = new Produk();
$aksi = $_GET["aksi"] ?? "";

if (($_SERVER["REQUEST_METHOD"] == "POST") && ($aksi == "tambah")) {
    $id_produk = $_POST["id_produk"];
    $nama = $_POST["nama"];
    $id_kategori = $_POST["id_kategori"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];

    // Proses upload file gambar
    $gambar = $_FILES["gambar"]["name"];
    $target_dir = "../src/img/";
    $target_file = $target_dir . basename($gambar);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        try {
            $data = $produk->tambahProduk($id_produk, $nama, $id_kategori, $deskripsi, $harga, $gambar);

            if ($data) {
                echo '<script type="text/javascript">';
                echo 'alert("Data Produk Berhasil Disimpan!");';
                echo 'window.location.href = "../produk.php";';
                echo '</script>';
            } else {
                throw new Exception("Gagal menyimpan data produk!");
            }
        } catch (Exception $ex) {
            echo '<script type="text/javascript">';
            echo 'alert("Terjadi kesalahan: ' . $ex->getMessage() . '");';
            echo 'window.location.href = "../tambahProduk.php";';
            echo '</script>';
        }
    } else {
        echo '<script>alert("Gagal mengunggah gambar!");</script>';
        echo '<script>window.location.href = "../tambahProduk.php";</script>';
    }
} elseif (($_SERVER["REQUEST_METHOD"] == "GET") && ($aksi == "hapus")) {
    $id_produk = $_GET["id"] ?? "";

    try {
        $data = $produk->hapusProduk($id_produk);
        if ($data) {
            echo '<script type="text/javascript">';
            echo 'alert("Data Produk Berhasil Dihapus!");';
            echo 'window.location.href = "../produk.php";';
            echo '</script>';
        } else {
            throw new Exception("Gagal menghapus data produk!");
        }
    } catch (Exception $ex) {
        echo '<script type="text/javascript">';
        echo 'alert("Terjadi kesalahan: ' . $ex->getMessage() . '");';
        echo 'window.location.href = "../produk.php";';
        echo '</script>';
    }
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && ($aksi == "edit")) {
    $id_produk = $_POST["id_produk"];
    $nama = $_POST["nama"];
    $id_kategori = $_POST["id_kategori"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];

    // Cek apakah gambar baru diunggah
    if (!empty($_FILES["gambar"]["name"])) {
        // Proses gambar baru
        $gambar = $_FILES["gambar"]["name"];
        $target_dir = "../src/img/";
        $target_file = $target_dir . basename($gambar);
    
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar_baru = $gambar;
        } else {
            echo '<script>alert("Gagal mengunggah gambar baru!");</script>';
            echo '<script>window.location.href = "../ubahProduk.php";</script>';
            exit;
        }
    } else {
        // Gunakan gambar lama jika tidak ada unggahan baru
        $gambar_baru = $_POST["gambar_lama"];
    }
    

    try {
        $data = $produk->updateProduk($id_produk, $nama, $id_kategori, $deskripsi, $harga, $gambar_baru);

        if ($data) {
            echo '<script type="text/javascript">';
            echo 'alert("Data Produk Berhasil Diubah!");';
            echo 'window.location.href = "../produk.php";';
            echo '</script>';
        } else {
            throw new Exception("Gagal mengubah data produk!");
        }
    } catch (Exception $ex) {
        echo '<script type="text/javascript">';
        echo 'alert("Terjadi kesalahan: ' . $ex->getMessage() . '");';
        echo 'window.location.href = "../ubahProduk.php";';
        echo '</script>';
    }
}

?>