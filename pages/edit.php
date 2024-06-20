<?php if ($_SESSION['nama']): ?>


	<?php if ($_SESSION['role'] == "admin"): ?>
		<br />
		<?php include 'pages/edit_profile.php' ?>
	<?php endif; ?>

	<?php if ($_SESSION['role'] == "user"): ?>
		<?php include 'pages/edit_profile.php' ?>
	<?php endif; ?>

<?php else: ?>
	<h1>Anda siapa??</h1>
<?php endif; ?>