<!doctype html>
<html lang="en">

<head>

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar fixed-top hijau flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php?p=main_admin">Hallo
            <?= $_SESSION['nama'] ?>!</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="btn btn-danger" href="process/logout.php">Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=edit_profil">
                                <p><img class="" src="img/cd-icon-username.svg"> Account</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=tambah_artikel">
                                <p><img class="" src="img/cd-icon-username.svg"> Tambah Artikel</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=lihat_artikel">
                                <p><img class="" src="img/cd-icon-username.svg"> Kelola Artikel</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?p=tabel_user">
                                <p><img class="" src="img/cd-icon-username.svg"> Tabel User</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">