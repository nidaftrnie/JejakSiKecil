<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JejakSiKecil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!--Style CSS-->
  <link rel="stylesheet" href="../css/style.css" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet" />


</head>

<body>

  <!-- Navigation -->

  <nav class="navbar navbar-expand-md fixed-top pt-2" style="background-color: #458fb1">
    <div class="container">
      <div class="navbar-brand" href="#home" id="logo" style="color: #ffffff;">JejakSiKecil</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            JejakSiKecil
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#faq">FAQ</a>
            </li>
          </ul>

          <?php
          if (isset($_SESSION['login'])):
            ?>

            <!-- Pages if login as user -->
            <?php
            if (($_SESSION['login']) && ($_SESSION['role'] == 'user')):
              ?>
              <a class="nav-item nav-link pe-2 px-auto my-auto" href="index.php?p=edit">Account</a>
              <a class="nav-item btn tombol rounded-pill fw-semibold" href="process/logout.php"
                style="background-color: #00699a; font-size: 16px; color: #ffff;">Logout</a>
            <?php endif; ?>

            <!-- Pages if login as admin -->
            <?php if (($_SESSION['login']) && ($_SESSION['role'] == 'admin')): ?>
              <a class="nav-item nav-link" href="index.php?p=panel_admin">Panel Admin</a>
              <a class="nav-item nav-link" href="index.php?p=edit">Account</a>
              <a class="nav-item btn tombol rounded-pill fw-semibold" href="process/logout.php"
                style="background-color: #00699a; font-size: 16px; color: #ffff;">Logout</a>
            <?php endif; ?>

            <!-- Pages if not login -->
          <?php else: ?>
            <a class="btn rounded-pill fw-semibold" href="pages/login.php"
              style="background-color: #00699a; font-size: 16px; color: #ffff;">
              <img src="./icons/login.svg" id="icon-login" />
              Masuk
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>