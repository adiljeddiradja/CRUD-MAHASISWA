<?php
require 'database.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_tambah'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $database = new Database($host, $user, $pass, $db); 
    
    if($database->simpan($nama, $alamat, $umur)) {
        echo "<script>alert('Mahasiswa berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan mahasiswa');</script>";
    }

    echo "<script>window.location.href='tampil.php';</script>";
    exit;
}


if(isset($_GET['hapus_id'])) {
    $id = $_GET['hapus_id'];

    $database = new Database($host, $user, $pass, $db); 
    
    if($database->hapus($id)) {
        echo "<script>alert('Mahasiswa berhasil dihapus');</script>";
    } else {
        echo "<script>alert('Gagal menghapus mahasiswa');</script>";
    }

    echo "<script>window.location.href='tampil.php';</script>";
    exit;
}
?>
