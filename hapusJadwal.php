<?php 
require_once "database/koneksi.php";
$id = $_GET["id"];
mysqli_query($koneksi,"DELETE FROM jadwal_dokter WHERE id=$id");
header("location: jadwalDokter.php");
?>