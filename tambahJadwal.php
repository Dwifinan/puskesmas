<?php 
require_once "database/koneksi.php";
$dataDokter = mysqli_query($koneksi,"SELECT * FROM dokter");

?>

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
    <h2>Tambah Jadwal Dokter</h2>
    
    <form id="formDokter" action="" method="post">
        <label for="hari">Hari:</label>
        <select name="hari" id="hari">
            <option value="" selected>Pilih Hari</option>
            <option value="senin">senin</option>
            <option value="selasa">selasa</option>
            <option value="rabu">rabu</option>
            <option value="kamis">kamis</option>
            <option value="jumat">jumat</option>
            <option value="sabtu">sabtu</option>
        </select>

        <label for="nama_dokter">Pilih Dokter:</label>
        <select name="no_dokter" id="nama_dokter">
            <option value="dokter" selected>Pilih Dokter</option>
            <?php foreach($dataDokter as $data) :?>
            <option value="<?=$data["no_dokter"]?>"><?=$data["nama_dokter"]?></option>
            <?php endforeach ?>
        </select>
        
        <label for="waktu_mulai">Jam Kerja Dokter</label>
        <input type="time" id="jam_mulai" name="jam_mulai" required> Sampai dengan
        <input type="time" id="jam_selesai" name="jam_selesai" required><br><br>

        <button type="submit" name="proses">Kirim</button>
    </form>
</div>

</body>
</html>
<?php

require_once "database/koneksi.php";
if(isset($_POST["proses"])){
    $hari = htmlspecialchars($_POST["hari"]);
    $no_dokter = htmlspecialchars($_POST["no_dokter"]);
    $jam_mulai = htmlspecialchars($_POST["jam_mulai"]);
    $jam_selesai = htmlspecialchars($_POST["jam_selesai"]);

    $query = mysqli_query($koneksi,"INSERT INTO jadwal_dokter (no_dokter,hari,jam_mulai,jam_selesai) VALUES ('$no_dokter','$hari','$jam_mulai','$jam_selesai')");
    echo "<script>alert('Jadwal Dokter Berhasil Ditambahakan')</script>";
}
