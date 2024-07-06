<?php

include '../../database/User.php';
$usr = new User;

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];

$passenkripsi = password_hash($pass, PASSWORD_BCRYPT);

//gambar
$sumber = $_FILES['foto']['tmp_name'];
$namafile = $_FILES['foto']['name'];

// var_dump($namafile);
$ekstensiGambar = explode('.', $namafile);
$ekstensiGambar = strtolower(end($ekstensiGambar));

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

$tujuan = "../../uploads/" . $namaFileBaru;  //untuk di upload
$alamat = "uploads/" . $namaFileBaru;  //untuk di simpan
$alamatkosong = "";

$filesize = $_FILES['foto']['size']; //ambil size gambar
$sizemax = 2 * 1024 * 1024;   //2mb


if ($usr->checkEmail($email) == 1) {         //check email
  echo "<script>
                alert('Email Sudah Tersedia !');
                window.location = '../../index.php';
            </script>";
} else {

  if ($filesize <= $sizemax) {
    $pecahfile = explode(".", $namafile);
    $ext = end($pecahfile);
    $ext = strtolower($ext);
    $extboleh = array("jpg", "png", "gif", "jpeg");

    if (in_array($ext, $extboleh)) {

      $usr->tambahUser($nama, $email, $telp, $passenkripsi, $alamat);

      move_uploaded_file($sumber, $tujuan);

      echo "<script>
        						alert('Berhasil Registrasi!');
        						window.location = '../../pages/login.php';
        				</script>";
    } else {
      echo "<script>
        						alert('Ekstensi file tidak diizinkan!');
        						window.location = '../../pages/register.php';
        				</script>";
    }

  } else {
    echo "<script>
      						alert('File terlalu Besar!');
      						window.location = '../../index.php';
      				</script>";
  }

}

?>