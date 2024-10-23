<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Antrian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: green;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="number"], select {
            width: calc(100% - 22px); /* Mengurangi lebar untuk padding dan border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Memastikan padding dan border di dalam lebar */
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Antrian Online</h2>
    
    <form id="queueForm" action="" method="post">
        <label for="status_pasien">Status Pasien:</label>
        <select id="status_pasien" name="status_pasien" required>
            <option value="">Pilih Status Pasien</option>
            <option value="Biasa">Biasa</option>
            <option value="BPJS">BPJS</option>
        </select>

        <label for="nikbpjs">NIK atau Nomor BPJS</label>
        <input type="number" id="nikbpjs" name="nikbpjs" required>

        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="jenis_pelayanan">Jenis Pelayanan:</label>
        <select id="jenis_pelayanan" name="jenis_pelayanan" required>
            <option value="">Pilih Jenis pelayanan</option>
            <option value="Dokter Umum">Dokter Umum</option>
            <option value="Dokter Gigi">Dokter Gigi</option>
            <option value="Bidan">Bidan</option>
            <option value="KIA">KIA</option>
            <option value="Paru">Paru</option>
            <option value="Lab">Laboratorium</option>
            <option value="IGD">IGD</option>
        </select>

        <button type="submit" name="proses">Kirim</button>
    </form>
</div>

</body>
</html>

<?php

require_once "database/koneksi.php";


if(isset($_POST["proses"])){
    $rows = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM antrian");
    $row = mysqli_fetch_assoc($rows);
    $nomor_antrian = str_pad($row["total"] +1,3,'0',STR_PAD_LEFT);
    $status_pasien = htmlspecialchars($_POST["status_pasien"]);
    $nikbpjs = htmlspecialchars($_POST["nikbpjs"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $jenis_pelayanan = htmlspecialchars($_POST["jenis_pelayanan"]);
    $status_antrian = 0;
    $query ="INSERT INTO antrian (nomor_antrian,status_pasien,nikbpjs,nama,jenis_kelamin,jenis_pelayanan,status_antrian) VALUES ('$nomor_antrian','$status_pasien','$nikbpjs','$nama','$jenis_kelamin','$jenis_pelayanan','$status_antrian')";
    $result = mysqli_query($koneksi, $query);
    header("location: tiketAntrian.php?na=".$nomor_antrian);
}