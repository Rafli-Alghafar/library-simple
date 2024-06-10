<?php
include "config/koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sign in</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link rel="stylesheet" href="dist\css\bootstrap.min.css">
    <meta name="theme-color" content="#7952b3">
    <style>
        * {
            overflow: hidden;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin w-25 position-absolute top-50 start-50 translate-middle shadow p-3 mb-5 bg-body-tertiary rounded">
        <?php
        if (isset($_POST['regis'])) {
            $namaLengkap = $_POST['nama'];
            $username = $_POST['user'];
            $alamat = $_POST['alamat'];
            $no = $_POST['telp'];
            $email = $_POST['email'];
            $level = $_POST['level'];
            $password = md5($_POST['password']);

            $daftar = mysqli_query($koneksi, "INSERT INTO user(nama,username,alamat,no_telepon,email,password,level) VALUES ('$namaLengkap','$username','$alamat','$no','$email','$password','$level')");

            if ($daftar) {
                echo '<script>alert("Selamat Registrasi Berhasil, Silahkan Login"); location.href="login.php"</script>';
            } else {    
                echo '<script>alert("Registrasi gagal, Silahkan Ulang Kembali");</script>';
            }
        }
        ?>

        <form method="POST">
            <h1 class="h3 mb-3 fw-normal">Silahkan Registrasi</h1>
            <div class="form-floating">
                <input type="text" class="form-control mb-2" name="nama" placeholder="Masukkan Nama Lengkap">
                <label for="user">Nama Lengkap</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-2" name="user" placeholder="name@example.com">
                <label for="user">Username</label>
            </div>
            <div class="form-floating">
                <textarea name="alamat" rows="5" class="form-control mb-2"></textarea>
                <label for="user">Alamat</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-2" name="telp" placeholder="Masukkan Nomor Telepon">
                <label for="user">Nomor Telepon</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-2" name="email" placeholder="name@example.com">
                <label for="user">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="form-group mb-3">
                <select name="level" class="form-select form-control">
                    <option value="-1">Level</option>
                    <option value="admin">Admin</option>
                    <option value="peminjam">Peminjam</option>
                </select>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="regis" value="regis">Daftar</button>
            <a class="w-100 btn btn-lg fs-6" href="login.php">Sudah Punya Akun? Masuk</a>
            <p class="mt-1 mb-1 text-muted">Perpustakaan &copy; 2023-2024</p>
        </form>
    </main>



</body>

</html>