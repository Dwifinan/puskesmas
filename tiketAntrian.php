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

section {
    margin-top: 150px;
    margin-left: 100px;
}

/* Ticket container styles */
.ticket-container {
    width: 30%;
    margin-left: 29%;
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

/* Responsif untuk layar dengan lebar maksimum 768px (tablet dan lebih kecil) */
@media (max-width: 768px) {
    section {
        margin-left: 20px; /* Menurunkan margin kiri agar lebih lebar pada perangkat kecil */
    }

    .ticket-container {
        width: 60%; /* Lebar container lebih besar untuk layar kecil */
        margin-left: 20%; /* Menempatkan container di tengah */
    }

    .ticket-container h2 {
        font-size: 20px; /* Menurunkan ukuran font untuk judul */
    }

    .ticket-container p {
        font-size: 16px; /* Menurunkan ukuran font untuk teks */
    }

    .ticket-container button {
        padding: 8px 15px; /* Menurunkan ukuran padding button */
    }
}

/* Responsif untuk layar lebih kecil dari 480px (ponsel) */
@media (max-width: 480px) {
    section {
        margin-left: 10px; /* Margin lebih kecil untuk tampilan lebih baik */
    }

    .ticket-container {
        width: 80%; /* Membuat container lebih lebar pada ponsel */
        margin-left: 10%; /* Menempatkan container di tengah */
        padding: 15px; /* Menurunkan padding */
    }

    .ticket-container h2 {
        font-size: 18px; /* Menurunkan ukuran font lebih lanjut untuk judul */
    }

    .ticket-container p {
        font-size: 14px; /* Menurunkan ukuran font untuk teks */
    }

    .ticket-container button {
        padding: 6px 12px; /* Menurunkan ukuran padding button */
    }
}

/* Responsif untuk layar dengan lebar maksimum 400px */
@media (max-width: 400px) {
    section {
        margin-left: 5px; /* Mengurangi margin kiri untuk lebih banyak ruang pada layar kecil */
    }

    .ticket-container {
        width: 90%; /* Membuat container lebih lebar pada layar sangat kecil */
        margin-left: 5%; /* Menempatkan container di tengah */
        padding: 10px; /* Mengurangi padding lebih lanjut */
    }

    .ticket-container h2 {
        font-size: 16px; /* Menurunkan ukuran font untuk judul pada layar kecil */
    }

    .ticket-container p {
        font-size: 12px; /* Menurunkan ukuran font lebih jauh */
    }

    .ticket-container button {
        padding: 5px 10px; /* Mengurangi padding button lebih lanjut */
    }
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
