<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Puskesmas</title>
    <link rel="stylesheet" href="css/mengantri.css">
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di Puskesmas</h1>
        <div class="queue-display">
            <h2>Nomor Antrian</h2>
            <div id="queue-number">001</div>
        </div>
        <form id="queue-form">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="nik-bpjs">NIK atau BPJS:</label>
            <input type="text" id="nik-bpjs" name="nik-bpjs" required>
            <div class="form-group">
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
            </div><br>
            <div class="form-group">
           <label for="status_pasien">Status Pasien:</label>
           <select id="status_pasien" name="status_pasien" required>
               <option value="">Pilih Status Pasien</option>
               <option value="Biasa">Biasa</option>
               <option value="BPJS">BPJS</option>
           </select>
            </div><br><br>
            
            <button type="submit">Ambil Antrian</button>
        </form>
    </div>
    <script src="js/tampilan.js"></script>
</body>
</html>
