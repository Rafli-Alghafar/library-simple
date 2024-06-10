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
        if (isset($_POST['login'])) {
            $username = $_POST['user'];
            $password = md5($_POST['password']);

            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
            $cek = mysqli_num_rows($data);

            if ($cek > 0) {
                $_SESSION['user'] = mysqli_fetch_array($data);
                echo '<script>alert("Selamat Datang"); location.href="index.php";</script>';
            } else {
                echo '<script>alert("Username atau Password SALAH")</script>';
            }
        }
        ?>

        <form method="POST">
            <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
            <div class="form-floating">
                <input type="text" class="form-control mb-2" name="user" placeholder="Masukkan Username">
                <label for="user">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-2" type="submit" name="login" value="login">Masuk</button>
            <a class="w-100 btn btn-lg fs-6" href="register.php">Belum Punya Akun? Registrasi</a>
            <p class="mt-5 mb-3 text-muted">Perpustakaan &copy; 2023-2024</p>
        </form>
    </main>



</body>

</html>