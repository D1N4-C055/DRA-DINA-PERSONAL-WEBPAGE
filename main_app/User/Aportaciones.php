<?php
	include '../conexion.php';
	$comentarios="SELECT * FROM comentarios";
	$resComentarios=$mysqli->query($comentarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Corpus Lingüísticos D.E</title>
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilosPC.css">
	<link rel="stylesheet" type="text/css" href="../../Icons/fonts.css">
	<script language="Javascript"> document.oncontextmenu = function(){return false} </script>
</head>
<body>

	<div class="container">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-m">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">Corpus Lingüistico D.E</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-m">
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-folder-video"></span>Corpus LSM<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusLSM.php#entrevista_noe">Entrevista a Noe</a></li>
									<li><a href="CorpusLSM.php#entrevista_oscar">Entervista a Oscar</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-archive"></span>Corpus VFMR<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusVFMR.php#entrevista1">Entrevista 1 - Octubre 2009</a></li>
									<li><a href="CorpusVFMR.php#entrevista2">Entrevista 2 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista3">Entrevista 3 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista4">Entrevista 4 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista5">Entrevista 5 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista6">Entrevista 6 - 03 Diciembre 2016</a></li>
									<li><a href="CorpusVFMR.php#entrevista7">Entrevista 7 - 29 Enero 2017</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-archive"></span>Corpus MSVD<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusMSVD.php#entrevista1">Entervista 1 - 22 Enero 2017</a></li>
									<li><a href="CorpusMSVD.php#entrevista2">Entrevista 2 - 04 Marzo 2017</a></li>
								</ul>
							</li>
							<li><a href="Aportaciones.php"><span class="icon-open-book"></span>Producción Cientifica</a></li>
							<li><a href="../logout.php"><span class="icon-log-out"></span>Cerrar Sesión</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>

	<section>
		<article class="titulo">
			<h1>Producción Cientifica</h1>
		</article>
		<article class="Agregar">
			<form action="agregar.php" method="post">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<label class="sr-only" for="titulo">Titulo:</label>
						<input type="text" name="titulo" placeholder="Titulo">
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<label class="sr-only" for="liga">Liga:</label>
						<input type="text" name="liga" placeholder="Liga">
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<label class="sr-only" for="correo">Correo:</label>
						<input type="text" name="correo" placeholder="Correo">
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<input class="btn"type="submit" value="Agregar">
					</div>
				</div>	
			</form>
		</article>

		<article class="Mostrar">
			<table>
				<tr>
					<th width = "10%"><b>Id</b></th>
					<th><b>Titulo</b></th>
					<th><b>Liga</b></th>
					<th><b>Correo</b></th>
				</tr>
				<?php
					while ($registroComentarios=$resComentarios->fetch_array(MYSQLI_BOTH)) {
						echo '<tr>
						<td>'.nl2br($registroComentarios['CommentID']).'</td>
						<td>'.nl2br($registroComentarios['TitleComment']).'</td>
						<td>'.nl2br($registroComentarios['PathComment']).'</td>
						<td>'.nl2br($registroComentarios['EmailComment']).'</td>
						</tr>';
					}
				?>
			</table>
		</article>
	</section>	

	<footer>
		<div class="Foot1">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<p>Contacto: </p>
					<p><span class="icon-user"> MES. Dina Elizabeth Cortes Coss</span></p>
					<p><span class="icon-mail"> contacto.ely@gmail.com</span></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<a href="Reglamento.pdf" target="_blank"><span class="icon-open-book"> Terminos y Condiciones</span></a>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
