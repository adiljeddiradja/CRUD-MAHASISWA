<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa - Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Mahasiswa Baru</a> 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php
        require 'database.php';
        
        $database = new Database($host, $user, $pass, $db); 
        
        $data_mahasiswa = $database->tampil(); 
        
        if (!empty($data_mahasiswa)) {
            foreach ($data_mahasiswa as $mahasiswa) {
                echo "<tr>";
                echo "<td>".$mahasiswa['id']."</td>";
                echo "<td>".$mahasiswa['nama']."</td>";
                echo "<td>".$mahasiswa['alamat']."</td>";
                echo "<td>".$mahasiswa['umur']."</td>";
                echo "<td><a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data mahasiswa</td></tr>";
        }
        ?>
    </table>

    <br>
   
</html>
