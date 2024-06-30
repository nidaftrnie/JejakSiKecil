<?php

include '../../database/Komentar.php';
$usr = new Komentar;

$nama = $_GET['nama'];
$komentar = $_GET['komentar'];
$artikel_id = $_GET['post'];

$usr->tambahKomentar($nama, $komentar, $artikel_id);

?>