<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JejakSiKecil</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="../dashboard.css" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet" />

    <style>
        .navigation {
            border-bottom-right-radius: 200px;
            border-bottom-left-radius: 200px;
        }

        .nav-link,
        #home h1,
        #home p,
        #home h1,
        .nav-item {
            color: #ffffff;
        }

        #home button {
            color: #00699a;
        }

        .nav-item .nav-link,
        #home button,
        #home p,
        .nav-item,
        a {
            font-family: "Poppins";
            font-size: 16px;
        }

        h2,
        p {
            font-family: "Poppins";
        }

        #logo,
        #home h1 {
            font-family: "Fjalla One", sans-serif;
        }

        .img {
            color: white;
        }

        button {
            outline: none;
            border: none;
        }

        #home h1 {
            margin-top: 180px;
            font-size: 96px;
        }

        #home p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        #home button {
            margin-bottom: 180px;
        }

        #home .bg-image {
            background-image: url("img/kids.svg");
            background-size: cover;
            background-position: center;
        }

        #about p {
            text-align: justify;
        }

        #nav_footer a {
            color: #000000;
        }

        .img-wrapper {
            height: 100%;
            /* Memastikan tinggi div wrapper sama dengan tinggi gambar */
            display: flex;
            justify-content: center;
            /* Mengatur penempatan horizontal di tengah */
            align-items: center;
            /* Mengatur penempatan vertikal di tengah */
        }
    </style>

</head>

<body>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-md fixed-top pt-2" style="background-color: #458fb1">
        <div class="container">
            <div class="navbar-brand" id="logo" style="color: #ffffff; font-size: 20px">JejakSiKecil</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        JejakSiKecil
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container mt-5 pt-5">
            <a href=".."><img src="../icons/left.svg" /></a>
            <h3 class="fw-bold text-center">Tahap Perkembangan SiKecil</h3>

            <!-- Card untuk Fase Oral -->
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-5 pt-5 pb-5 w-100 border-primary-subtle">
                        <div class="row g-4">
                            <div class="col-md-4 ps-5">
                                <div class="img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="../img/Oral.png" class="w-100" />
                                </div>
                            </div>
                            <div class="col-md-8 pe-5">
                                <h4 class="fw-semibold">1. Fase Oral (Usia 0-24 Bulan)</h4>
                                <p style="text-align: justify;">
                                    Pada fase ini kepuasan anak terletak pada <i>oteorotik</i>,
                                    kesempatan anak untuk mengisap susu ibunya. Anak menggigit dan menangis untuk
                                    mencoba menjaga kedekatan dengan ibunya. Kesenangan terbesar anak pada fase ini
                                    terletak di sekitar mulut. Kegiatan seperti <b class="text-danger">mengunyah,
                                        menggigit, dan
                                        menghisap</b>
                                    merupakan sumber kesenangan anak. Oleh karena itu, orang tua diharapkan
                                    memberikan kesempatan pada anak untuk mencapai sumber kesenangannya agar
                                    menurunkan ketegangan pada bayi dan membuatnya melalui fase ini dengan baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <!-- Card untuk Fase Anal -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="card mt-4 pt-5 pb-5 w-100 border-primary-subtle">
                        <div class="row g-4">
                            <div class="col-md-4 ps-5">
                                <div class="img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="../img/anal.png" class="w-100" />
                                </div>
                            </div>
                            <div class="col-md-8 pe-5">
                                <h4 class="fw-semibold">2. Fase Anal (Usia 2-3 Tahun)</h4>
                                <p style="text-align: justify;">
                                    Pada fase ini, wilayah <i>anal</i> (anus) menjadi ketertarikan utama pada anak.
                                    Maka, <b class="text-danger">pelatihan menggunakan toilet</b> sangat tepat dilakukan
                                    pada usia dini. Karena pada saat ini kesenangan anak terletak di anus atau fungsi
                                    pembuangan yang dihubungkan dengan anus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card untuk Fase Phallic -->
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-4 pt-5 pb-5 w-100 border-primary-subtle">
                        <div class="row g-4">
                            <div class="col-md-4 ps-5">
                                <div class="img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="../img/Oral.png" class="w-100" />
                                </div>
                            </div>
                            <div class="col-md-8 pe-5">
                                <h4 class="fw-semibold">3. Fase Phallic (Usia 3-6 Tahun)</h4>
                                <p style="text-align: justify;">
                                    Pada fase ini kesenangan anak terfokus pada alat kelaminnya, baik pada anak
                                    laki-laki maupun anak perempuan. Mereka mulai menyadari bahwa manipulasi diri
                                    merupakan kegiatan yang menyenangkan. Pada tahap ini <b class="text-danger">jika
                                        anak tidak dapat
                                        mengidentifikasi diri sesuai dengan orang tua yang sama jenis kelaminnya</b>,
                                    maka akan terjebak di fase <i>phallic</i>. Sehingga anak tidak dapat melewwati
                                    tahap perkembangan ini dengan baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <!-- Card untuk Fase Latency -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="card mt-4 pt-5 pb-5 w-100 border-primary-subtle">
                        <div class="row g-4">
                            <div class="col-md-4 ps-5">
                                <div class="img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="../img/anal.png" class="w-100" />
                                </div>
                            </div>
                            <div class="col-md-8 pe-5">
                                <h4 class="fw-semibold">4. Fase Latency (Usia 6-11 Tahun)</h4>
                                <p style="text-align: justify;">
                                    Pada fase ini, anak sudah mulai mengendalikan permusuhannya dengan orang tuanya
                                    yang memiliki jenis kelamin berbeda dengan dirinya. Anak laki-laki dan perempuan
                                    akan terlihat bersikap lembut kepada ayah dan ibu mereka. Aktivitas yang paling
                                    disenangi pada masa ini yaitu <b class="text-danger">berkumpul bersama
                                        teman-teman</b> dengan kegiatan-kegiatan
                                    sosial atau intelektual.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card untuk Fase Genital -->
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-4 pt-5 pb-5 w-100 border-primary-subtle">
                        <div class="row g-4">
                            <div class="col-md-4 ps-5">
                                <div class="img-wrapper d-flex justify-content-center align-items-center">
                                    <img src="../img/Oral.png" class="w-100" />
                                </div>
                            </div>
                            <div class="col-md-8 pe-5">
                                <h4 class="fw-semibold">5. Fase Genital (11 Tahun ke Atas)</h4>
                                <p style="text-align: justify;">
                                    Pada fase ini, sumber kesenangan seksual anak didapat dari seseorang di luar
                                    keluarga. <b class="text-danger">Masa pubertas</b> merupakan masa di mana anak
                                    berupaya membebaskan diri
                                    dari perwalian orang tuanya. Mereka sudah mulai menyukai perempuan lain
                                    selain ibunya dan menyukai pria lain selain ayahnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </section>

    <!--Footer Section-->
    <section id="footer" class="mt-5 pt-4 pb-3" style="background-color: #00699A;">
        <div class="container text-center">
            <div>
                <div class="fw-medium" id="nav_footer">
                    <a class="nav-link brand mb-3" href=".."
                        style="color:#fff; font-size:20px">JejakSiKecil</a>
                </div>
                <div>
                    <p style="color:#fff">&#169 Nida Fitrianie 2024</p>
                </div>
            </div>
        </div>
        </div>
    </section>



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