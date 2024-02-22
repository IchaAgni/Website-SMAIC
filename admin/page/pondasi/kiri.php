<?php

$s = mysqli_query($conn, "SELECT * FROM profil");
$l = mysqli_fetch_assoc($s);

$v = mysqli_query($conn, "SELECT * FROM visimisi");
$m = mysqli_fetch_assoc($v);

$p = mysqli_query($conn, "SELECT * FROM ppdb");
$n = mysqli_fetch_assoc($p);
?>
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header nav-small-cap" href="index.php">ABOUT US</li>
        

            <li class="active">
                <a href="index.php">
                    <i class="mdi mdi-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="active">
                <a href="sejarah.php">
                    <i class="mdi mdi-library"></i>
                    <span>Sejarah</span>
                </a>
            </li>
        
            <li class="active">
                <a href="visimisi.php?id=<?php echo $m['id'] ?>">
                    <i class="mdi mdi-tag-plus"></i>
                    <span>Visi dan Misi</span>
                </a>
            </li>
            <li class="active">
                <a href="struktur.php">
                    <i class="mdi mdi-view-quilt"></i>
                    <span>Struktur</span>
                </a>
            </li>

            
        <li class="header nav-small-cap" href="index.php">PAGE</li>
        <li class="active">
                <a href="image_slider.php">
                    <i class="mdi mdi-image"></i>
                    <span>Gambar Slider</span>
                </a>
            </li>
            <li class="active">
                <a href="fasilitas.php">
                    <i class="mdi mdi-home-circle"></i>
                    <span>Fasilitas</span>
                </a>
            </li>
            <li class="active">
                <a href="Berita.php">
                    <i class="mdi mdi-calendar-text"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li class="active">
                <a href="Ekskul.php">
                    <i class="mdi mdi-calendar-text"></i>
                    <span>Ekstakulikuler</span>
                </a>
            </li>

            <li class="active">
                <a href="prestasi.php">
                    <i class="mdi mdi-school"></i>
                    <span>Prestasi</span>
                </a>
            </li>
            <!--<li class="active">
                <a href="prestasi.php">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span>Prestasi Sekolah</span>
                </a>
            </li>-->
            
            <li class="active">
                <a href="testi.php">
                    <i class="mdi mdi-contact-mail"></i>
                    <span>Testimoni</span>
                </a>
            </li>

        

            </br>
            <!--<li class="header nav-small-cap">Penerimaan Siswa Baru</li>
            <li class="active">
            <li class="active">
                <a href="pendaftaran.php">
                    <i class="mdi mdi-file-plus"></i>
                    <span>PPDB</span>
                </a>
            </li>-->

        </ul>
    </section>
</aside>