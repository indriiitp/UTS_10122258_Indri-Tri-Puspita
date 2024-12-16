<?php
include_once("mDatabase.php");


class User {

    private $db;
    private $username;

    public function __construct(){

        //Mengakses objek koneksi di dalam Class Database
        $this->db = new mDatabase();
    }

    public function getUsername($username){

        $this->username = $this->db->get_koneksi()->real_escape_string($username);

        $query = "SELECT nama, username, password, no_hp, alamat, jabatan FROM user WHERE username='$this->username'";

        $result = mysqli_query($this->db->get_koneksi(), $query);

        return $result;

    }
}