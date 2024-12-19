<?php 
session_start();

if(!isset($_SESSION["auth"])){
    header("location: index.php");
}

require_once "database/koneksi.php";
$sql = "
    SELECT 
        dokter.no_dokter,
        dokter.nama_dokter,
        dokter.jenis_dokter,
        jadwal_dokter.id,
        jadwal_dokter.hari,
        jadwal_dokter.jam_mulai,
        jadwal_dokter.jam_selesai
    FROM 
        dokter
    JOIN 
        jadwal_dokter 
    ON 
        dokter.no_dokter = jadwal_dokter.no_dokter
    ORDER BY 
        jadwal_dokter.hari, jadwal_dokter.jam_mulai
";
$query = mysqli_query($koneksi,$sql);
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
        <h2>Jadwal Dokter</h2>
        <button><a href="tambahJadwal.php">Tambah Jadwal Dokter</a></button><br><br>
        <table>
            <thead>
                <tr>
                    <th>No Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jenis Dokter</th>
                    <th>Hari Kerja</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $data) :?>
                <tr>
                    <td><?=$data["no_dokter"]?></td>
                    <td><?=$data["nama_dokter"]?></td>
                    <td><?=$data["jenis_dokter"]?></td>
                    <td><?=$data["hari"]?></td>
                    <td><?=$data["jam_mulai"]?></td>
                    <td><?=$data["jam_selesai"]?></td>
                    <td>
                        <a href="hapusJadwal.php?id=<?=$data["id"]?>">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
