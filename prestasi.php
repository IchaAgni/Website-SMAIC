<?php
include "pondasi/kepala.php";
?>

<body>

    <!-- MAIN WRAPPER START
        ============================================= -->
    <!-- HEADER END -->

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">

        <div class="our-features grey-background">
            <div class="container">
                <div class="heading-block wow fadeIn">
                    <h2>Prestasi</h2>
                    <h4 class="tagline">Berikut Beberapa Prestasi</h4>
                </div>

                <div class="row">
                    <div class="features">

                        <?php
                        include "admin/config/koneksi.php";
                        $sql = mysqli_query($conn, "SELECT * FROM prestasi");
                        while ($b = mysqli_fetch_assoc($sql)) {

                        ?>

                            <div class="feature-item many-support col-md-4 wow fadeInUp">
                                <div class="feature-icon">
                                    <div class="icon icon-favorite21"></div>
                                </div>
                                <div class="feature-desc">
                                    <h4><?php echo $b['prestasi'] ?></h4>
                                    <p><?php echo $b['detail'] ?>.</p>
                                    <p>
                                    <div class="btn btn-success btn btn-outline">
                                        <a href="#"><?php echo $b['tgl'] ?></a>
                                    </div>
                                    </p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>
        <!-- FEATURES SECTION END -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 pull-left wow fadeInUp">
                            <h3>Ayo Daftar Sekarang Juga !</h3>
                        </div>

                        <div class="col-md-4 wow fadeInUp">
                            <div class="button-normal white pull-right">
                                <a href="pendaftaran.php" class="no-margin">Daftar Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- COPYRIGHT START
            ============================================= -->

    <?php
    include "pondasi/kaki.php";
    ?>
    <!-- COPYRIGHT END -->

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    <!-- External -->
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>