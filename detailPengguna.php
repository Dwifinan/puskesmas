<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link rel="stylesheet" href="css/detail.css"> <!-- Tautan ke file CSS -->
</head>
<body>
    <div>

        <h2>Detail Pengguna</h2>
    
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari data pengguna...">
        <input type="submit" value="Cari">
    </div>

    
    <!-- Tabel Detail Pengguna -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No.eRM</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>No BPJS</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data pengguna -->
            <tr>
                <td>1</td>
                <td></td>
                <td>John Doe</td>
                <td>1234567890123456</td>
                <td>123456789</td>
                <td>081234567890</td>
                <td>Laki-laki</td>
                <td>Jakarta, 01 Januari 1990</td>
                <td>john.doe@example.com</td>
                <td>Jl. Merdeka No. 10, Jakarta</td>
                <td>
                        <a href="ubahPengguna.php?id=2" class="btn edit-btn">Ubah</a> 
                        <a href="hapusPengguna.php?id=2" class="btn delete-btn" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> 
                    </td>
            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td>Jane Smith</td>
                <td>9876543210987654</td>
                <td>987654321</td>
                <td>089876543210</td>
                <td>Perempuan</td>
                <td>Bandung, 12 Februari 1992</td>
                <td>jane.smith@example.com</td>
                <td>Jl. Sudirman No. 5, Bandung</td>
                <td>
                        <a href="ubahPengguna.php?id=2" class="btn edit-btn">Ubah</a> 
                        <a href="hapusPengguna.php?id=2" class="btn delete-btn" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> 
                    </td>
            </tr>
            <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
        </tbody>
    </table>

</body>
</html>
