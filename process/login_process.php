<?php

include '../database/User.php';
$usr = new User;

$email = $_POST['email'];
$pass = $_POST['password'];

$data = $usr->login($email);

$cekpass = password_verify($pass, $data['pass']);

if ($cekpass) {
    session_start();
    $_SESSION['login'] = 1;
    $_SESSION['id'] = $data['id'];
    $_SESSION['pass'] = $data['pass'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['foto'] = $data['foto'];
    $_SESSION['telp'] = $data['telp'];
    $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
    $_SESSION['jk'] = $data['jk'];

    echo "<script>
                alert('Login Berhasil !');
                window.location = '../index.php';
            </script>";

} else {
    echo "<script>
                alert('Login Gagal, Password tidak sesuai !');
                window.location = '../pages/login.php';
            </script>";
}

?>