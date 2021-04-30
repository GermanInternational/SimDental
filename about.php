<?php
session_start();
include 'libreria/Administrador.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>German International</title>
	<meta charset="UTF-8">
	<meta name="description" content="ProDent dentist template">
	<meta name="keywords" content="prodent, dentist, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/logo1.PNG" rel="shortcut icon"/>

	<!-- Google Font -->   
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- Site Logo -->
			<a href="index.html" class="site-logo">
				<img src="img/logo1.PNG" alt="" height="60" width="140">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				<li><a href="index.html">Incio</a></li>
				<li class="active"><a href="about.html">Nosotros</a></li>
				<li><a href="service.html">Servicio</a></li>
				<li><a href="sesion.html">Sesion</a></li>
				<!--<li><a href="blog.html">Blog</a></li>-->
				<li><a href="contact.html">Contactenos</a></li>
				<!--<li><a href="elements.html"><i class="flaticon-020-decay"></i></a></li>-->
			</ul>
		</div>
		<div class="header-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/map-marker.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Servicio dental</h6>
							<p>Colombia</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/clock.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Horarios</h6>
							<p>lun - vir: 8:00 - 19:00 </p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/phone.png" alt="">
						</div>
						<div class="hi-content">
							<h6>3116194941</h6>
							<p>Contactanos GermanInternational</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/calendar.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Pide tu cita</h6>
							<p>Colombia</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

                                                
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-info-bg/1.jpg">
		<div class="container">
			<h2>Nosotros</h2>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Intro section -->
	
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="featured-box spad">
						<div class="feature-item">
							<i class="flaticon-008-protection"></i>
							<?php
								$administrador = new Administrador();
                    			$rows = $administrador->nosotros();
							?>
							<div class="fi-content">
								<h4>Mision</h4>
								<p align="justify">
									<?php
										foreach ($rows as $row){
											echo $row['Mision'];
										}
									?>
								</p>
							</div>
						</div>
						<div class="feature-item">
							<i class="flaticon-018-dentist-1"></i>
							<div class="fi-content">
								<h4>Vision</h4>
								<p align="justify"><?php
										foreach ($rows as $row){
											echo $row['Vision'];
										}
									?></p>
							</div>
						</div>
						<!--<div class="feature-item">
							<i class="flaticon-007-computer-1"></i>
							<div class="fi-content">
								<h4>The best equipment</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper venenatis turpis eget suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu nulla sollicitudin, vestibulum.</p>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Featured section end -->



	<!-- Doctors section -->
	<section class="doctors-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Los Doctores</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="doctor-item di-bg">
						<div class="di-pic set-bg" data-setbg="img/doctors/1.jpg"></div>
						<h4>Dr James Scott</h4>
						<p>Head of the team</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3  col-sm-6">
					<div class="doctor-item">
						<div class="di-pic set-bg" data-setbg="img/doctors/2.jpg"></div>
						<h6>Dr Tailor Smith</h6>
						<p>Ortodontist</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3  col-sm-6">
					<div class="doctor-item">
						<div class="di-pic set-bg" data-setbg="img/doctors/3.jpg"></div>
						<h6>Dr Jane Williams</h6>
						<p>Ortodontist</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3  col-sm-6">
					<div class="doctor-item">
						<div class="di-pic set-bg" data-setbg="img/doctors/4.jpg"></div>
						<h6>Dr Mark Smith</h6>
						<p>Ortodontist</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-3  col-sm-6">
					<div class="doctor-item">
						<div class="di-pic set-bg" data-setbg="img/doctors/5.jpg"></div>
						<h6>Dr Tailor Smith</h6>
						<p>Ortodontist</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Doctors section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text text-white">
					<!--<h4>Subscrieb to our newsletter</h4>
					<p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus.</p>-->
				</div>
				<div class="col-lg-5 text-lg-right">
					<!--<form class="newsletter-form">
						<input type="text" placeholder="Your E-mail">
						<button class="site-btn sb-dark">Subscribe</button>
					</form>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->



	<!-- Footer top section -->
	<section class="footer-top-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget">
						<div class="fw-about">
							<img src="img/logo1.PNG" alt="" width="200">
							<p>Empresa de soluciones sistematicas</p>
							<div class="fw-social">
								<a href=""><i class="fa fa-pinterest"></i></a>
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-dribbble"></i></a>
								<a href=""><i class="fa fa-behance"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-5">
					<div class="footer-widget">
						<div class="fw-links">
							<h5 class="fw-title">Menu</h5>
							<ul>
								<li><a href="index.html">Incio</a></li>
								<li><a href="about.html">Nosotros</a></li>
								<li><a href="service.html">Servicio</a></li>
								<li><a href="sesion.html">Sesion</a></li>
								<!--<li><a href="blog.html">Blog</a></li>-->
								<li><a href="contact.html">Contactenos</a></li>
								<!--<li><a href="elements.html"><i class="flaticon-020-decay"></i></a></li>-->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-7">
					<div class="footer-widget">
						<div class="fw-timetable">
							<div class="fw-title"><p align="center">Atencion al Cliente GermanInternational</p></div>
							<div class="timetable-content">
								<table>
									<tr>
										<td>Lunes</td>
										<td>8:00am - 12:00pm y 2:00 - 6:00</td>
									</tr>
									<tr>
										<td>Martes</td>
										<td>8:00am - 12:00pm y 2:00 - 6:00</td>
									</tr>
									<tr>
										<td>Miercoles</td>
										<td>8:00am - 12:00pm y 2:00 - 6:00</td>
									</tr>
									<tr>
										<td>Jueves</td>
										<td>8:00am - 12:00pm y 2:00 - 6:00</td>
									</tr>
									<tr>
										<td>Viernes</td>
										<td>8:00am - 12:00pm y 2:00 - 6:00</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<!--<ul class="footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Contact</a></li>
			</ul>-->
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos lo derechos reservados | German International <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="" target="_blank">German international</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer top section end -->
                                                

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

    </body>
</html>