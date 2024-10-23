<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nik_bpjs = $_POST['nik_bpjs'];
    $alamat = $_POST['alamat'];
    echo "Data pasien berhasil diubah.";
}
?>
<a href="kelolaAntrian.php">Kembali ke daftar antrian</a>
