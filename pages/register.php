<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card" data-aos="zoom-in">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="../img/kids-login.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href=".."
                                style="color: black; font-weight: bold; font-family: 'Fjalla One', sans-serif;">
                                <p alt="logo" class="logo">JejakSiKecil</p>
                            </a>
                            <p class="login-card-description">Register your account</p>
                            <form method="post" action="../process/user/tambahUser_proses.php"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama" class="sr-only">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formFile" class="form-label">Select Photo </label>
                                    <input class="form-control" type="file" name="foto" id="formFile">
                                </div>
                                <input name="register" id="register" class="btn btn-block login-btn mb-4" type="submit"
                                    value="Register">
                            </form>
                            <p class="login-card-footer-text">Already have an account? <a href="login.php"
                                    class="text-reset">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
        </div>
    </main>

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({
            duration: 1200,
        })</script>
</body>

</html>