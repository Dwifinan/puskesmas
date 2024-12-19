<?php 
session_start();
if(isset($_POST["proses"])){
    $kode_akses = htmlspecialchars($_POST["kode_akses"]);
    if($kode_akses == "rahasiaadmin"){
        $_SESSION["auth"] = TRUE;
        header("location: dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/kodeAkses.css">
</head>
<body>
    <main>
        <section>
            <h2>LOGIN ADMIN</h2>
            <form action="" method="post">
                <label for="kode_akses">Kode Akses:</label><br><br>
                <input type="password" id="kode_akses" name="kode_akses" placeholder="Masukkan kode akses" required><br>
                <input type="submit" name="proses" value="Masuk">
            </form>
        </section>
    </main>
    
</body>
</html>
