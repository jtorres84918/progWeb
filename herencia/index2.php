 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Prueba Include y require PHP</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/miEstilo.css">
</head>

<body data-spy="scroll" data-target="#miPrimerScroll" data-offset="1">

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-4" id="miPrimerScroll">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#seccion1">Uso de funciones en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion2">Intro POO en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion3">Herencia en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion4">Atrubutos y Métodos estáticos</a>
					</li>
				</ul>
			</nav>
			<div class="col-sm-9 col-8">
				<div id="seccion1" class="bg-warning">
					<h1>Uso de funciones en PHP</h1>
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/php/funciones.php';
						echo "La hipotenusa es: ".pitagoras(4,5)."\n";?></p>
				</div>
				<div id="seccion2" class="bg-secondary">
					<h1>Introducción a POO en PHP</h1>
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/php/objeto.php';?></p>
				</div>
				<div id="seccion3" class="bg-danger">
					<h1>Herencia en PHP</h1>
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/php/herencia.php';?></p>
				</div>
				<div id="seccion4" class="bg-info">
					<h1>Uso Static en PHP</h1>
					<p> <?php require $_SERVER['DOCUMENT_ROOT'].'/php/estatico.php';?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html> 

