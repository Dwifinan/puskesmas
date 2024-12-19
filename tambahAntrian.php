<?php 
require_once "database/koneksi.php";
if(isset($_POST)){
    $nomor_antrian = $_POST["nomor_antrian"];
    mysqli_query($koneksi,"UPDATE antrian SET status_antrian=1 WHERE nomor_antrian='$nomor_antrian'");
    header("location: kelolaAntrian.php");
}
?>