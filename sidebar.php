    <!-- Sidebar -->
    <div id="sidebar" class="sidebar show">
        <div class="sidebar-header">
            <h2>Menu</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="index.php" class="menu-item">Dashboard</a>
            <?php if($_SESSION['user']['role']== 1){ ?>
            <a href="tambahPengguna.php" class="menu-item">Tambah Pengguna</a>
            <a href="kelolaPengguna.php" class="menu-item">Kelola Pengguna</a>
            <?php } else{ ?>
            <a href="profil.php" class="menu-item">Profil Saya</a>
            <a href="ambilAntrian.php" class="menu-item">Ambil Antrian</a>
            <a href="riwayatAntrian.php" class="menu-item">Riwayat Antrian</a>
            <?php } ?>
            <a href="logout.php" class="menu-item">Logout</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div id="main-content" class="main-content">
    <header class="header">
        <button id="toggle-btn" class="toggle-btn" onclick="toggleSidebar()">☰</button>
        <h1>Selamat Datang <?=$_SESSION["user"]["nama"]?></h1>
    </header>