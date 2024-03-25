<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa - Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa Baru</h1>
    
    <table>
        <form action="proses.php" method="post">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" id="alamat" name="alamat" required></td>
            </tr>
            <tr>
                <td><label for="umur">Umur:</label></td>
                <td><input type="number" id="umur" name="umur" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit_tambah">Tambah Mahasiswa</button></td>
            </tr>
        </form>
    </table>
    </form>

    <br>
    <a href="tampil.php">Kembali ke Daftar Mahasiswa</a> <
</body>
</html>
