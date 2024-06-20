<?php

include '../../database/Komentar.php';
$usr = new Komentar;

$nama = $_GET['nama'];
$komentar = $_GET['komentar'];
$post = $_GET['post'];

$usr->tambahKomentar($nama, $komentar, $post);

?>