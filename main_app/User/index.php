<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['UserType'] != "User"){
			header("Location: ../Admin/");
		}
	} else {
		header('Location: ../../');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Corpus Lingüísticos D.E</title>
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilos.css">
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
							<li><a href="corpusVF.php"><span class="icon-folder"></span>Corpus VF</a></li>
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
			<h1>Bienvenidos a Corpus Lingüísticos D.E</h1>
		</article>
		</div>
		<article class="introduccion">
			<hr class="division" color="#6914OF"/>
			<p class="pad-top">Este proyecto se encuentra dirigido por la <b>MES. Dina Elizabeth Cortes Coss</b>, y tiene la finalidad de incrementar el acervo científico-educativo haciendo uso de los materiales aquí presentados.</p>
			<p>En esta página se encuentra un acumulado de diversos Corpus basados en una diversidad de tópicos, los cuales se ponen a disposición de la comunidad científica y estudiantil que requieran de su utilización para producir material científico e innovador.</p>
			<p>Del mismo sentido se invita a distintos investigadores a contribuir con la ampliación de los corpus o con investigaciones realizadas bajo la utilización de los mismos.</p>
			<p>La información presentada en esta página será incrementada a medida de que se obtengan contribuciones o nuevas entrevistas desarrolladas.</p>
			<p class="pad-buttom">De antemano gracias por su interés en <b>Corpus Lingüísticos D.E</b></p>
			<hr class="division" color="#6914OF"/>
		</article>	

		<article class="LSM">
			<h2>CORPUS LSM</h2>
			<p>Dentro de este corpus se localizan videos de la entrevista realizada a dos profesionistas y expertos en el área de la Lengua de Señas Mexicanas.</p>
			<p>El corpus cuenta con dos entrevistas donde: </p>
			<li>Un profesor tiene discapacidad auditiva y brinda cursos de LSM.</li>
			<li>Un profesor Director de un Instituto para el desarrollo del sordo (institución nominada al premio UNESCO 2010).</li>
			<li>Solo se encuentra transcrita la mitad de una entrevista.</li><br />
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="CorpusLSM.php" class="btn btn-block"><span class="icon-folder">Ir a Corpus LSM</span></a>
				</div>
			</div>
		</article>

		<article class="VFMR">
			<h2>CORPUS VFMR</h2>
			<p>Dentro del corpus “Violencia Física hacia Mujeres Regiomontanas” (VFMR) se encontrará información referente a diversos tipos de violencia emitidos hacia mujeres que hasta el momento de la conversación se encontraban radicando en la entidad Neolonesa.</p>
			<p>El corpus cuenta con un número de siete entrevistas donde: </p>
			<li>El rango de edad de las participantes es de 23 a 41 años de edad</li>
			<li>Prevalecen relatos de violencia doméstica y física, sin embargo también se relatan anécdotas de otro tipo de violencias</li>
			<li>La periodicidad de las entrevistas fue: 1 realizada en el mes de Octubre del 2009, 4 durante el mes de Agosto del 2015, 1 en el mes de Diciembre del 2016 y una entrevista fallida realizada en Enero del 2017.</li><br />
			<p>Cada entrevista (audio) ha sido transcrita y marcada con simbología propuesta por Amparo Tusón Valls (1997), y puede ser localizada dentro de este mismo vínculo. En cada una de las transliteraciones se brinda una explicación más extensa.</p><br />
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="CorpusVFMR.php" class="btn btn-block"><span class="icon-folder">Ir a Corpus VFMR</span></a>
				</div>
			</div>
		</article>

		<article class="MSVD">
			<h2>CORPUS MSVD</h2>
			<p>Dentro de este corpus se localizan conversaciones con mujeres que experimentaron diversos tipos de violencia y debido a lo anterior decidieron separarse de su pareja.</p>
			<p>Hasta el momento se cuenta con un número de dos entrevistas donde: </p>
			<li>El rango de edad de las participantes es de 45 a 54 años de edad </li>
			<li>Dentro de los relatos predomina la violencia física</li>
			<li>La realización de las mismas fue durante el mes de Enero del 2017 </li><br />
			<p>Las conversaciones (audios) han sido transcritas y marcadas con simbología que propone Amparo Tusón Valls (1997), y puede ser localizada dentro de este mismo vínculo. En cada una de las transliteraciones se brinda una explicación más extensa.</p><br />
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="CorpusMSVD.php" class="btn btn-block"><span class="icon-folder">Ir a Corpus MSVD</span></a>
				</div>
			</div>
		</article>

		<article class="MSVD">
			<h2>Corpus VF</h2>
			<p>Dentro del corpus "Violencia en la Frontera" (VF) se encontrará información referente a diversos tipos de violencia emitidos hacia indocumentados procedentes de la segunda caravana migrante que cruzó la frontera entre Guatemala y México.</p>
			<p>Hasta el momento de la entrevista, los migrantes fueron refugiados en la Asociación Civil “Comedor del Padre Infante”, cuyo acceso propició recaudar un corpus de ocho relatos que hacen alusión a la violencia que experimentan estas personas durante su tránsito hacia EUA, y los motivos de su migración.</p>
			<p>El rango de edad de los participantes osila entre los 17 y los 54 años y su país de procedencia es Honduras.</p>
			<p>Las entrevistas fueron realizadas en el mes de marzo del 2019.</p><br />
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="CorpusVF.php" class="btn btn-block"><span class="icon-folder">Ir a Corpus VF</span></a>
				</div>
			</div>
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