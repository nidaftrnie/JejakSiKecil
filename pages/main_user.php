<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JejakSiKecil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .square-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .accordion-item:not(.collapsed) .accordion-button {
            background-color: #fff;
            /* Set background color to white */
            color: #000;
            /* Set text color to black */
        }

        .accordion-item .accordion-button:focus {
            border-color: none;
        }

        .accordion-item .accordion-collapse {
            background-color: #fff;
            /* Set background color to white */
        }

        .accordion-item .accordion-collapse .accordion-body {
            color: #000;
            /* Set text color to black */
        }
    </style>
</head>

<body>
    <!-- Section Home -->
    <div class="navigation pe-1 pt-2 mb-4" style="background-color: #458fb1" data-aos="fade-down">
        <section id="home">
            <div class="container mt-2 pt-5">
                <div class="bg-image image-fluid">
                    <div class="row text-center my-auto pt-4 d-flex justify-content-center align-items-center">
                        <div>
                            <h1>JejakSiKecil</h1>
                            <p>Membimbing Langkah Kecil Menuju Masa Depan Besar</p>
                            <button type="button" class="btn rounded-pill"
                                style="background-color: #bef7ff; width: 20%; height: 6%;">Lihat Cerita SiKecil</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Section About -->
    <section id="about" class="mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto d-flex justify-content-end pe-5" data-aos="fade-right">
                    <img src="./img/kid-about.svg" class="img-fluid">
                </div>
                <div class="col-md-6 my-auto pe-5" data-aos="fade-left">
                    <h2 class="fw-bold">Tentang</h2>
                    <p>JejakSiKecil merupakan website yang menyediakan informasi mengenai pertumbuhan dan perkembangan
                        anak, serta memberikan kesempatan untuk berbagi informasi mengenai tumbuh kembang anak dengan
                        menulis artikel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Article -->
    <section id="artikel" class="mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row titleberita" data-aos="fade-up">
                <div class="col-12">
                    <h1>Artikel Terbaru</h1>
                    <hr>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="container ms-2">
                    <?php
                    include 'database/Artikel.php';
                    $artikel = new Artikel;
                    $data = $artikel->tampilArtikel2();
                    $i = 1;
                    foreach ($data as $row):
                        ?>
                        <div class="row mb-5 border rounded pt-5 pb-5" id="berita">
                            <div class="col-lg-6">
                                <img src="<?= $row['foto'] ?>" alt="workingspace" class="img-fluid"
                                    style="padding-left: 50%">
                            </div>
                            <div class="col-lg-6">
                                <h3><?= $row['judul'] ?></h3>
                                <p><?= $row['artikel'] ?></p>
                                <small class="text-primary">
                                    <?php
                                    $harijam = $row['date'];
                                    $date = strtotime($harijam);
                                    echo date('F, d Y', $date);
                                    ?>
                                </small><br>
                                <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>"
                                    class="btn btn-primary tombol mt-4">Read More</a>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="row berita" data-aos="fade-left">
                <?php
                $data = $artikel->tampilArtikel();
                $i = 1;
                foreach ($data as $row):
                    if ($i > 4) {
                        break;
                    }
                    ?>
                    <div class="col-md-6">
                        <div class="card mb-5 justify-content-center" style="height: 200px">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="<?= $row['foto'] ?>" alt="workingspace" class="square-img">
                                </div>
                                <div class="col-6">
                                    <h3><?= $row['judul'] ?></h3>
                                    <small class="text-primary">
                                        <?php
                                        $harijam = $row['date'];
                                        $date = strtotime($harijam);
                                        echo date('F, d Y', $date);
                                        ?>
                                    </small>
                                    <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>"><img src="icons/next.svg"
                                            alt="workingspace" class="float-right" style="width:30px; height: 30px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- Section FAQ -->
    <section id="faq" class="mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in-right">
                    <h2 class="fw-bold">Frequently Asked Questions</h2>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample" data-aos="zoom-in-left">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu JejakSiKecil?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>JejakSiKecil</strong> merupakan website yang menyediakan informasi mengenai
                                    pertumbuhan dan perkembangan anak, serta memberikan kesempatan untuk berbagi
                                    informasi mengenai tumbuh kembang anak dengan menulis artikel.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    Bagaimana cara menulis artikel?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Untuk menulis artikel,</strong> Anda perlu membuat akun terlebih dahulu dan
                                    kemudian login ke dalam sistem. Setelah itu, Anda dapat menulis dan mengirimkan
                                    artikel melalui halaman khusus untuk penulis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    Apakah informasi yang disediakan terpercaya?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Informasi yang disediakan</strong> berasal dari sumber yang terpercaya dan
                                    ditinjau oleh ahli dalam bidang pertumbuhan dan perkembangan anak. Kami berusaha
                                    memberikan informasi yang akurat dan bermanfaat.
                                </div>
                            </div>
                        </div>
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

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        });
    </script>

    <!-- JS accordion FAQ close  -->
    <script>
        // Ambil semua elemen tombol accordion
        var accordionButtons = document.querySelectorAll('.accordion-button');

        // Loop melalui setiap tombol accordion
        accordionButtons.forEach(function (button) {
            // Tambahkan event listener untuk setiap tombol
            button.addEventListener('click', function () {
                // Toggle class 'collapsed' pada tombol yang diklik
                button.classList.toggle('collapsed');

                // Ambil target collapsible dari data-bs-target atribut tombol
                var targetId = button.getAttribute('data-bs-target');

                // Toggle class 'show' pada collapsible yang ditargetkan
                document.querySelector(targetId).classList.toggle('show');
            });
        });
    </script>
</body>

</html>