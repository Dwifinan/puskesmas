<?php 
session_start();

if(!isset($_SESSION["auth"])){
    header("location: index.php");
}

require_once "database/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM dokter");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="kelolaAntrian.php">Kelola Antrian</a></li>
            <li><a href="kelolaDokter.php">Kelola Dokter</a></li>
            <li><a href="jadwalDokter.php">Jadwal Dokter</a></li>
            <li><a href="logout.php">Logout!</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Daftar Dokter</h2>
        <button><a href="tambahDokter.php">Tambah Dokter</a></button><br><br>
        <table class="dokter">
            <thead>
                <tr>
                    <th>No Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jenis Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $data) :?>
                <tr>
                    <td><?=$data["no_dokter"]?></td>
                    <td><?=$data["nama_dokter"]?></td>
                    <td><?=$data["jenis_dokter"]?></td>
                    <td>
                        <a href="hapusDokter.php?nd=<?=$data["no_dokter"]?>" onclick="return confirm('Hapus Dokter?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
