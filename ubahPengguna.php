<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pengguna</title>
    <link rel="stylesheet" href="css/ubahPengguna.css">
</head>
<body>
    <div class="container">
        <h2>Ubah Data Pengguna</h2>
        <form action="kelolaPengguna.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="John Doe" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="john@example.com" required><br>

            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="admin" selected>Admin</option>
                <option value="user">User</option>
            </select><br>

            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>
