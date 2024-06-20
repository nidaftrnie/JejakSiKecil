<?php
session_start();
include 'database/User.php';
?>

<?php
include 'templates/header.php';
?>

<?php
if (!isset($_GET['p'])) {
  $page = "main";
} else {
  $page = $_GET['p'];
}
include 'pages/' . $page . '.php';
?>

<?php
include 'templates/footer.php';
?>