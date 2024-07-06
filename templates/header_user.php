<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JejakSiKecil</title>

  <!--Style CSS-->
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="style.css" />

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet">

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  <style>
    #home .bg-image {
      background-image: url("img/kids.svg");
      background-size: cover;
      background-position: center;
    }

    .nav-link,
    #home h1,
    #home p,
    #home h1,
    .nav-item,
    .offcanvas-title {
      color: #ffffff;
    }
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md fixed-top" style="background-color: #458fb1">
    <div class="container">
      <a class="navbar-brand" href="../JejakSiKecil" id="logo" style="color: #ffffff; font-size: 20px">JejakSiKecil</a>
      <?php if (!isset($_GET['p']) || ($_GET['p'] !== 'detail_artikel')): ?>
        <?php if (!isset($_GET['p']) || ($_GET['p'] !== 'perkembangansikecil')): ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end light" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel" style="background-color: #458fb1">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                JejakSiKecil
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                style="background-color: white"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#faq">FAQ</a>
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
                  <a class="btn rounded-pill fw-semibold" href="process/logout.php"
                    style="background-color: #00699a; font-size: 16px; color: #ffff;"><img src="./icons/login.svg"
                      id="icon-login" class="me-1" />Logout</a>
                <?php endif; ?>

                <!-- Pages if not login -->
              <?php else: ?>
                <a class="btn rounded-pill fw-semibold" href="pages/login.php"
                  style="background-color: #00699a; font-size: 16px; color: #ffff;">
                  <img src="./icons/login.svg" id="icon-login" />
                  Login
                </a>
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>