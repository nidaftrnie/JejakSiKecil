<?php
class User
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

	public function hitungUser()
	{
		$sql = "SELECT * FROM tuser WHERE  role=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute(['user']);
		$count = $stmt->rowCount();
		return $count;
	}

	public function checkEmail($email)
	{
		$sql = "SELECT * FROM tuser WHERE  email=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$email]);
		$count = $stmt->rowCount();
		if ($count > 0) {
			return 1;
		} else {
			return 0;
		}
	}

	public function tambahUser($nama, $email, $telp, $pass, $foto)
	{
		$sql = "INSERT INTO tuser (nama,email,telp,pass,role,foto) VALUES(?,?,?,?,?,?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$email,
			$telp,
			$pass,
			'user',
			$foto
		]);
	}

	public function tampilUser()
	{
		$sql = "SELECT * FROM tuser WHERE role='user'";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}
	public function login($email)
	{
		$sql = "SELECT * FROM tuser WHERE email=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$email]);
		$data = $stmt->fetch();
		return $data;
	}

	public function tampilUserById($id)
	{
		$sql = "SELECT * FROM tuser WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function hapusUser($id)
	{
		$sql = "DELETE FROM tuser WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

	public function updateUser($id, $nama, $telp, $pass, $foto)
	{
		$sql = "UPDATE tuser SET nama=?,
						telp=?,
											pass=?,
											foto=?
											WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$telp,
			$pass,
			$foto,
			$id
		]);
		return 1;
	}

	public function updateUserBio($id, $nama, $tgl_lahir, $telp, $jk)
	{
		$sql = "UPDATE tuser SET nama=?,
						tgl_lahir=?,
											telp=?,
											jk=?
											WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$tgl_lahir,
			$telp,
			$jk,
			$id
		]);
		return 1;
	}

	public function updateUserPass($id, $pass)
	{
		$sql = "UPDATE tuser SET pass=?
						WHERE id=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$pass,
			$id
		]);
		return 1;
	}

}

?>