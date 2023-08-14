<?php
session_start();
// Jika bisa login maka ke index.php
if (isset($_SESSION['login'])) {
    header('location:index.php?page=beranda');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'config.php';

// jika tombol yang bernama login diklik
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // password menggunakan md5

    // mengambil data dari user dimana username yg diambil
    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    // jika $cek lebih dari 0, maka berhasil login dan masuk ke index.php
    if ($cek > 0) {
        $_SESSION['login'] = true;

        header('location:index.php?page=beranda');
        exit;
    }
    // jika $cek adalah 0 maka tampilkan error
    $error = true;  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="p_asset/images/logo.png" type="image/png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login</title>
</head>

<body>
    
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 text-center login">
                 <img src="p_asset/images/logo.png" height="70" width="80" style="margin-bottom: -120px;">
                <h4 class="fw-bold"> Kedai Onand Coffee</h4> <br>
                <!-- Ini Error jika tidak bisa login -->
                <?php if (isset($error)) : ?>
                    <?php echo '<script>alert("Username atau Password Salah!");</script>'; ?>
                <?php endif; ?>
                <center>
                <form action="" method="post">
                    <div class="form-group user">
                        <label style="float: left; margin-left:25% ;" >Username :</label><br>
                        <input type="text" class="form-control w-50" placeholder="Masukkan Username" name="username" autocomplete="off" required style="margin-top: 10px;">
                    </div>
                    <div class="form-group my-3">
                        <label style="float: left; margin-left:25% ; ">Password :</label> <br>
                        <input type="password" class="form-control w-50" placeholder="Masukkan Password" name="password" autocomplete="off" required style="margin-top: 10px;">
                    </div>
                    <button class="btn btn-dark text-uppercase" type="submit" name="login">Login</button>
                </form>
                </center>
            </div>
        </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>