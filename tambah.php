<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa - Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];

       
        require 'database.php';

        $database = new Database($host, $user, $pass, $db); 
        
        
        if($database->simpan($nama, $alamat, $umur)) {
            echo "<script>alert('Mahasiswa berhasil ditambahkan');</script>";
        } else {
            echo "<script>alert('Gagal menambahkan mahasiswa');</script>";
        }

        echo "<script>window.location.href='tampil.php';</script>";
        exit;
    }
    ?>

   
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
    <table>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <tr>
                <th>Nama:</th>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td><input type="text" id="alamat" name="alamat" required></td>
            </tr>
            <tr>
                <th>Umur:</th>
                <td><input type="number" id="umur" name="umur" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit_tambah">Tambah Mahasiswa</button></td>
            </tr>
        </form>
    </table>

    <br>
    
</body>
</html>
