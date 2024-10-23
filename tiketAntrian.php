<?php 

// session_start();
// if(!isset($_SESSION['user'])){
//     header('location: login.php');
// }

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
            <p>Nomor Antrian: 005</p>
            <p>Nama: Osas Subianto</p>
            <p>Tanggal Antrian: 20 Oktober 2024</p>
            <p>Jam Antrian: 09.00 WIB</p>
            <p>Jenis Pelayanan: Dokter Umum</p>
            <p>Keterangan: Harap datang 5 menit sebelum jam antrian</p>
            <button style="width: 100%;" onclick="window.print()">Cetak Tiket</button>
            <!-- <p style="color:red;text-align:center">HARAP SCREENSHOT ATAU SIMPAN TIKET INI</p> -->
        </div>
    </section>

    <script src="js/dashboard.js"></script>
</body>
</html>
