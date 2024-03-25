<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik";

$kon = mysqli_connect($host, $user, $pass, $db);


class Database
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $kon;

    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->kon = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->kon) {
            die("KONEKSI GAGAL : " . mysqli_connect_error());
        }
    }

    public function tampil()
    {
        $sql = "SELECT * FROM mahasiswa";
        $q = mysqli_query($this->kon, $sql);
        $data = array();
        while ($r = mysqli_fetch_array($q)) {
            $data[] = $r;
        }
        return $data;
    }

    public function simpan($nama, $alamat, $umur)
    {
        $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        $q = mysqli_query($this->kon, $sql);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
        $q = mysqli_query($this->kon, $sql);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }
}

?>
