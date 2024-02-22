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

        <!-- DATA GURU -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Data Guru</h1>
                    <h4 class="tagline">Berikut beberapa data guru yang ada</h4>
                </div>
            </div>
        </div>
        <div class="class-course">
            <div class="container">
                <div class="row">
                    <!-- Nav Tabs -->
                    <div class="teacher-nav wow fadeInUp" role="tablist" id="planTabs">
                        <ul class="no-margin no-padding">
                            <?php
                            include "admin/config/koneksi.php";
                            $sql = mysqli_query($conn, "SELECT * FROM guru");
                            while ($b = mysqli_fetch_assoc($sql)) {

                            ?>
                                <li role="presentation" class="col-md-3 active">
                                    <a href="#stelarobson" aria-controls="stelarobson" role="tab" data-toggle="tab">
                                        <img src="admin/foto/guru/<?php echo $b['foto'] ?>" alt="" />

                                        <a href="#" class="form-control" style="margin-top: 5px; color:#0097a7"><i class="fa fa-user"></i> <?php echo $b['nama'] ?></a>
                                        <a href="#" class="form-control" style="margin-top: 5px; color:#0097a7;"><i class="fa fa-book"></i> <?php echo $b['mapel'] ?></a>
                                        <a href="mailto:<?php echo $b['email'] ?>" class="form-control" style="margin-top: 5px; margin-bottom: 15px">
                                            <i class="fa fa-envelope"></i> <?php echo $b['email'] ?></a></br>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- Nav Tabs End -->
                </div>
                <!-- Accordion End -->


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