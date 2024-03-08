<?php

$sql = mysqli_query($conn, "SELECT * FROM guru");
$b = mysqli_fetch_assoc($sql);

$data_guru = mysqli_query($conn, "SELECT * FROM guru");
$jumlah_guru = mysqli_num_rows($data_guru);

$e = mysqli_query($conn, "SELECT * FROM ppdb");
$f = mysqli_fetch_assoc($e);

$data_ppdb = mysqli_query($conn, "SELECT * FROM ppdb");
$jumlah_ppdb = mysqli_num_rows($data_ppdb);

$g = mysqli_query($conn, "SELECT * FROM testi");
$h = mysqli_fetch_assoc($g);

$data_testi = mysqli_query($conn, "SELECT * FROM testi");
$jumlah_testi = mysqli_num_rows($data_testi);

$i = mysqli_query($conn, "SELECT * FROM prestasi");
$j = mysqli_fetch_assoc($i);

$data_prestasi = mysqli_query($conn, "SELECT * FROM prestasi");
$jumlah_prestasi = mysqli_num_rows($data_prestasi);

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto w-p50">
                <h3 class="page-title">HALAMAN UTAMA</h3>
                <div class="d-inline-block align-items-center">
                    <nav>

                    </nav>
                </div>
            </div>
            <!--<div class="right-title text-right w-170">
                <span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
                    <span class="subheader_daterange-label">
                        <span class="subheader_daterange-title"></span>
                        <span class="subheader_daterange-date text-primary"></span>
                    </span>
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </span>
            </div>-->
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-success">
                    <div class="flexbox">
                        <div id="linechart"></div>
                        <div class="text-right">
                            <span><a href="guru.php">
                                    <font color="white">Data Guru</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_guru; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-warning">
                    <div class="flexbox">
                        <div id="barchart"></div>
                        <div class="text-right">
                            <span><a href="proli.php">
                                    <font color="white">Program Keahlian</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_proli; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-primary">
                    <div class="flexbox">
                        <div id="discretechart"></div>
                        <div class="text-right">
                            <span><a href="pendaftaran.php">
                                    <font color="white">Data Pendaftar</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_ppdb; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        <div id="linechart"></div>
                        <div class="text-right">
                            <span><a href="testi.php">
                                    <font color="white">Testimoni</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_testi; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        <div id="linechart"></div>
                        <div class="text-right">
                            <span><a href="prestasi.php">
                                    <font color="white">Prestasi</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_prestasi; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="box box-body bg-dark">
                    <div class="flexbox">
                        <div id="linechart"></div>
                        <div class="text-right">
                            <span><a href="agenda.php">
                                    <font color="white">Agenda</font>
                                </a></span><br>
                            <span>
                                <i class="ion-ios-arrow-up text-white"></i>
                                <span class="font-size-18 ml-1"><?php echo $jumlah_agenda; ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- /.content -->
</div>