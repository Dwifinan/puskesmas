<?php 
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
<style>
    /* .main-content styles */
.main-content {
    padding: 30px;
    width: 95%;
    background-color: #e9f5e9;
}

.main-content h2 {
    margin-bottom: 15px;
    color: #555555; /* Warna teks */
    font-size: 1.8rem;
    font-weight: bold;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
}

th {
    background-color: #4caf50; /* Warna hijau untuk header */
    color: white;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase; /* Huruf besar semua */
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e9f5e9; /* Warna hijau lembut saat hover */
    cursor: pointer; /* Tanda interaksi */
}

td {
    font-size: 1rem;
    color: #555555;
    font-weight: 500;
}

/* Responsif untuk layar dengan lebar maksimum 480px (ponsel) */
@media (max-width: 480px) {
    .main-content {
        padding: 15px; /* Mengurangi padding */
        width: 100%; /* Memastikan lebar penuh */
    }

    .main-content h2 {
        font-size: 1.4rem; /* Menurunkan ukuran font untuk heading */
    }

    table {
        margin-top: 15px; /* Menurunkan margin atas */
    }

    table, th, td {
        padding: 10px; /* Menurunkan padding untuk elemen tabel */
    }

    th {
        font-size: 0.9rem; /* Menurunkan ukuran font untuk header */
    }

    td {
        font-size: 0.9rem; /* Menurunkan ukuran font untuk data */
    }

    /* Membuat baris lebih mudah dibaca pada layar kecil */
    tr:hover {
        background-color: #e9f5e9; /* Warna tetap sama saat hover */
    }
}

/* Responsif untuk layar dengan lebar maksimum 400px */
@media (max-width: 400px) {
    .main-content {
        padding: 10px; /* Mengurangi padding lebih lanjut untuk layar kecil */
    }

    .main-content h2 {
        font-size: 1.2rem; /* Menurunkan ukuran font heading lebih kecil */
    }

    table {
        margin-top: 10px; /* Menurunkan margin atas untuk tabel */
    }

    table, th, td {
        padding: 8px; /* Mengurangi padding lebih lanjut */
    }

    th {
        font-size: 0.8rem; /* Menurunkan ukuran font header lebih kecil */
    }

    td {
        font-size: 0.8rem; /* Menurunkan ukuran font data lebih kecil */
    }
}


</style>
</head>
<body>

    <div class="main-content">
        <h2>Jadwal Dokter</h2>
        <table class="dokter">
            <thead>
                <tr>
                    <th>Nama Dokter</th>
                    <th>Jenis Dokter</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $data) :?>
                <tr>
                    <td><?=$data["nama_dokter"]?></td>
                    <td><?=$data["jenis_dokter"]?></td>
                    <td><?=$data["hari"]?></td>
                    <td><?=$data["jam_mulai"]?></td>
                    <td><?=$data["jam_selesai"]?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="js/dashboard.js"></script>
</body>
</html>
