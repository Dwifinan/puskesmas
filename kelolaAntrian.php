<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Antrian</title>
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
        <h2>Kelola Antrian</h2>
        <table>
            <thead>
                <tr>
                    <th>No Antrian</th>
                    <th>Nama</th>
                    <th>NIK / BPJS</th>
                    <th>Status Antrian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data antrian -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>123456789</td>
                    <td>Menunggu</td>
                    <td>
                        <a href="ubahStatusPasien.php?id=1" class="btn edit-btn">Ubah Status</a> |
                        <a href="ubahPengguna.php?id=1" class="btn edit-btn">Ubah Data Pasien</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>987654321</td>
                    <td>Menunggu</td>
                    <td>
                        <a href="ubahStatusAntrian.php?id=2" class="btn edit-btn">Ubah Status</a> |
                        <a href="ubah_data_pasien.php?id=2" class="btn edit-btn">Ubah Data Pasien</a>
                    </td>
                </tr>
                <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
