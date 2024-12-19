<?php 
session_start();

if(!isset($_SESSION["auth"])){
    header("location: index.php");
    exit;
}

require_once "database/koneksi.php";

// Contoh data (ganti dengan data dari database Anda)
$queryjp = mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM antrian");
$hasiljp = mysqli_fetch_assoc($queryjp);
$totalPasien = $hasiljp["jumlah"];
$queryjb = mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM antrian WHERE status_antrian=0");
$hasiljb = mysqli_fetch_assoc($queryjb);
$pasienMenunggu = $hasiljb["jumlah"];
$queryjs = mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah FROM antrian WHERE status_antrian=1");
$hasiljs = mysqli_fetch_assoc($queryjs);
$pasienSelesai = $hasiljs["jumlah"];

$totalPengunjung = [
    "Senin" => 50,
    "Selasa" => 45,
    "Rabu" => 40,
    "Kamis" => 60,
    "Jumat" => 70,
    "Sabtu" => 30
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
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

    <!-- Konten Utama -->
    <div class="container">
        <!-- Cards -->
        <div class="cards">
            <div class="card">
                <h3>Total Pasien</h3>
                <p><?= $totalPasien; ?></p>
            </div>
            <div class="card">
                <h3>Pasien Menunggu</h3>
                <p><?= $pasienMenunggu; ?></p>
            </div>
            <div class="card">
                <h3>Pasien Selesai</h3>
                <p><?= $pasienSelesai; ?></p>
            </div>
        </div>

        <!-- Tabel -->
        <table>
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Total Pengunjung</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($totalPengunjung as $hari => $jumlah): ?>
                <tr>
                    <td><?= $hari; ?></td>
                    <td><?= $jumlah; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
