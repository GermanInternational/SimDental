<?php
session_start();
include '../libreria/Administrador.php';
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
	<!--<link href="img/favicon.ico" rel="shortcut icon"/>-->
	<link href="../img/logo1.PNG" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>


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
			<a href="indexAdministrador.php" class="site-logo">
				<img src="../img/logo1.PNG" alt="" height="60" width="140">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				<li><a href="indexAdministrador.php">Incio</a></li>
				<li><a href="usuarioAdministrador.php">Usuario</a></li>
                <li class="active"><a href="indexDeuda.php">Accion deuda</a></li>
                <li><a href="logout.php">Cerrar Sesion</a></li>
                <?php
                    if (!isset($_SESSION["nombre"])){
                        header('Location: ../index.html');
                    }
                ?>
				<!--<li><a href="elements.html"><i class="flaticon-020-decay"></i></a></li>-->
			</ul>
		</div>
		<div class="header-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="../img/icons/map-marker.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Servicio dental</h6>
							<p>Colombia</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="../img/icons/clock.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Horarios</h6>
							<p>lun - vir: 8:00 - 19:00 </p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="../img/icons/phone.png" alt="">
						</div>
						<div class="hi-content">
							<h6>3116194941</h6>
							<p>Contactanos</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="../img/icons/calendar.png" alt="">
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


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<!-- item -->
			<div class="hs-item set-bg text-white" data-setbg="../img/slide-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<h2>Bienvenido Administrador</h2>
							<p>Administrador <?php echo $_SESSION["nombre"]; ?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- item -->
			<!--<div class="hs-item set-bg text-white" data-setbg="img/slide-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<h2>Best Dentist.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text text-white">
					<!--<h4>Nosotros</h4>-->
					<!--<p>Si quieres saber mas de nosotros</p>-->
				</div>
				<div class="col-lg-5 text-lg-right">
					<!--<a href="about.html" class="site-btn sb-light">Nosotros</a>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Banner section end -->



	<!-- About section -->
	<!--<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/yo.jpg" alt="" height="" width="350">
				</div>
				<div class="col-lg-7 about-text">
					<h2>Creador de aplicativo</h2>
					<p>- Ingeniero de sistemas y Telecomunicaciones</p>
					<p>- Especialista en Metodologias de la calidad para el desarrolo de software</p>
					<p>- Manejo de diferentes lenguajes programacion</p>
					<p>- Diplomado en lenguajs web y aplicativos moviles</p>
					<p>- Diplomado en docencia universitaria</p>
					<img src="img/awards.jpg" alt="">
				</div>
			</div>
		</div>
	</section>-->
	<!-- About section end -->

    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 banner-text text-white">
                    <!--<h4>Nosotros</h4>-->
                    <!--<p>Si quieres saber mas de nosotros</p>-->
                </div>
                <div class="col-lg-5 text-lg-right">
                    <!--<a href="about.html" class="site-btn sb-light">Nosotros</a>-->
                </div>
            </div>
        </div>
    </section>


	<!-- Facts section -->
	<!--<section class="facts-section set-bg" data-setbg="img/facts-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-003-tooth-3"></i>
					<h2>531</h2>
					<p>X-rays</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-002-toothbrush-1"></i>
					<h2>14K</h2>
					<p>Tooth Brushes</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-030-tooth"></i>
					<h2>678</h2>
					<p>Extractions</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-023-tooth-1"></i>
					<h2>2134</h2>
					<p>Happy Pacients</p>
				</div>
			</div>
		</div>
	</section>-->
	<!-- Facts section end -->



	<!-- Services section -->
	<!--<section class="services-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Our Services</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-020-decay"></i>
					</div>
					<div class="service-content">
						<h4>Crowns Bridges</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sem per venenatis turpis.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-011-implants"></i>
					</div>
					<div class="service-content">
						<h4>Implants</h4>
						<p>Phasellus vehicula tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-024-toothbrush"></i>
					</div>
					<div class="service-content">
						<h4>Teeth Whitening</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sem per venenatis turpis,</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-019-dentist"></i>
					</div>
					<div class="service-content">
						<h4>Root Canals</h4>
						<p>Phasellus vehicula tempus orci vel consequat. Nullam lorem sem, viverra a rutrum sed.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-001-tooth-4"></i>
					</div>
					<div class="service-content">
						<h4>Wisdom Teeths</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sem per venenatis turpis,</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-029-braces"></i>
					</div>
					<div class="service-content">
						<h4>Braces</h4>
						<p>Nullam lorem sem, viverra a rutru m sed, gravida mattis magna. Suspendisse vitae commodo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- Services section end -->


	<!-- Gallery section -->
	<!--<div class="gallery-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/1.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/2.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/3.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>-->
	<!-- Gallery section end -->


	<!-- Testimonials section -->
	<section class="testimonials-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Lista de usuarios en la base de datos</h2>
			</div>
		</div>
		
		<div class="testimonials-warp">
            <div class="ts-content">
                <div align="center">
                <?php
                    $administrador = new Administrador();
                    $rows = $administrador->listarTratamientoConCondicion($_GET['tratamiento']);
                    echo '<form action="opcionDeuda.php" method="post">';
                    echo '<div class="form-group" align="RIGHT">';
							 echo '<input type="text" name="buscardoTratamiento" class="form-control" style="width : 400px; heigth : 100px" placeholder="BuscardoTratamiento"/>';
					echo '</div>';
                    echo '<table class="table">';
                            echo '<tr>';
                                echo '<td>';
                                    echo 'Seleccion';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Nombre';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Estado';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Descripcion';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Usuario';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Doctor';
                                echo '</td>';
                                echo '<td>';
                                    echo 'Nombre tramiento';
                                echo '</td>';
                            foreach ($rows as $row) {
                                $idUser = $row['idDental_treatment'];
                                echo '<tr>';
                                    echo '<td>';
                                        echo "<input type='checkbox' name='idUser' class='form-check-input' id='exampleCheck1' value='$idUser'>";
                                     echo "<input type='hidden' id='tipoDeudaRegistrar' name='tipoDeudaRegistrar' value=''>";
                					echo "<input type='hidden' name='tipoPlan' value='eliminarTratamiento'>";
                                    echo '</td>';
                                    echo '<td>';
                                        echo $row['name'];
                                    echo '</td>';
                                    echo '<td>';
                                        if($row['status'] == 1){
                                            echo 'Activo';
                                        }
                                        elseif($row['status'] == 2){
                                            echo 'Inactivo';
                                        }
                                        else{
                                            echo 'Terminado';
                                        }
                                    echo '</td>';
                                    echo '<td>';
                                        echo $row['description'];
                                    echo '</td>';
                                    echo '<td>';
                                    	$rows1 = $administrador->listarUsuarioConId($row['User_idUser']);
                                    	foreach ($rows1 as $row1){
                                    		echo $row1['name'].''.$row1['last_name'];
                                    	}
                                    echo '</td>';
                                    echo '<td>';
                                        $rows2 = $administrador->listarDoctoresConId($row['Doctor_idDoctor']);
                                    	foreach ($rows2 as $row2){
                                    		echo $row2['name'].''.$row2['last_name'];
                                    	}
                                    echo '</td>';
                                     echo '<td>';
                                        //echo $row['type_debt_idtype_debt'];
                                         $rows3 = $administrador->listaTipoTramiento($row['type_debt_idtype_debt']);
                                    	foreach ($rows3 as $row3){
                                    		echo $row3['name'];
                                    	}
                                    echo '</td>';
                                echo '</tr>';
                            }
                            echo '</tr>';
                    echo '</table>';
                    //echo '<input type="submit" class="btn btn-danger" value="Eliminar"/>';

                echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>Eliminar</button>";
                ?>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Esta seguro que quiere eliminarlo?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <input type="submit" class="btn btn-danger" value="Eliminar"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        echo "</form>";
                    ?>
                </div>
            </div>
		</div>
	</section>
	<!-- Testimonials section end -->


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
<!--	<section class="footer-top-section set-bg" data-setbg="img/footer-bg.jpg">
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
							<h5 class="fw-title">Our Services</h5>
							<ul>
								<li><a href="">Dental Implants</a></li>
								<li><a href="">Braces</a></li>
								<li><a href="">Visdon Theet</a></li>
								<li><a href="">Porcelain Veneers</a></li>
								<li><a href="">Teeth Whitening</a></li>
								<li><a href="">Dental Bridges</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-7">
					<div class="footer-widget">
						<div class="fw-timetable">
							<div class="fw-title">Opening Hours</div>
							<div class="timetable-content">
								<table>
									<tr>
										<td>Monday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
									<tr>
										<td>Tuesday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
									<tr>
										<td>Wednesday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
									<tr>
										<td>Thursday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
									<tr>
										<td>Friday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
									<tr>
										<td>Sunday</td>
										<td>8:00am - 12:00pm</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
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
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>

    </body>
</html>
