<?php
class Komentar
{

	private $pdo;

	function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host=localhost;dbname=jejaksikecil', 'root', '');
		} catch (PDOException $e) {
			echo $e;
		}
	}


	public function tambahKomentar($nama, $komentar, $artikel_id)
	{
		$sql = "INSERT INTO tkomentar (nama,komentar,artikel_id) VALUES(?,?,?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$komentar,
			$artikel_id
		]);
	}

	public function tampilKomentar()
	{
		$sql = "SELECT * FROM tkomentar";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilKomentarByPost($artikel_id)
	{
		$sql = "SELECT * FROM tkomentar,tuser WHERE artikel_id = ? AND tkomentar.nama= tuser.nama ORDER BY date DESC";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$artikel_id]);
		return $stmt;
	}

}

?>