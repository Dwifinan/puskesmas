<?php 
require_once "database/koneksi.php";
$no_dokter = $_GET["nd"];
mysqli_query($koneksi,"DELETE FROM dokter WHERE no_dokter=$no_dokter");
header("location: kelolaDokter.php");
?>