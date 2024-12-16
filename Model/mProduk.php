<?php
include_once("mDatabase.php");

class Produk
{
    private $db;
    private $id_produk;
    private $nama;
    private $id_kategori;
    private $deskripsi;
    private $harga;
    private $gambar;

    public function __construct()
    {
        $this->db = new mDatabase();
    }

    // Menampilkan semua produk beserta kategori
    public function tampilProduk()
    {
        $query = "SELECT produk.id_produk, produk.nama, kategori.nama_kategori, produk.deskripsi, produk.harga, produk.gambar 
                  FROM produk 
                  JOIN kategori ON produk.id_kategori = kategori.id_kategori 
                  ORDER BY kategori.id_kategori";
        $result = mysqli_query($this->db->get_koneksi(), $query);
        
        if (!$result) {
            die("Query Error: " . mysqli_error($this->db->get_koneksi()));
        }

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Menambah produk baru
    public function tambahProduk($id_produk, $nama, $id_kategori, $deskripsi, $harga, $gambar)
    {
        $this->id_produk = $this->db->get_koneksi()->real_escape_string($id_produk);
        $this->nama = $this->db->get_koneksi()->real_escape_string($nama);
        $this->id_kategori = $this->db->get_koneksi()->real_escape_string($id_kategori);
        $this->deskripsi = $this->db->get_koneksi()->real_escape_string($deskripsi);
        $this->harga = $this->db->get_koneksi()->real_escape_string($harga);
        $this->gambar = $this->db->get_koneksi()->real_escape_string($gambar);

        $query = "INSERT INTO produk(id_produk, nama, id_kategori, deskripsi, harga, gambar)
                  VALUES ('$this->id_produk', '$this->nama', '$this->id_kategori', '$this->deskripsi', '$this->harga', '$this->gambar')";

        return mysqli_query($this->db->get_koneksi(), $query);
    }

    // Menghapus produk berdasarkan id_produk
    public function hapusProduk($id_produk)
    {
        $this->id_produk = $this->db->get_koneksi()->real_escape_string($id_produk);

        $query = "DELETE FROM produk WHERE id_produk = '$this->id_produk'";
        return mysqli_query($this->db->get_koneksi(), $query);
    }

    // Mengambil data produk berdasarkan id_produk untuk diubah
    public function ubahProdukById($id_produk)
    {
        $this->id_produk = $this->db->get_koneksi()->real_escape_string($id_produk);

        $query = "SELECT id_produk, nama, id_kategori, deskripsi, harga, gambar FROM produk WHERE id_produk = '$id_produk'";

        $result = mysqli_query($this->db->get_koneksi(), $query);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $data;
    }

    // Memperbarui data produk
    public function updateProduk($id_produk, $nama, $id_kategori, $deskripsi, $harga, $gambar)
{
    $this->id_produk = $this->db->get_koneksi()->real_escape_string($id_produk);
    $this->nama = $this->db->get_koneksi()->real_escape_string($nama);
    $this->id_kategori = $this->db->get_koneksi()->real_escape_string($id_kategori);
    $this->deskripsi = $this->db->get_koneksi()->real_escape_string($deskripsi);
    $this->harga = $this->db->get_koneksi()->real_escape_string($harga);
    $this->gambar = $this->db->get_koneksi()->real_escape_string($gambar);

    $query = "UPDATE produk SET
                nama = '$this->nama',
                id_kategori = '$this->id_kategori',
                deskripsi = '$this->deskripsi',
                harga = '$this->harga',
                gambar = '$this->gambar'
              WHERE id_produk = '$this->id_produk'";

    return mysqli_query($this->db->get_koneksi(), $query);
}

    // Mengambil daftar kategori untuk form tambah/update produk
    public function getKategori()
    {
        $query = "SELECT * FROM kategori";
        $result = mysqli_query($this->db->get_koneksi(), $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($this->db->get_koneksi()));
        }

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>
