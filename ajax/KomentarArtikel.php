<?php

include '../database/Komentar.php';
$artikel_id = $_GET['id'];
$komentar = new Komentar;

$data2 = $komentar->tampilKomentarByPost($artikel_id);
foreach ($data2 as $row2):
  ?>


  <div class="komen-lawan2">
    <img src="<?= $row2['foto'] ?>">
    <h1 class="text-hijau"><?= $row2['nama'] ?></h1>
    <p><?= $row2['komentar'] ?></p>
  </div>
  <?php
endforeach;
?>