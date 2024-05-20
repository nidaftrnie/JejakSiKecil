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
		$sql = "SELECT * FROM tuser WHERE  email_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$email]);
		$count = $stmt->rowCount();
		if ($count > 0) {
			return 1;
		} else {
			return 0;
		}
	}

	public function tambahUser($nama, $email, $pass, $foto)
{
    $sql = "INSERT INTO tuser (nama_user, email_user, pass_user, role, foto_user) VALUES (?, ?, ?, 'user', ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nama, $email, $pass, $foto]);
}

	public function tampilUser()
	{
		$sql = "SELECT * FROM tuser WHERE role='user'";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}
	public function login($email)
	{
		$sql = "SELECT * FROM tuser WHERE email_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$email]);
		$data = $stmt->fetch();
		return $data;
	}

	public function tampilUserById($id)
	{
		$sql = "SELECT * FROM tuser WHERE id_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function hapusUser($id)
	{
		$sql = "DELETE FROM tuser WHERE id_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

	public function updateUser($id, $nama, $pass, $foto)
	{
		$sql = "UPDATE tuser SET nama_user=?,
										pass_user=?,
										foto_user=?
										WHERE id_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$pass,
			$foto,
			$id
		]);
		return 1;
	}

	public function updateUserBio($id, $nama, $tgl_lahir, $jk)
	{
		$sql = "UPDATE tuser SET nama_user=?,
                    tgl_lahir=?,
										jk=?
										WHERE id_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$nama,
			$tgl_lahir,
			$jk,
			$id
		]);
		return 1;
	}

	public function updateUserPass($id, $pass)
	{
		$sql = "UPDATE tuser SET pass_user=?
                    WHERE id_user=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$pass,
			$id
		]);
		return 1;
	}

	// public function ambilProdi(){
	// 	$sql = "SELECT * FROM prodi";
	// 	$stmt = $this->pdo->query($sql);
	// 	return $stmt;
	// }

}





?>