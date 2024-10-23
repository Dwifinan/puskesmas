<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Logika untuk menghapus data pengguna berdasarkan ID dari database
    // Misalnya: DELETE FROM pengguna WHERE id_pengguna=$id

    echo "Data pengguna berhasil dihapus.";
}
?>
<a href="kelolaPengguna.php">Kembali ke daftar pengguna</a>
