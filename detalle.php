<?php   

    $id = $_GET['id'];

    if ($id == 1) {
        $title = 'Gestor de Pagos (Entidad prestadora de dinero)';
        $image = 6;
        $imagePrincipalipal = 'gestor';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada.';
		$descripcion2 = 'Hola';
    }elseif ($id == 2) {
        $title = 'Juego tipo Triqui o 3 en linea';
        $image = 4;
        $imagePrincipalipal = 'juego';
		$descripcion = 'Está hecho con JavaScript puro y tiene PHP para guardar las sesiones en la base de datos MySQL utilizada.';
		$descripcion2 = '';
    }elseif ($id == 3) {
        $title = 'Plataforma Para generar Certificados';
        $image = 6;
        $imagePrincipalipal = 'certificados';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada. (Single Page App).';
		$descripcion2 = '';
    }elseif ($id == 4) {
        $title = 'Bl Tienda Mini tienda virtual';
        $image = 7;
        $imagePrincipalipal = 'bltiendaMini';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada.';
		$descripcion2 = '';
    }else {
        header('location:index.html');
    }


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sebastian Aguirre</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">Desarrollador</a>
				<nav>
					<ul>
						<li><a href="index.html">Inicio</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major"><?php echo $title ?></h1>
							<!-- Image -->
								<section>
									<h2>Imagenes</h2>
									<div class="box alt">
										<div class="row gtr-uniform">
											<div class="col-12"><span class="image fit"><img src="images/<?php echo $imagePrincipalipal.'.png'; ?>" alt="" /></span></div>
                                            <?php 
                                                for ($i=1; $i <= $image; $i++) { 
                                                    ?>
                                                        <div class="col-6"><span class="image fit"><img src="images/<?php echo $imagePrincipalipal.'_'.$i.'.png'; ?>" alt="" /></span></div>
                                                    <?php
                                                }

                                            ?>
										</div>
									</div>
									<h3>Descripción:</h3>
                                    <!-- <span class="image left"><img src="images/pic05.jpg" alt="" /></span> -->
                                    <!-- <span class="image right"><img src="images/pic06.jpg" alt="" /></span> -->
									<p><?php echo $descripcion; ?></p>
									<p><?php if ($descripcion2 <> '') { echo $descripcion2; }?></p>
								</section>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Todos los derechos reservados.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>