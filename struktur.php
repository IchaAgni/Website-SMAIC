<?php
include "pondasi/kepala.php";
include "admin/config/koneksi.php";

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
							<h2>Struktur SMA Islam Cipasung</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Struktur</li>
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
									<!-- Struktur Head -->
									<?php
										include "admin/config/koneksi.php";
										$sql = mysqli_query($conn, "SELECT * FROM struktur");
										while ($b = mysqli_fetch_assoc($sql)) {
										?>
									<div class="news-head">
									<img src="admin/foto/struktur/<?php echo $b['foto'] ?>. "alt="Gambar" width="150">
									</div>
									
									<?php } ?>
									
								</div>
							</div>
							<div class="col-12"></div>
							
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Berita</h3>
								<ul class="categor-list">
									<li><a href="#">Project Siswa</a></li>
									<li><a href="#">Prestasi</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Ekstrakulikuler</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Postingan Terbaru</h3>
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/sidebar-berita-01.png" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">SMAI CIPASUNG Masuk Menjadi 7 SMA Unggul di Kabupaten Tasikmalaya</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2023</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/sidebar-berita-02.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Program Kegiatan Sekolah Semester Ganjil 2023/2024</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2023</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="img/sidebar-berita-03.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Tim Paskibra SMA Islam Cipasung</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2023</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">Blog</a></li>
									<li><a href="#">Osis</a></li>
									<li><a href="#">Berita</a></li>
									<li><a href="#">Pensi & Bazar</a></li>
									<li><a href="#">Hot News</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
		
		<?php

include "pondasi/kaki.php";

?>