<?php 
session_start();

if(!isset($_SESSION["auth"])){
    header("location: index.php");
}

require_once "database/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM antrian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="kelolaAntrian.php">Kelola Antrian</a></li>
            <li><a href="logout.php">Logout!</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Daftar Antrian</h2>
        <table>
            <thead>
                <tr>
                    <th>No Antrian</th>
                    <th>NIK/BPJS</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Antrian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data pengguna -->
                <?php foreach($query as $data) :?>
                <tr>
                    <td><?=$data["nomor_antrian"]?></td>
                    <td><?=$data["nikbpjs"]?></td>
                    <td><?=$data["nama"]?></td>
                    <td><?=$data["jenis_kelamin"]?></td>
                    <td>
                        <?php 
                        if($data["status_antrian"] == 0){
                            echo "Menunggu";
                        } else {
                            echo "Sudah Dilayani";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="detailAntrian.php?na=<?=$data["nomor_antrian"]?>">Detail</a>
                    </td>
                </tr>
                <?php endforeach ?>
                <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
