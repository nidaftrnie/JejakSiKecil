<?php
include 'database/Artikel.php';
$art = new Artikel;
$artikel = $art->hitungArtikel();

$usr = new User;
$user = $usr->hitungUser();
$datauser = $usr->tampilUser();
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JejakSiKecil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet" />
</head>

<body>
    <div class="info-panel" style="margin-left: 35%">
        <br />
        <div class="alert alert-primary">
            Hi! <strong><?= $_SESSION['nama'] ?></strong> Jangan Lupa Senyum Hari ini.
        </div>

        <!-- infopanel admin -->

        <div class="col-12">
            <div class="row admin_panel">
                <div class="col-lg ml-3 mr-3">
                    <img src="img/news.png" class="float-left" style="width:10%">
                    <h1><?= $artikel ?></h1>
                    <p>Artikel</p>
                </div>
                <div class="col-lg  ml-3 mr-3">
                    <img src="img/team.png" class="float-left" style="width:10%">
                    <h1><?= $user ?></h1>
                    <p>User</p>
                </div>
            </div>
        </div>

        <!-- akhir infopanel admin -->

    </div>
</body>