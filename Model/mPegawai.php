<?php
include_once("mDatabase.php");

class Pegawai
{
    private $db;
    private $id_user;
    private $username;
    private $password;
    private $nama;
    private $no_hp;
    private $alamat;
    private $jabatan;

    public function __construct()
    {
        $this->db = new mDatabase();
    }

    public function tampilPegawai()
    {
        $query = "SELECT id_user, username, nama, no_hp, alamat, jabatan FROM user ORDER BY id_user";
        $result = mysqli_query($this->db->get_koneksi(), $query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $data;
    }

    public function tambahPegawai($id_user, $username, $password, $nama, $no_hp, $alamat, $jabatan) {
        // Escape input untuk mencegah SQL Injection
        $this->id_user = $this->db->get_koneksi()->real_escape_string($id_user);
        $this->username = $this->db->get_koneksi()->real_escape_string($username);
        $this->password = $this->db->get_koneksi()->real_escape_string($password);
        $this->nama = $this->db->get_koneksi()->real_escape_string($nama);
        $this->no_hp = $this->db->get_koneksi()->real_escape_string($no_hp);
        $this->alamat = $this->db->get_koneksi()->real_escape_string($alamat);
        $this->jabatan = $this->db->get_koneksi()->real_escape_string($jabatan);
    
        // Query untuk operasi tambah data pegawai
        $query = "INSERT INTO user(id_user, username, password, nama, no_hp, alamat, jabatan)
                  VALUES ('$this->id_user', '$this->username', '$this->password', '$this->nama', '$this->no_hp', '$this->alamat', '$this->jabatan')";
        
        $result = mysqli_query($this->db->get_koneksi(), $query);
    
        return $result;
    }

    public function hapusPegawai($id_user){

        $this->id_user = $this->db->get_koneksi()->real_escape_string($id_user);

        $query = "DELETE FROM user WHERE id_user = '$this->id_user'";

        $result = mysqli_query($this->db->get_koneksi(), $query);
        return $result;
    }
    
    public function ubahPegawaiById($id_user){

        $this->id_user = $this->db->get_koneksi()->real_escape_string($id_user);

        $query = "SELECT id_user, username, password, nama, no_hp, alamat, jabatan FROM user WHERE id_user = '$id_user'";

        $result = mysqli_query($this->db->get_koneksi(), $query);

        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $data;
    }

    public function updatePegawai($id_user, $username, $password, $nama, $no_hp, $alamat, $jabatan){

        //Validasi Data
        $this->id_user = $this->db->get_koneksi()->real_escape_string($id_user);
        $this->username = $this->db->get_koneksi()->real_escape_string($username);
        $this->password = $this->db->get_koneksi()->real_escape_string($password);
        $this->nama = $this->db->get_koneksi()->real_escape_string($nama);
        $this->no_hp = $this->db->get_koneksi()->real_escape_string($no_hp);
        $this->alamat = $this->db->get_koneksi()->real_escape_string($alamat);
        $this->jabatan = $this->db->get_koneksi()->real_escape_string($jabatan);

        $query = "UPDATE user SET
                    username = '$this->username',
                    password = '$this->password',
                    nama = '$this->nama',
                    no_hp = '$this->no_hp',
                    alamat = '$this->alamat',
                    jabatan = '$this->jabatan'
                    WHERE id_user = '$this->id_user'";

        $result = mysqli_query($this->db->get_koneksi(), $query);
        return $result;
    }

    
    // public function getJabatan(){
    //     $query = "SELECT * FROM user ORDER BY jabatan";
    //     $result = mysqli_query($this->db->get_koneksi(), $query);
    //     $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //     return $data;
    // }

}