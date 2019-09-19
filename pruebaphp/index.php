 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Prueba Include y require PHP</title>
<link rel="stylesheet" href="css/bootstrap.css">
 <style>
 //COMO TRABAJO EN CLASE DEBE SACAR ESTE ESTILO A UN ARCHIVO APARTE 
  body {
    position: relative;
  }
  ul.nav-pills {
    top: 15px;
    position: fixed;
  }
  div.col-8 div {
    height: 1000px;
  }
 </style> 
</head>

<body data-spy="scroll" data-target="#miPrimerScroll" data-offset="1">

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-4" id="miPrimerScroll">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#seccion1">Sentencia IF en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion2">Sentencia Switch en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion3">Sentencia While en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion4">Sentencia For en PHP</a>
					</li>
				</ul>
			</nav>
			<div class="col-sm-9 col-8">
				<div id="seccion1" class="bg-secondary">
					<h1>Uso de IF en PHP</h1>
					<p><?php include $_SERVER['DOCUMENT_ROOT'].'/php/ifPhp.php'; ?>
				</div>
				<div id="seccion2" class="bg-info">
					<h1>Uso de Switch en PHP</h1>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/php/switch.php'; ?></p>
				</div>
				<div id="seccion3" class="bg-warning">
					<h1>Uso de While en PHP</h1>
					<p>Como trabajo en clase debe modificar el script de PHP de while a Do While!</p>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/php/while.php'; ?></p>
				</div>
				<div id="seccion4" class="bg-success">
					<h1>Uso de for en PHP</h1>
					<p>Como trabajo en clase cree el script PHP que recorra un arreglo con FOR, ojo este script debe estar creado en la carpeta que contiene los scripts php</p>
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

