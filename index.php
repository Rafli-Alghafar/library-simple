<?php
include "config/koneksi.php";
if (!isset($_SESSION['user'])) {
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="dist\css\bootstrap.min.css">
    <title>Perpustakaan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?">Dashboard</a>
                    </li>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=kategori">
                                Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=buku">Buku</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=peminjaman">Peminjaman</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=ulasan">Ulasan</a>
                    </li>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=laporan">Laporan Peminjaman</a>
                        </li>
                    <?php } ?>
                </ul>
                <label style="margin-right: 30px;"><b><?php
                                                        echo $_SESSION['user']['nama'];
                                                        ?></b></label>
                <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Keluar</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        if (file_exists($page . '.php')) {
            include $page . '.php';
        } else {
            include '404.php';
        }
        ?>
    </div>

</body>
<script src="dist\js\bootstrap.min.js"></script>

</html>