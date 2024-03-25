<?php
if(isset($_GET['id'])) {
    require 'database.php'; 
    
    $database = new Database($host, $user, $pass, $db); 
    
    $id = $_GET['id'];
    
   
    if($database->hapus($id)) {
        echo "<script>alert('Mahasiswa berhasil dihapus');</script>";
    } else {
        echo "<script>alert('Gagal menghapus mahasiswa');</script>";
    }
    
    header("Location: tampil.php"); 
    exit;
} else {
    echo "<script>alert('ID mahasiswa tidak ditemukan');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>
