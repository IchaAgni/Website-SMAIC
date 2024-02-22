<?php
include "admin/config/koneksi.php";
include "pondasi/kepala.php";
?>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator"> 
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Fasilitas SMA Islam Cipasung</h2>
                        <ul class="bread-list">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Fasilitas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- accordion -->
                                <div class="wrapper">
                                    <!-- Accordion -->
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM fasilitas");
                                    while ($b = mysqli_fetch_assoc($sql)) {
                                        $id = $b['id']; // Gunakan ID fasilitas sebagai ID accordion
                                    ?>
                                    <div class="parent-tab">
                                        <input type="radio" name="tab" id="tab-<?php echo $id; ?>" checked>
                                        <label for="tab-<?php echo $id; ?>">
                                            <span><?php echo $b['judul'] ?></span>
                                            <div class="icon"><i class="fas fa-plus"></i></div>
                                        </label>
                                        <div class="content">
                                            <img src="./admin/foto/fasilitas/<?php echo $b['foto']; ?>" alt="Gambar">
                                            <p><?php echo $b['deskripsi'] ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- End Accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <!-- Widget lainnya di sini -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Single News -->

<?php
include "pondasi/kaki.php";
?>
</body>