<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JejakSiKecil</title>
    
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!--Style CSS-->
    <link rel="stylesheet" href="../css/home.css" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins" rel="stylesheet" />
</head>

<body>
    <!-- Section Home -->
    <div class="navigation pe-1 pt-2 mb-4" style="background-color: #458fb1">
        <section id="home">
            <div class="container">
                <div class="bg-image">
                    <div class="row text-center my-auto pt-4 d-flex justify-content-center align-items-center">
                        <div>
                            <h1>JejakSiKecil</h1>
                            <p>Membimbing Langkah Kecil Menuju Masa Depan Besar</p>
                            <button type="button" class="btn rounded-pill"
                                style="background-color: #bef7ff; width: 20%; height: 6%">
                                Tulis Ceritamu!
                            </button>
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
                <div class="col-md-6 my-auto d-flex justify-content-end pe-5">
                    <img src="./images/kid-about.svg" class="img-fluid" />
                </div>
                <div class="col-md-6 my-auto pe-5">
                    <h2 class="fw-bold">Tentang</h2>
                    <p>
                        JejakSiKecil merupakan website yang menyediakan informasi mengenai
                        pertumbuhan dan perkembangan anak, serta memberikan kesempatan
                        untuk berbagi informasi mengenai tumbuh kembang anak dengan
                        menulis artikel.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Article -->
    <section id="artikel" class="mt-5 pt-5 pb-4">
        <div class="container">
            <div class="row titleberita">
                <div class="col-12">
                    <h1>Artikel terbaru</h1>
                </div>
            </div>

            <div class="row berita">
                <?php
                include 'database/Artikel.php';
                ?>

                <?php
                $artikel = new Artikel;

                $data = $artikel->tampilArtikel();
                $i = 1;
                foreach ($data as $row):
                    ?>
                    <div class="col-lg-6 maelee">
                        <img src="<?= $row['foto'] ?>" class="float-left">
                        <h3><?= $row['judul'] ?></h3>
                        <p><?= $row['artikel'] ?></p>
                        <small class="text-warning">
                            <?php
                            $harijam = $row['date'];
                            $date = strtotime($harijam);
                            echo date('M - H:I', $date);
                            ?>
                        </small>
                        <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>"><img src="img/next.png" alt="workingspace"
                                class="float-right" style="width:30px; height: 30px;"></a>

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
                <div class="col-md-6">
                    <h2 class="fw-bold">Frequently Ask Question</h2>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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

    <!-- JS Boostrap -->
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