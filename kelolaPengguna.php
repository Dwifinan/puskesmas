<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="kelolaPengguna.php">Kelola Pengguna</a></li><br>
            <li><a href="kelolaAntrian.php">Kelola Antrian</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Kelola Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data pengguna -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="ubahPengguna.php?id=1" class="btn edit-btn">Ubah</a> 
                        <a href="hapusPengguna.php?id=1" class="btn delete-btn" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> |
                        <a href="detailPengguna.php">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>User</td>
                    <td>
                        <a href="ubahPengguna.php?id=2" class="btn edit-btn">Ubah</a> 
                        <a href="hapusPengguna.php?id=2" class="btn delete-btn" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> |
                         <a href="detailPengguna">Detail</a>
                    </td>
                </tr>
                <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
