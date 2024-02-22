<?php
include "pondasi/kepala.php";
include "admin/config/koneksi.php";
?>
		<!-- Title -->
        <title>Visi Misi - SMAI Cipasung</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/logo-SMAI.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		
		<!-- Breadcrumbs -->
        
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Visi dan Misi SMA Islam Cipasung</h2>
							<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Visi Misi</li>
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
									
                                 <!-- visi misi -->
                                   
        <br> 
        <div class="process-wrapper">
        <div id="progress-bar-container">
            <ul>
                <li class="step step01 active"><div class="step-inner">Visi</div></li>
                <li class="step step02"><div class="step-inner">Misi</div></li>
                <li class="step step03"><div class="step-inner">Tujuan</div></li>
                <li class="step step04"><div class="step-inner">Budaya</div></li>
            </ul>
            
            <div id="line">
                <div id="line-progress"></div>
            </div>
        </div>
		<?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM visimisi");
                    while ($b = mysqli_fetch_assoc($sql)) {
		?>
		<div id="progress-content-section">
            <div class="section-content discovery active">
                <h2>Visi</h2>
                <p><?php echo $b['visi'] ?></p>
            </div>
            
            <div class="section-content strategy">
                <h2>Misi</h2>
				<p><?php echo $b['misi'] ?></p>
            </div>
            
            <div class="section-content creative">
                <h2>Tujuan</h2>
                <p><?php echo $b['tujuan'] ?></p>
            </div>
            
            <div class="section-content production">
                <h2>Budaya</h2>
                <p><?php echo $b['budaya'] ?></p>
            </div>
            
            </div>
        </div>
        
       <?php } ?>
			</div>
					</div>
							<div class="col-12">
							</div>
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
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>SMA Islam Cipasung</h2>
								<p>SMA Islam Cipasung adalah Sekolah Menengah Atas yang memakai panduan kurikulum belajar pemerintah yaitu SMA 2013 MIPA. </p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Tautan</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
         <script>
            
            $(".step").click( function() {
            $(this).addClass("active").prevAll().addClass("active");
            $(this).nextAll().removeClass("active");
        });
        
        $(".step01").click( function() {
            $("#line-progress").css("width", "3%");
            $(".discovery").addClass("active").siblings().removeClass("active");
        });
        
        $(".step02").click( function() {
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });
        
        $(".step03").click( function() {
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });
        
        $(".step04").click( function() {
            $("#line-progress").css("width", "100%");
            $(".production").addClass("active").siblings().removeClass("active");
        });
         
            </script>
    </body>
</html>