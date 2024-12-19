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
    <h2>Tambah Dokter</h2>
    
    <form id="formDokter" action="" method="post">
        <label for="no_dokter">No Dokter:</label>
        <input type="number" id="no_dokter" name="no_dokter" required>

        <label for="nama_dokter">Nama Dokter:</label>
        <input type="text" id="nama_dokter" name="nama_dokter" required>

        <label for="jenis_dokter">Jenis Dokter:</label>
        <select id="jenis_dokter" name="jenis_dokter" required>
            <option value="">Pilih Jenis Dokter</option>
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
    $no_dokter = htmlspecialchars($_POST["no_dokter"]);
    $nama_dokter = htmlspecialchars($_POST["nama_dokter"]);
    $jenis_dokter = htmlspecialchars($_POST["jenis_dokter"]);

    $query = mysqli_query($koneksi,"INSERT INTO dokter (no_dokter,nama_dokter,jenis_dokter) VALUES ('$no_dokter','$nama_dokter','$jenis_dokter')");
    echo "<script>alert('Dokter Berhasil Ditambahakan')</script>";
}
