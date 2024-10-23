<?php 
session_start();

if(!isset($_SESSION["auth"])){
    header("location: index.php");
}

require_once "database/koneksi.php";
$na = $_GET["na"];
$result = mysqli_query($koneksi,"SELECT * FROM antrian WHERE nomor_antrian = '$na'");
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
        /* Form Styles */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"], .form-group input[type="number"], .form-group select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50; /* Green color */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
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
        <h2>Detail Data Antrian</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="nomorAntrian">Nomor Antrian:</label>
                <input type="number" id="nomorAntrian" name="nomorAntrian" value="<?=$data["nomor_antrian"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="status_pasien">Status Pasien:</label>
                <input type="text" id="status_pasien" name="status_pasien" value="<?=$data["status_pasien"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="jenis_pelayanan">Jenis Pelayanan:</label>
                <input type="text" id="jenis_pelayanan" name="jenis_pelayanan" value="<?=$data["jenis_pelayanan"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="nik">NIK/BPJS:</label>
                <input type="text" id="nik" name="nik" value="<?=$data["nikbpjs"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap:</label>
                <input type="text" id="namaLengkap" name="namaLengkap" value="<?=$data["nama"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?=$data["jenis_kelamin"]?>" disabled>
            </div>

            <div class="form-group">
                <label for="created_at">Waktu Antrian:</label>
                <input type="text" id="created_at" name="created_at" value="<?=$data["created_at"]?>" disabled>
            </div>
            <?php 
            if($data["status_antrian"]===0){
            ?>
            <button type="submit" name="proses">Konfirmasi Antrian</button>
            <?php }else { ?>
            <button type="button">Sudah Dikonfirmasi</button>
            <?php } ?>
        </form>
    </div>

</body>
</html>

<?php 
if(isset($_POST["proses"])){
    $nomor_antrian = $data["nomor_antrian"];
    mysqli_query($koneksi,"UPDATE antrian SET status_antrian=1 WHERE nomor_antrian='$nomor_antrian'");
    header("location: kelolaAntrian.php");
}
?>