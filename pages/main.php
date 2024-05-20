<?php
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'dokter') {
        include 'edit_profil.php';
    }

    if ($_SESSION['role'] == 'user') {
        include 'main_user.php';
    }

    if ($_SESSION['role'] == 'admin') {
        include 'main_admin.php';
    }

} else {
    include 'main_user.php';
}