<?php 
if(!isset($_GET["na"])){
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
        /* dashboard.css */

        section{
            margin-top: 100px;
            margin-left: 33%;
        }

/* Ticket container styles */
.ticket-container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.ticket-container h2 {
    font-size: 24px;
    font-weight: bold;
    color: #2E865F; /* green */
}

.ticket-container p {
    font-size: 18px;
    margin-bottom: 10px;
}

.ticket-container button {
    background-color: #2E865F; /* green */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.ticket-container button:hover {
    background-color: #34C759; /* darker green */
}
    </style>
</head>
<body>

    <section class="content">
        <div class="ticket-container">
            <h2>Selamat, Antrian Anda Berhasil Diambil!</h2>
            <p>Nomor Antrian: <?=$data["nomor_antrian"]?></p>
            <p>Nama: <?=$data["nama"]?></p>
            <p>Jenis Kelamin: <?=$data["jenis_kelamin"]?></p>
            <p>Waktu Pengambilan: <?=$data["created_at"]?></p>
            <p>Jenis Pelayanan: <?=$data["jenis_pelayanan"]?></p>
            <!-- <button style="width: 100%;" onclick="window.print()">Cetak Tiket</button> -->
            <p style="color:red;text-align:center">HARAP SCREENSHOT ATAU SIMPAN TIKET INI</p>
        </div>
    </section>

    <script src="js/dashboard.js"></script>
</body>
</html>
