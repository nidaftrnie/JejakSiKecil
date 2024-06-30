<?php
include 'database/Artikel.php';
$art = new Artikel;
$artikel = $art->hitungArtikel();

$usr = new User;
$user = $usr->hitungUser();
$datauser = $usr->tampilUser();


?>
<br />
<div class="alert alert-primary">
    Hi! <strong><?= $_SESSION['nama'] ?></strong> Jangan Lupa Senyum Hari ini.

</div>

<!-- infopanel admin -->
<div class="col-12">
    <div class="row">
        <div class="col-lg admin_panel ml-3 mr-3">
            <img src="img/news.png" class="float-left w-25">
            <h1><?= $artikel ?></h1>
            <p>Artikel</p>
        </div>
        <div class="col-lg admin_panel ml-3 mr-3">
            <img src="img/team.png" class="float-left w-25">
            <h1><?= $user ?></h1>
            <p>User</p>
        </div>
    </div>
</div>
<!-- akhir infopanel admin -->