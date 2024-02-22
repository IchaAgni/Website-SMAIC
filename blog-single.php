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
							<h2>Berita</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Berita</li>
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
								<?php
										include "admin/config/koneksi.php";
										$sql = mysqli_query($conn, "SELECT * FROM berita");
										while ($b = mysqli_fetch_assoc($sql)) {
										?>
									<!-- News Head -->
									<div class="news-head">
									<img src="admin/foto/berita/<?php echo $b['foto'] ?>. "alt="Gambar">
									</div>
									<!-- News Title -->
									<h1 class="news-title"><?php echo $b['judul'] ?></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											
											<span class="date"><?php echo $b['tgl'] ?></span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
										
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										<p><?php echo $b['detail'] ?></p>
										<?php } ?>
										
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="blog-comments">
									<h2>All Comments</h2>
									<div class="comments-body">
										<!-- Single Comments -->
										<div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author1.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Afsana Mimi</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<div class="single-comments left">
											<div class="main">
												<div class="head">
													<img src="img/author2.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Naimur Rahman</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="img/author3.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Suriya Molharta</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>		
										<!--/ End Single Comments -->											
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="comments-form">
									<h2>Leave Comments</h2>
									<!-- Contact Form -->
									<form class="form" method="post" action="mail/mail.php">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-user"></i>
													<input type="text" name="first-name" placeholder="First name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="text" name="last-name" placeholder="Last name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="email" name="email" placeholder="Your Email" required="required">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group message">
													<i class="fa fa-pencil"></i>
													<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group button">	
													<button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
												</div>
											</div>
										</div>
									</form>
									<!--/ End Contact Form -->
								</div>
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
								<p>
									© Develop By
									<a href="https://www.labtekcmr.com" target="_blank">CMR</a>
								  </p>
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
    </body>
</html>