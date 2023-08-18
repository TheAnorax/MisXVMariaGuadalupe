<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mis XV Años Maria Guadalupe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />


	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<?php
	// Conexión a la base de datos
	$conn = new mysqli("localhost", "root", "", "confirmxvmari");

	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$asist = $_POST["asist"];

		// Insertar los datos en la base de datos
		$sql = "INSERT INTO invitados (name, asist) VALUES ('$name', '$asist')";


		if ($conn->query($sql) === TRUE) {
			echo '
			
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script><script>
                Swal.fire({
                    icon: "success",
                    title: "¡Invitado confirmado!",
                    text: "Invitado confirmado con éxitos.",
                }).then(function() {
                    window.location.href = "' . $_SERVER['PHP_SELF'] . '";
                });
            </script>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$conn->close();
	?>

	<div class="fh5co-loader"></div>


	<div id="page">

		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div id="fh5co-logo"><a>MIS XV AÑOS</a></div>
					</div>
				</div>
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/fondoflower.png);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Maria Guadalupe</h1>
								<div class="simply-countdown simply-countdown-one"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h3>17 de febrero de 2024</h3>
						<p>Hay momentos inolvidables que se atesoran en el corazón y este día no será la excepción por eso quiero que me acompañes a celebrar Mis 15 años. </p>
					</div>

				</div>
			</div>
		</div>

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/fondos2.png);">
			<div class="overlay"></div>
			<div class="container">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<center>
								<div class="text-center" style="width: 390px; height: 360px;">
									<div class="event-wrap animate-box">
										<h3>CEREMONIA PRINCIPAL</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>1:00 PM - 3:00 PM</span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Sábado 17</span>
											<span>Febrero, 2024</span>
										</div>
										<div>
											<i class="icon-location"></i>
											<a href="https://www.google.com/maps?q=DIRECCIÓN" target="_blank">
												<i class="icon-map-location"></i>
												<p>La ceremonia religiosa se llevará a cabo en la iglesia....</p>
											</a>
										</div>
									</div>
								</div>
								<div class="text-center" style="width: 390px; height: 360px;">
									<div class="event-wrap animate-box">
										<h3>FIESTA DE XV AÑOS</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>3:00 PM</span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Sábado 17</span>
											<span>Febrero, 2024</span>
										</div>
										<div>
											<i class="icon-location"></i>
											<a href="https://goo.gl/maps/TbrenCd9gD5JG8tVA">
												<p>Después de la ceremonia religiosa será un gusto que nos acompañen a comer....</p>
											</a>
										</div>
									</div>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
		</div>
	</div>
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/fondoflower.png);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Confirma tu asistencia?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box confirm">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control" name="name" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Asistentes</label>
								<input type="text" class="form-control" name="asist" id="asist" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Confirmar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023 ARSA Company. Todos los derechos reservados.</small>
						<small class="block">Diseñado por <a href="" target="_blank">Rodrigo Arias Sánchez</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script>
	<script src="js/simplyCountdown.js"></script>
	<script src="js/sweetalert2.all.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="node_modules/sweetalert2/dist/sweetalert2.all.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		var targetDate = moment('2024-02-17');

		// Establecer idioma en español
		moment.locale('es');

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: targetDate.year(),
			month: targetDate.month() + 1,
			day: targetDate.date(),
			hours: targetDate.hours(),
			minutes: targetDate.minutes(),
			seconds: targetDate.seconds()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: targetDate.year(),
			month: targetDate.month() + 1,
			day: targetDate.date(),
			hours: targetDate.hours(),
			minutes: targetDate.minutes(),
			seconds: targetDate.seconds(),
			enableUtc: false
		});
	</script>

</body>

</html>