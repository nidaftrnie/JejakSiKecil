<?php
include '../database/User.php'; // Memanggil file User.php yang berisi class User
$user = new User; // Membuat instance dari class User

date_default_timezone_set('Asia/Jakarta');

// Cek apakah request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir registrasi
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Disimpan sebagai plaintext (belum di-hash)
    $foto_sumber = $_FILES['foto']['tmp_name'];
    $foto_nama = $_FILES['foto']['name'];
    $tujuan_foto = "../uploads/" . $foto_nama; // Lokasi untuk menyimpan foto
    $alamat_foto = "uploads/" . $foto_nama; // Alamat yang disimpan di database

    // Validasi foto
    $filesize = $_FILES['foto']['size'];
    $sizemax = 2 * 1024 * 1024; // 2 MB
    if ($filesize > $sizemax) {
        echo "<script>alert('Ukuran file terlalu besar, maksimum 2MB!'); window.location = 'register.php';</script>";
        exit();
    }

    // Mengambil ekstensi file yang diunggah
    $ext = strtolower(pathinfo($foto_nama, PATHINFO_EXTENSION));

    // Daftar ekstensi yang diizinkan
    $extboleh = array("jpg", "png", "gif", "jpeg");

    // Memeriksa apakah ekstensi file termasuk dalam daftar yang diizinkan
    if (!in_array($ext, $extboleh)) {
        echo "<script>alert('Ekstensi file tidak diizinkan!'); window.location = 'register.php';</script>";
        exit(); // Menghentikan eksekusi script jika ekstensi tidak diizinkan
    }

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah email sudah terdaftar
    if ($user->checkEmail($email)) {
        echo "<script>alert('Email sudah terdaftar!'); window.location = 'register.php';</script>";
    } else {
        // Menambahkan data registrasi ke dalam database
        $user->tambahUser($nama, $email, $hashed_password, $alamat_foto);

        // Menyimpan foto ke dalam direktori yang sesuai
        move_uploaded_file($foto_sumber, $tujuan_foto);

        echo "<script>alert('Registrasi berhasil!'); window.location = '../index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="../css/login.css">
</head>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data"
        class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="../images/kids-login.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <p alt="logo" class="logo">JejakSiKecil</p>
                            </div>
                            <p class="login-card-description">Register your account</p>
                            <form action="#!">
                                <div class="form-group">
                                    <label for="nama" class="sr-only">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formFile" class="form-label">Select Photo </label>
                                    <input class="form-control" type="file" name="foto" id="formFile">
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Register">
                            </form>
                            <p class="login-card-footer-text">Already have an account? <a href="login.php"
                                    class="text-reset">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
        </div>
    </form>
</body>

</html>