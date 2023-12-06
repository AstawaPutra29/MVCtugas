<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Layang - Layang</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end ite" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#projects">Gallery</a>
                                </li>
                                <?php if (isset($_SESSION['username'])) : ?>
                                    <li class="nav-item mr-3">
                                        <a href="" class="nav-link">Upload</a>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link text-white"><?= $_SESSION['username']; ?></span>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= BASEURL ?>/auth/logout" class="nav-link"> Log Out</a>
                                    </li>
                                <?php else : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL ?>/auth/login">Login</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!-- banner -->
                <section id="banner">
                    <!-- BANNER WITH IMAGE BACKGROUND START -->
                    <div class="bg-dark border shadow" style="background-image: url(<?= BASEURL ?>/img/Janggan.jpg);background-repeat: no-repeat;background-size: cover; background-position: 0 -400px;">

                        <!-- .container start -->
                        <div class="container">

                            <!-- .row start -->
                            <div class="row my-5" style="height: 400px;">

                                <!-- .col start -->
                                <div class="col my-5 text-center">

                                    <h1 class="my-5">
                                        <span class="fw-bold my-5 text-white">"Melayangan"</span>
                                    </h1>
                                </div>
                                <!-- .col end -->

                            </div>
                            <!-- .row end -->

                        </div>
                        <!-- .container end -->

                    </div>
                    <!-- BANNER WITH IMAGE BACKGROUND END -->
                </section>
                <!-- end of banner -->

                <!-- about -->
                <section id="about">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col text-center text-dark">
                                <h2>About</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center text-dark">
                                <p>tradisi melayangan berkaitan erat dengan cerita rare angon. Dewa Siwa dalam manifestasinya sebagai Rare Angon merupakan Dewa Layang-layang. Diceritakan, pada musim layangan atau setelah panen, Rare Angon turun ke Bumi. Ia
                                    diiringi tiupan seruling sebagai pemanggil sang angin. Para petani dan anak gembala juga bersenang-senang setelah musim panen ini. Mereka mempergunakan waktu itu untuk bermain layang-layang sambil menjaga ternak.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-dark">
                                <p>
                                    1. Bebean <br>Layang-layang bebean bentuknya mirip seperti ikan. Namanya berasal dari kata "be" yang berarti ikan. Bentuk layangan ini berorientasi pada arah delapan mata angin. Pada bagian tengah terdapat titik di bagian tengah.
                                </p>
                            </div>
                            <div class="col text-dark">
                                <p>
                                    2. Janggan <br>Bentuk layangan ini seperti naga. Layang-layang janggan memiliki ciri khas ekor berukuran sangat panjang, yang bisa mencapai lebih dari 100 meter. Saat ini sudah banyak kreasi layangan janggan, jadi tidak hanya berbentuk kepala naga. Ada layang-layang janggan berbentuk garuda, macan, dan lain-lain.
                                </p>
                            </div>
                            <div class="col text-dark">
                                <p>
                                    3. Pecukan <br>Layang-layang pecukan bentuknya seperti daun. Ketika diterbangkan, layangan ini akan terlihat seperti daun yang meliuk-meliuk jatuh dari pohon. Untuk mengendalikan layangan jenis ini, pemainnya harus memiliki kemampuan mumpuni. Kenapa begitu? Alasannya agar layangan bisa terbang stabil.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of about -->

                <!-- gallery -->
                <section id="projects">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <h2>Gallery</h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center text-center">
                            <?php foreach ($data["layangan"] as $lyg) : ?>
                                <div class="bg-light shadow-sm m-2 p-2 col-md-5">
                                    <img src="<?= BASEURL ?>/img/<?= $lyg["foto_layangan"] ?>" class="" alt="<?= $lyg["nama"] ?>" width="50%" />
                                    <div class="">
                                        <p class="text-dark">Nama : <?= $lyg["nama"] ?></p>
                                        <p class="text-dark">Ukuran : <?= $lyg["ukuran"] ?></p>
                                        <p class="text-dark">No. layangan : <?= $lyg["no_layangan"] ?></p>
                                        <p class="text-dark">Warna : <?= $lyg["warna_layangan"] ?></p>
                                        <p class="text-dark">Ukuran tali : <?= $lyg["ukuran_tali"] ?></p>
                                        <p class="text-dark">Jenis : <?= $lyg["jenis"] ?></p>
                                        <p class="text-dark">Kategori : <?= $lyg["kategori"] ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <!-- end of gallery -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-primary text-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>