<!DOCTYPE html>
<html>

<head>
	<title></title>
	<!-- Boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

	<!--Style CSS-->
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="dashboard.css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet" />
</head>

<body>
	<div class="container" style="margin-top: 5%">

		<!-- Get Data From Database -->
		<?php

		include 'database/Artikel.php';
		include 'database/Komentar.php';
		$id = $_GET['id'];
		$user = new Artikel;
		$data = $user->tampilArtikelById($id);

		?>

		<div class="row">
			<div class="col-8 detailberita">
				<h1 class="text-hijau mt-2 fw-medium">
					<?php echo $data['judul'] ?>
				</h1>
				<input type="hidden" name="" value="<?= $data['id'] ?>" id="id_artikel">
				<small class="text-secondary"><span class="oi oi-calendar"></span>
					<?php echo $data['date'] ?></small>s<br>
				<img src="<?php echo $data['foto'] ?>" alt="workingspace" class="img-fluid mt-4">
				<br />

				<?php echo $data['artikel'] ?>

			</div>

			<div class="col-4">
				<div class="recent-post">
					<table class="w-100">
						<tr>
							<th class="hijau putih" style="background-color: #007bff">Recent Post</th>
						</tr>

						<?php
						$artikel = new Artikel;
						$recent = $artikel->tampilRecentArtikel();
						foreach ($recent as $row):
							?>

							<tr>
								<td>
									<img src="<?= $row['foto'] ?>">

									<a href="index.php?p=detail_berita&id=<?= $row['id'] ?>">
										<h1><?= $row['judul'] ?></h1>
										<p><?= $row['artikel'] ?></p>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>

					</table>
				</div>
			</div>
		</div>
		<br />


		<div class="row komentar">
			<div class="col-8">
				<?php
				if (isset($_SESSION['role'])) {
					$nama = $_SESSION['nama'];
					$role = $_SESSION['role'];
					?>
					<!-- <form action="process/komentar/tambahKomentar_proses.php" method="post" enctype="multipart/form-data"> -->
					<div class="komen-lawan">
						<img src="<?= $_SESSION['foto'] ?>">
						<div class="form-group">
							<input type="hidden" name="nama" value="<?php echo $nama; ?>" id="nama">
							<textarea class="form-control" name="komentar" maxlength="120" id="text" required></textarea>
							<input type="hidden" name="artikel_id" value="<?php echo $data['id']; ?>" id="post">
							<span class="badge badge-secondary" id="count_message"></span>
							<button type="button" class="btn btn-secondary tombolpost" id="sendkomentar">Post</button>
						</div>
					</div>
					<!-- </form> -->

					<?php

				} else {
					?>
					<h3 class="text-hijau">Silahkan login untuk berkomentar</h3>
					<?php
				}
				?>
				<div id="kolomKomentar">


					<?php
					$artikel_id = $_GET['id'];
					$komentar = new Komentar;

					$data2 = $komentar->tampilKomentarByPost($post);
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

				</div>
			</div>
		</div>
	</div>

	<!-- 	<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-1.5.js"></script>

	<script>
		$(document).ready(function () {
			var text_max = 120;
			$('#count_message').html('0 / ' + text_max);

			$('#text').keyup(function () {
				var text_length = $('#text').val().length;
				var text_remaining = text_max - text_length;

				$('#count_message').html(text_length + ' / ' + text_max);
			});

			$("#sendkomentar").click(function () {
				$('#count_message').html('0 / ' + text_max);
			});

			// autosize(document.getElementById("text"));
		});


	</script>

	<script type="text/javascript" src="js\komentarArtikel.js"></script>
	<script type="text/javascript" src="js\sendKomentarArtikel.js"></script>

</body>

</html>