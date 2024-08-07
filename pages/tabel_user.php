<?php

$usr = new User;
$user = $usr->hitungUser();
$datauser = $usr->tampilUser();

?>
<!-- tabel  Pasien-->
<div class="row titlepanel">
  <div class="col-12">
    <h1>Tabel User</h1>
  </div>
</div>
<table class="table table_spesialis">
  <thead class="thead hijau putih" style="background-color: #00699a;">
    <tr>
      <th>No</th>
      <th>Nama User</th>
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
        <td><?= $row['nama'] ?></td>
        <td>
          <?php
          if ($row['jk'] == "") {
            echo "Belum Diisi";
          } else {
            echo $row['jk'];
          }
          ?>
        </td>
        <td><button type="button" class="btn btn-outline-danger" data-toggle="modal"
            data-target="#delete_user_<?= $row['id'] ?>" data-whatever="@getbootstrap">Delete</button> | <button
            type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#detail_user_<?= $row['id'] ?>"
            data-whatever="@getbootstrap">Detail</button></td>
      </tr>

      <!-- Modal Delete User -->
      <div class="modal fade" id="delete_user_<?= $row['id'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>anda yakin ingin menghapus <?= $row['nama'] ?>?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="process/user/deleteUser_proses.php?id=<?= $row['id'] ?>&&foto=<?= $row['foto'] ?>">
                <button type="button" class="btn btn-danger">Delete</button> </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal Delete User
           -->
      <!-- Modal Detail User -->
      <div class="modal fade" id="detail_user_<?= $row['id'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body detail-dokter">
              <img src="<?= $row['foto'] ?>" class="gambar-bulat float-left">
              <h3><?= $row['nama'] ?></h3>
              <span class="badge badge-secondary label_profile"><?= $row['role'] ?></span>
              <br>
              <img class="icon_kue float-left" src="img/male-and-female-symbols.svg">
              <p>

                <?php
                if ($row['jk'] == "") {
                  echo "Belum Diisi";
                } else {
                  echo $row['jk'];
                }
                ?>
              </p>
              <img class="icon_kue float-left" src="img/birthday-cake.svg">
              <p>
                <?php
                if ($row['tgl_lahir'] == "") {
                  echo "Belum Diisi";
                } else {
                  echo $row['tgl_lahir'];
                }
                ?>

              </p>
              <img class="icon_kue float-left" src="img/cd-icon-phone.svg">
              <p><?= $row['telp'] ?></p>
              <img class="icon_kue float-left" src="img/cd-icon-email.svg">
              <p><?= $row['email'] ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal Detail user -->
      <?php
      $i++;
    endforeach;
    ?>


  </tbody>
</table>

<!-- akhirtable Pasien-->