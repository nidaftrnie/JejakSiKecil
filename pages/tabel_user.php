<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    exit();
}

$usr = new User;
$user = $usr->hitungUser();
$datauser = $usr->tampilUser();


?>

<!-- tabel  Pasien-->
<div class="row titlepanel" style="margin-left: 20%">
    <div class="col-12">
        <h1>Tabel User</h1>
    </div>
</div>
<table class="table table_spesialis" style="margin-left: 22%">
    <thead class="thead hijau putih">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>


    <tbody>
        <?php
        $i = 1;
        foreach ($datauser as $row):

            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row['nama_user'] ?></td>
                <td>19</td> <!-- Assuming age is hardcoded as 19 -->
                <td>
                    <?php
                    if ($row['jk'] == "") {
                        echo "Belum Diisi";
                    } else {
                        echo $row['jk'];
                    }
                    ?>
                </td>
                <td><a href="process/user/deleteUser_proses.php?id=<?= $row['id_user'] ?>&&foto=<?= $row['foto_user'] ?>">
                        <button type="button" class="btn btn-danger">Delete</button> </a>
                </td>
            </tr>
            <?php
            $i++;
        endforeach;
        ?>
    </tbody>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-KyZXEAg3QhqLMpG8r+2ARZ8KPTa4bPZQ4o8z+xzB26z0XzxfD5KlsM2Yl4g7p1Iw"
    crossorigin="anonymous"></script>