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
	<link rel="stylesheet" type="text/css" href="../../css/estilosVFMR.css">
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
			<h1>CORPUS VFMR (Violencia Física hacia Mujeres Regiomontanas)</h1>
		</article>

		<article class="VFMR">
			<hr class="division" size="4" color="#6914OF" />
			<p class="pad-top">Dentro del corpus “Violencia Física hacia Mujeres Regiomontanas” (VFMR) se encontrará información referente a diversos tipos de violencia emitidos hacia mujeres que hasta el momento de la conversación se encontraban radicando en la entidad Neolonesa.</p>
			<p>El corpus cuenta con un número de siete entrevistas donde: </p>
			<li>El rango de edad de las participantes es de 23 a 41 años de edad.</li>
			<li>Prevalecen relatos de violencia doméstica y física, sin embargo también se relatan anécdotas de otro tipo de violencias.</li>
			<li>La periodicidad de las entrevistas fue: 1 realizada en el mes de Octubre del 2009, 4 durante el mes de Agosto del 2015, 1 en el mes de Diciembre del 2016 y una entrevista fallida realizada en Enero del 2017.</li>
			<p class="pad-buttom">Cada entrevista (audio) ha sido transcrita y marcada con simbología propuesta por Amparo Tusón Valls (1997), y puede ser localizada dentro de este mismo vínculo. En cada una de las transliteraciones se brinda una explicación más extensa.</p>
			<hr class="division" size="4" color="#6914OF" />
		</article>	

		<article class="acceso_rapido">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista1"><span class="icon-sound">Ir a Entrevista 1</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista2"><span class="icon-sound">Ir a Entrevista 2</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista3"><span class="icon-sound">Ir a Entrevista 3</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista4"><span class="icon-sound">Ir a Entrevista 4</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista5"><span class="icon-sound">Ir a Entrevista 5</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista6"><span class="icon-sound">Ir a Entrevista 6</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="#entrevista7"><span class="icon-sound">Ir a Entrevista 7</span></a>
				</div>
			</div>
		</article>

		<article class="entrevista_1" id="entrevista1">
			<h2>Conversación 01, realizada en Octubre 2009</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista01.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p>Deacuerdo a la ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio.</p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 26 años de edad; casada (más de un año); originaria de Monterrey Nuevo León México; reside en el municipio de Apodaca; egresada de la licenciatura de Pedagogía de la UANL; el esposo nunca le permitió trabajar en otro lado que no fuera su casa; la parte frontal de su casa está acondicionada como estética, y ella labora ahí (es estilista); la entrevista es vía telefónica, ella se encuentra en su estética.</p>
			<p>Sea <b>E</b> la entrevistadora (amiga de la víctima), <b>M1</b> la víctima, <b>H1</b> el esposo de <b>M1</b> (el agresor).</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />
			
			<p><b>1 </b>E: Oye | ¿qué onda? | ¿por qué te oyes así, tan cansada? |</p>
			<p><b>2 </b>M1: ¡! le ¡Ah! no | es que como estoy abriendo la estética | tengo que ir por {ac la niña} a la escuela y a la otra niña llevarla al doctor y hay no | un pedo|</p><br />

			<p>—> El estado emocional en el que se encuentra M1 es de depresión, lo marca el tono de voz, y la forma cansada, de cómo arrastra una palabra con la otra. Aún que E no maneja el mismo contexto social, no logra entender del todo la problemática del día tan ocupado que se presenta para M1, sin embargo, trata de comprender que el discurso es un día totalmente cansado.</p><br /> 

			<p><b>3 </b>E: hay  una reunión de exalumnos de {subr. nuestra carrera} | te hablaba para saber si ibas</p>
			<p><b>4 </b>M1: \	Ah | no | ya sabes que yo ando con broncas de aquí | ¡ha! yo siempre quejándome | ¿verdad? |</p><br />  

			<p>—> Se muestra una actitud de excuso actitudinal de M1, donde más que excusa expresa una negativa. E trata de utilizar una estrategia comunicativa de igualdad al tratar de incorporarla al tema de la profesión, sin embargo, M1 mantiene la postura de su entorno. Mostrando con ello una actitud de autodefensa, al no sentirse apta para sostener una conversación de un entorno que considera no es el suyo; erróneamente ya que es profesionista y no se le estaba manejando una profesión diferente a la de ella.</p><br />

			<p><b>5 </b>E: Oye | ¿qué onda con tu trabajo?</p>
			<p><b>6 </b>M1:   |:: ¡h::! no me hablaron {subr. nombre} es que como ahorita van a recortar clases y esa bronca | se me hace que me voy a tener que esperar hasta el próximo año | entrando | y aparte le digo a H1 | para qué me busco una enfermedad desa de influenza o algo</p><br />

			<p>—> Interposición de palabras por parte de ella con las del esposo (H 1), las pausas demuestran en un momento dado duda o miedo de lo que va a decir.</p><br />

			<p><b>7 </b>E: y ¿qué dice tu esposo? | ¿porqué no vas a trabajar'? |</p>
			<p><b>8 </b>M1: || Nada | dice que ahorita me espere | {como quiera sabes que tienes jale ahí en la estética} | ya que va a ser la época que va a empezar lo bueno | {subr. entrecomillas}</p><br />

			<p>—> Trata de asimilar la propuesta por parte de H 1 más no la acepta del todo, el tono de énfasis en la palabra entrecomillas nos da la idea de no estar de acuerdo, o dudar del comentario.</p><br />

			<p><b>9 </b>E: Y con las niñas | ¿quién te va a ayudar?</p>
			<p><b>10 </b>M1: |le. es lo que ando viendo | quiero contratar a otra chava | pa que me ayude porque sí está canijo | nombre si no puedo con las huercas</p><br />

			<p>—> Usa una palabra despectiva refiriéndose a sus hijas, en conversaciones anteriores se hace alusión a que H 1 quería hijos cuando ella estaba estudiando; quedando como acuerdo de que al terminar la carrera iniciarían con la familia. sin embargo, el primer embarazo se presentó sin esperar, antes de finalizar la carrera.</p><br /> 

			<p><b>11 </b>M1: | Entonces ¿cuándo vienes?</p>
			<p><b>12 </b>E: El miércoles de la semana que entra ==M1</p>
			<p><b>13 </b>M1: \ …- / No güey el miércoles no puedo | no abro | entre el mugrero del fin y ay no | ya ando toda cansada | fastidiada | las huercas | no pero no te creas | el día que tú puedas || es trabajo güey | {risas}</p><br />

			<p>—> Se presenta una solapación en el momento de dar E la respuesta afirmativa a su invitación, M1 da una negativa a la visita, creando con ello un ambiente de indecisión por parte de ambas. La norma no se respeta en cuanto a la interrupción de la respuesta solicitada; Los cambios de tonos de ascendente a descendente nos marca una indecisión entre quiero que vengas pero no puedo.</p><br />

			<p><b>14 </b>E: Oye y ¿ya se fueron los albañiles?</p>
			<p><b>15 </b>M1: ya::</p>
			<p><b>16 </b>E: Oye y ¿doña Lora?</p> 
			<p><b>17 </b>M1: \ p	nombre ya la despedí</p>
			<p><b>18 </b>E: ¡Ay que fea!</p>
			<p><b>19 </b>M1: Nombre {subr. amiga} no hay billullo [risa]</p><br />

			<p>—> En conversaciones anteriores M1 había manifestado que iban hacer ciertas modificaciones a la casa por lo que iban a tener en casa albañiles, los mismos son conocidos de la familia de M1, sin embargo H 1 no consideró pertinente que estuviera sola con ellos y contrató con la excusa de ayudarla, a una empleada doméstica. Al momento de terminar el trabajo los albañiles, despiden a la empleada por falta de dinero. Marcando una incoherencia en los espacios de las conversaciones.</p><br />

			<p><b>20 </b>M1: / Hasta que no empiece a trabajar | le vuelvo hablar | ya le dije</p>
			<p><b>21 </b>E: ¡hay! ya te hacia trabajando | bien pedagoga</p>
			<p><b>22 </b>M1: \ le. Yo también quiero | pero pues ni modo [se escucha agua y trastes]</p><br />

			<p>—> De nuevo presenta el dominio de las palabras de parte de H 1, en cuanto a que dice como de ella la toma de algunas decisiones.</p><br />

			<p><b>23 </b>E: y ¿como le ha ido a Edgar?</p>
			<p><b>24 </b>M1: ¿A quién?</p>
			<p><b>25 </b>E: Es H1 o Edgar | me confundo</p>
			<p><b>26 </b>M1: \ p. :: H1 | bien ahí anda | de hecho horita estábamos checando unas cuentas</p><br />

			<p>—> E tuvo un error en cuanto al nombre no corresponde al del marido, M1 contesta corrigiendo el nombre en tono descendente y voz baja.</p><br />

			<p><b>27 </b>M1: || ahí nos echamos una platicada | haber si hacemos el postre ¿te acuerdas de ese postre?</p>
			<p><b>28 </b>E: ¡Ah sí! | de hecho si te conté que lo hice una vez</p>
			<p><b>29 </b>M1: Nunca me has traído eh | eres una maldita nada mas me robaste la receta [risa]</p><br />

			<p>—> En este punto el desequilibrio social beneficia a M1, ya que se encuentran en el medio ambiente de ella.</p><br />

			<p><b>30 </b>M1: ac…regresando a la casa lo hacemos | una lasaña</p>
			<p><b>31 </b>E: Hay que rico yo no se cocinar lasaña</p>
			<p><b>32 </b>M1: ¡Hay está bien fácil! | te voy a enseñar</p>
			<p><b>33 </b>E: Hay tú | ¡como ya te especializaste!</p>
			<p><b>34 </b>M1: Si | claro hasta pavo se hacer</p>
			<p><b>35 </b>E: Pavo | ha que loca</p>
			<p><b>36 </b>M1: Luego te paso la receta
			<p><b>37 </b>E: ¿Quién te enseño?</p>
			<p><b>38 </b>H1: =….= ¡Es ama de casa::!</p>
			<p><b>39 </b>M1: {es ama de casa} (usando una voz fingida para denotar ironía)</p>
			<p><b>40 </b>E: ¿Quién?, este H1 | Esta ahí de orejón [risa]</p>
			<p><b>41 </b>M1: Si esta ahí de oion | siempre está de oion nadamás</p><br />

			<p>—> El tono que maneja en la mayor parte de la conversación es normal, ya que se desarrolla en el tema de su contexto; Es en este momento en que se presenta la primer muestra clara de agresión psicológica, ya que él se encuentra escuchando desde el principio de la conversación, e interviene sin solicitárselo; lo que hace que M1 reaccione con ironía en cuanto a su intervención; La forma en que H 1 menciona casa se interpreta como el logro obtenido de tenerla como ama de casa, dedicada a su familia solamente.</p><br />

			<p><b>42 </b>M1: no | pero cualquier día nos podemos poner de acuerdo | un sábado porque entre semana no puedes</p> 
			<p><b>43 </b>E: si | si puede ser entre semana</p> 
			<p><b>44 </b>M1: a pos orale</p>
			<p><b>45 </b>E: Si te avientas</p>
			<p><b>46 </b>M1: Si nadamás somos yo y la niña</p><br />

			<p>—> En este fragmento del discurso se puede observar que de nuevo pide la oportunidad de salir con su amiga, lo que ha venido manifestando en repetidas ocasiones y hasta este momento no se ha dado el hecho. Pudiendo interpretar que dichas indecisiones sean porque el esposo esté manipulando la situación. En cuanto a la frase “yo y la niña” demuestra un sentido egocéntrico donde inconscientemente pide su tiempo aunque tenga que llevarse a la niña, además algo muy importante de un tiempo para acá durante la conversación no aparece la niña chiquita, siendo que es la que sed encuentra con ella durante todo el día, nuevamente refleja la no aceptación de la bebé.</p><br />

			<p><b>47 </b>E: ¿Sí irías? Te da permiso el oyón [risa]</p> 
			<p><b>48 </b>M1: / || No tengo porque pedirle permiso al oyón | yo me voy  | yo me mando sola | ahí está con su pinche carota el güey</p>
			<p><b>49 </b>E: ¿se enojó?</p>
			<p><b>50 </b>M1:  / \ eee:: | no no se enoja</p>
			<p><b>51 </b>H1: =..= Con que no se vayan a ir a ver a los viejos encuerados</p>
			<p><b>52 </b>E: entonces ,| ¿sí?</p>
			<p><b>53 </b>M1: Bueno como quiera me hablas para confirmar</p><br />

			<p>—> En este momento se nota ya una clara desesperación por su situación depresiva y por ello algunas expresiones ya más fuertes; la presencia y reacción de H 1 da pauta para que: 1) manifiesta que su marido es bueno con ella, como justificación y 2) nuevamente termine con su evasiva al no confirmar totalmente.</p><br />

			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_2" id="entrevista2">
			<h2>Conversación 02 realizada el 10 de Agosto de 2015 a la 1:00pm.</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista02.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>18:26 minutos.</p><br />
			<p>De acuerdo a la Ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio. </p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino <b>(M2)</b>; 41 años; procedente de Chihuahua; estudios de comercio truncos; nunca ejerció; reside en Torreón; por situaciones de violencia tiene 26 días viviendo en Monterrey; dos parejas sentimentales violentas; la primer pareja <b>(H1)</b> proviene de familias violentas, ejerció violencia física a M2; tiene 2 hijos con él; se casaron, y posteriormente divorciados tras episodios de violencia (la relación duró más de un año); la segunda pareja <b>(H2)</b> es alcólico, proviene de familias violentas; vivía en unión libre con él (más de un año); H2 ejerció violencia sexual y psicológica a la víctima; tiene 2 hijos con H2.
			Durante la entrevista menciona el nombre de su hermano al que se identificará como <b>(B1)</b>.
			El lugar de la entrevista es una sala climatizada donde solo se encuentran la entrevistada <b>(M2)</b> y la entrevistadora <b>(E)</b>.</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p><b>1 </b>E: ¿Cómo te llamas?</p>
			<p><b>2 </b>M2: M2</p>
			<p><b>3 </b>E: M2 | haber M2 siéntate aquí</p>
			<p><b>4 </b>M2: {[pp] a… ¿Aquí en esta si a junto a uste?}</p>
			<p><b>5 </b>E: si:: aquí esta bien || ¿Qué hacías M2?</p>
			<p><b>6 </b>M2: iba por pinol [risa]</p>
			<p><b>7 </b>E: a:: ¿Tú eres la que anda ahí trapeando?</p>
			<p><b>8 </b>M2: no | es que:: en las tardes nos dan a todos | a todas | pinol y cloro</p>
			<p><b>9 </b>E: a okey ¿para:: limpiar?</p>
			<p><b>10 </b>M2: si para limpiar | mmju</p>
			<p><b>11 </b>E: ¿Tú cuarto?</p>
			<p><b>12 </b>M2: si y mis actividades que | que tengo diarias</p>
			<p><b>13 </b>E: ah okey [tos] ¡ay! perdón | yo me llamo E. M2 | este | y soy voluntaria de una asociación | entonces voy a estar viniendo aquí seguidito con ustedes | haber que actividades podemos hacer | como les puedo apoyar y entonces | como esta es mi primera ocasión aquí e:: me interesa conocerlas saber un poquito sobre ustedes para así poder hacer un plan de trabajo padre y haber que podemos hacer ¿te late?</p>
			<p><b>14 </b>M2: si</p>
			<p><b>15 </b>E: bueno entonces este yo mmm:: | quisiera saber un poquito sobre tí ¿Cuántos años tienes?</p>
			<p><b>16 </b>M2: cuarenta y uno</p>
			<p><b>17 </b>E: cuarenta y uno ¿y estas…?==</p>
			<p><b>18 </b>M2: el mes que entra voy a cumplir | cuarenta y dos</p>
			<p><b>19 </b>E: ¿en serio?</p>
			<p><b>20 </b>M2: mmju</p>
			<p><b>21 </b>E: ¿Qué día?</p>
			<p><b>22 </b>M2: el veintisiete de septiembre</p>
			<p><b>23 </b>E: el veintisiete de septiembre:: falta poquito::</p>
			<p><b>24 </b>M2: si::</p>
			<p><b>25 </b>E: ¡fíjate! | ¿estás casada?</p>
			<p><b>26 </b>M2: pos no ya no</p>
			<p><b>27 </b>E: ya no ==</p>
			<p><b>28 </b>M2: andaba juntada | taba en unión libre</p>
			<p><b>29 </b>E: okey</p>
			<p><b>30 </b>M2:mmju</p>
			<p><b>31 </b>E: ok y ¿Tienes hijos?</p>
			<p><b>32 </b>M2: si</p>
			<p><b>33 </b>E: ¿Cuántos?</p>
			<p><b>34 </b>M2: cuatro | dos | aquí dos pero tengo:: otros dos grandes que están allá || donde yo soy</p>
			<p><b>35 </b>E: ¿De dónde eres?</p>
			<p><b>36 </b>M2: de Chihuahua</p>
			<p><b>37 </b>E: ¡en serio! y ¿Qué andas haciendo hasta acá?</p>
			<p><b>38 </b>M2: e:: lo que pasa que vivía en Torreón y de ahí m ahí fue donde llegue yo al refugio de… ahí pues fué y me pos fuí y me metí yo a un refugio en Torreón y de ahí me trajeron para acá</p> 
			<p><b>39 </b>E: a:: okey:: okey okey || o sea tú tienes dos hijos grandes en Chihuahua</p>
			<p><b>40 </b>M2: si</p>
			<p><b>41 </b>E: ¿De qué edades?</p>
			<p><b>42 </b>M2: veinticuatro y dieciocho</p>
			<p><b>43 </b>E: okey y dos chiquitos aquí en:: ==</p>
			<p><b>44 </b>M2: si mmju</p>
			<p><b>45 </b>E: ¿Tú venías en la camioneta ahorita?
			<p><b>46 </b>M2: no::</p>
			<p><b>47 </b>E: no a okey | ¿y qué e…  qué edades tienen tus niños | los de aquí?</p>
			<p><b>48 </b>M2: nueve y:: | dos nueve meses</p>
			<p><b>49 </b>E: ¡hay bien chiquitos! || bien chiquititos</p> 
			<p><b>50 </b>M2: mmju</p>
			<p><b>51 </b>E: oye M2 ¿Tú estudiaste?</p> 
			<p><b>52 </b>M2: comercio</p>
			<p><b>53 </b>E: sí ¿en dónde?</p>
			<p><b>54 </b>M2: allá en Chihuahua</p>
			<p><b>55 </b>E: m:: okey ¿y ejerciste?</p>
			<p><b>56 </b>M2: no</p>
			<p><b>57 </b>E: nunca</p>
			<p><b>58 </b>M2: {nunca p.}</p>
			<p><b>59 </b>E: por que terminaste y te casaste  o | más bien te juntaste ¿verdad?</p>
			<p><b>60 </b>M2: s:: si o sea que mis dos hijos que están allá son de mi primer matrimonio</p>
			<p><b>61 </b>E: ah okey::</p>
			<p><b>62 </b>M2: == y fue cuando yo:: y si me case en aquel entonces si me case y todo | me divorcié y luego ya me ya después me junté con este {con el que estaba el papá de mis niños chiquitos p.}</p>
			<p><b>63 </b>E: ah:: okey::</p> 
			<p><b>64 </b>M2: {mmju p.} pero no nunca trabajé | como haga pos si com... termine y luego luego me:: me casé y pos no no terminé y po no no me actualice ni nada antes no se usaban las computadoras así tanto ni nada de eso y po no | no le sé [risas]</p>
			<p><b>65 </b>E: {[riendo]a:: okey} oye y ¿por qué te divorciaste?</p>
			<p><b>66 </b>M2: [suspiro] por igual | violencia</p>
			<p><b>67 </b>E: ¡en serio!</p>
			<p><b>68 </b>M2: mmj</p>
			<p><b>69 </b>E: ¿entonces esta es la segunda ocasión?</p>
			<p><b>70 </b>M2: si ||</p>
			<p><b>71 </b>E: fíjate | que cosas</p>
			<p><b>72 </b>M2: mmj</p>
			<p><b>73 </b>E: y allá | tu primer matrimonio || eh::  ¿qué sucedió?</p>
			<p><b>74 </b>M2: {subr. En e. también} violencia mmj los dos || mmj</p>
			<p><b>75 </b>E: y ¿Cómo fué que te decidiste | a divorciarte?</p>
			<p><b>76 </b>M2: pues:: la primera vez || la primera vez no me decidí | me decidieron [risas]</p>
			<p><b>77 </b>E: {[riendo] ¿ah sí? ¿quién?}</p>
			<p><b>78 </b>M2: pos como yo estaba bien chica y vivía en un ranchillo y deste y sabían os ea todo mundo sabia ahí que me que me este se ponía borra::cho me pegaba y así || yo nunca viví violencia en mi casa nunca y deste:: y él sí | él todavía yo creo que todavía hasta la fecha el papá le pega a su mamá de él | y deste y:: este también empezó así conmigo yo le platicaba a | a mi suegra veda y ella me decía que era normal que así eran los matrimonios</p>
			<p><b>79 </b>E: ah::</p>
			<p><b>80 </b>M2: == que era {subr. Normal} y me decía que no le dijera a mi mamá y pos como yo estaba bien chica | pos bien:: {subr. tonta} yo no le platicaba nada | ahí en la casa creían que era un santo él | y pos no:: sino que la última vez que me golpio fué un diez de Mayo y había fiesta | en | día de las madres | en la escuelita | y pos todo mundo vio | entonces yo ya me fui a la casa porque fue en frente de la cas… en frente de la escuelita estaba la casa de ellos | de los papás de él y ahí fue donde me golpeo afuera de la casa y yo ya me fui para mi casa  todo y ya mas tardecito fue el el comisario de ahí y me dijo que me iba llevar a la casa de mi mamá porque ellos sabían donde vivía || y:: | yo todavía le insistía que no</p>
			<p><b>81 </b>E: ==al comisario</p> 
			<p><b>82 </b>M2: sí, aja y ya dijeron {[arremedando] no no vamos a | vamos con su mamá} y todo por eso y:: por eso fue que || que me salí yo de ahí y nunca volví yo con él</p> 
			<p><b>83 </b>E: okey ¿y tus hijos con quién están?</p>
			<p><b>84 </b>M2: el niño po m:: el niño pos si niño | si es mi niño el vive solo trabaja y vive solo y la niña está con su abuelita</p>
			<p><b>85 </b>E: mm:: ¿abuelita || paterna?</p>
			<p><b>86 </b>M2: == si</p>
			<p><b>87 </b>E: ¿o materna? ¿con la señora esa que:: | que le pegan?</p>
			<p><b>88 </b>M2: em:: pos es m:: ¿como le digo? es no | es con la señora con la que yo me crie</p>
			<p><b>89 </b>E: ah | okey</p>
			<p><b>90 </b>M2: mmj</p>
			<p><b>91 </b>E: okey | ¿y en esta ocasión tu segundo | tu segunda pareja?</p>
			<p><b>92 </b>M2: lo mismo || deste el también vivió violencia desde chico y cada vez que toma| mientras que no toma todo está muy bien:: y pura dulzura y amor y así pero cuando toma yo creo el se acuerda | o no sé yo apenas eso lo estoy captando aquí que estoy aquí | porque yo decía ¿Por qué cuando toma este se vuelve así? y apenas orita yo en estos días que he estado acá digo ah pos es que se acuerda él yo creo | de cuando su papá le pegaba a su mamá porque es lo primero que saca o ||  el día que pasó eso que yo le hablé a la policía él dijo {[arremedando] no, es que ¿por qué le hablas a la policía si mi mamá nunca le habló a la policía?} o sea:: | yo creo que por eso él:: | se pone así</p>
			<p><b>93 </b>E: m:: | fíjate || y:: y tus niños | por ejemplo ¿tú crees que algún día puedan tener esas conductas?</p>
			<p><b>94 </b>M2: <"..."> pues la niña no la niña:: | es muy tranquila si:: y a ella no le gusta que tome ni nada | eh mi señor este | hay veces que me obligaba que me tomara dos tres vasos de cerveza y a mí no me gusta tomar {MAYÚS nunca en mi vida me ha gustado tomar | no me gusta como sabe la cerveza | no me gusta como sabe el vino} y deste y él en veces me obligaba me decía {[arremedando] ó tomas o que quieres que me vaya con una puta a una cantina} y te lo estoy diciendo así como me lo decía</p> 
			<p><b>95 </b>E: mmj</p>
			<p><b>96 </b>M2:== y deste:: y yo ya le decía no pos bueno ándale pues\ y a la niña también le decía {[arremedando] que tome tu mamá conmigo veda hija o si no pos ya sabe me voy a una cantina} y pos la niña decía pos si pero ella hacía sus bilis bilis || aja | y el niño pos el niño si es muy agresivo | muy:: a todo mundo le pega y así:: de hecho ya he tenido broncas aquí porque | a todo mundo le pega y nadie lo quiere cuidar cuando a mi me tocan mis actividades y así | no se si se deba a eso pos ya ve que como esta chiquito a ellos no le dan terapia</p> 
			<p><b>97 </b>E: ah:: okey | no sabía</p> 
			<p><b>98 </b>M2: (aja | de aquí)</p>
			<p><b>99 </b>E: no | no sabía o sea le dan terapia ¿a quién? ¿A los grandes?</p>
			<p><b>100 </b>M2: == creo que de cinco en adelante | cinco años</p>
			<p><b>101 </b> E: ah | okey</p>
			<p><b>102 </b> M2: entons por eso a lo mejor | ya si estamos solos ya se le va a olvidar así:: y va ser | otro otro por que por ejemplo mis hijos grandes no son tampoco así</p> 
			<p><b>103 </b> E: ¿no?</p>
			<p><b>104 </b> M2: No no son agresivos ni nada | la chiquita tampoco | porque la chiquita pos haga de cuenta que creció nada mas conmigo porque su papá || trabajaba en los (Omnibus) y nunca estaba en la casa || entonces al niño si lo ha visto mas y nosotros vivíamos allá en Chihuahua | entonces deste iba iba y nos veía cada veinte días cada quince días || pero ya que nació el niño me vine para acá para Torreón || le cambiaron la base a él aquí a Torreón entonces haga de cuenta que nos miraba | cada tres días cada cuatro y se quedaba mas seguido en la casa y así || y pos el niño si lleva su:: su patrón</p> 
			<p><b>105 </b> E: mmj</p>
			<p><b>106 </b> M2: mmj</p>
			<p><b>107 </b> E: oye y ¿te volverías a juntar o a casar?</p>
			<p><b>108 </b> M2: no::</p>
			<p><b>109 </b> E: no</p>
			<p><b>110 </b> M2: No</p>
			<p><b>111 </b> E: ¿Por qué?</p>
			<p><b>112 </b> M2: No, {[subr] todos son iguales}</p>
			<p><b>113 </b> E: ¿en serio?</p>
			<p><b>114 </b> M2: si</p> 
			<p><b>115 </b> E: que les || por ejemplo si conocieras a una chica que apenas se va a casar o así ¿qué le dirías?</p>
			<p><b>116 </b> M2: <"..."> m:: pues que se fijara muy bien | que yo no le aconsejaría que no se case veda porque pues es por una etapa que todo mundo tenemos que pasar tarde que temprano y tenemos que experimentar eso | nunca le aconsejaría que no se casara pero || que se fijara muy bien que || que pidieran ayuda no sé que tomaran una terapia para para ver si el no trae:: || conductas de que va a ser agresivo más adelante ¿si sabe como? porque es una cosa es el noviazgo y una cosa es cuando ya la tienen a uno en la casa | entonces no sé si se puede detectar eso antes || si se pudiera detectar que padre veda yo eso le aconsejaría</p> 
			<p><b>117 </b>E: mmj ¿tu ya conocías sobre violencia?</p>
			<p><b>118 </b>M2: || no</p>
			<p><b>119 </b>E: no, ¿no sabes así por ejemplo cuantos tipos de violencia hay o así?</p>
			<p><b>120 </b>M2: no</p> 
			<p><b>121 </b>E: y cómo ¿cómo:: fué que entonces dijiste | no es que este ya es violento?</p>
			<p><b>122 </b>M2: pues por ejemplo yo no sabía que por ejemplo a mí mi esposo no me dejaba salir y que es violencia | no me dejaba pintarme y yo no sabía que es violencia | no me dejaba ba.. hay veces que me hablaba y me decía no que llego a tales horas y yo le decía a bueno para bañarme {[arremedando]no | no te bañes hasta que llegue yo} y él para olerme</p>
			<p><b>123 </b>E: ¿en serio?</p>
			<p><b>124 </b>M2: ajam yo no sabía que eso era violencia yo decía no pos por los celos es que es muy celoso y se me fue resbalando si fuí haciendo concha ¿si sabes como? aja</p>
			<p><b>125 </b>E: pero él te olía ¿para ver si no habías estado con otra persona?</p>
			<p><b>126 </b>M2: si aja</p>
			<p><b>127 </b>E: {[subr]¿en serio?}</p>
			<p><b>128 </b>M2: si</p>
			<p><b>129 </b>E: fíjate</p>
			<p><b>130 </b>M2: y me revisaba así todo a ver si no traía || pues si | indicios de | que hubiera estado con otra persona yo algo yo no sabía que eso era violencia yo pensaba que nomás la física | que le pegaran a uno era violencia</p>
			<p><b>131 </b>E: oye y ¿tú familia | tus papás?</p>
			<p><b>132 </b>M2: mi mamá falleció hace dos meses</p>
			<p><b>133 </b>E: okey</p> 
			<p><b>134 </b>M2: {[ritmo acelerado] y mí papá no lo conozco}</p>
			<p><b>135 </b>E: a okey</p>
			<p><b>136 </b>M2: mmj</p> 
			<p><b>137 </b>E: <"...">y entonces ya estas tú solita acá?</p>
			<p><b>138 </b>M2: mmj</p>
			<p><b>139 </b>E: okey || bueno estem:: y ¿cuánto tiempo tienes aquí?</p>
			<p><b>140 </b>M2: ahora tengo veintiséis días</p> 
			<p><b>141 </b>E: órale y ¿qué piensas hacer después de que salgas?</p> 
			<p><b>142 </b>M2: pienso:: trabajar | salir adelante por mis hijos y por mí</p> 
			<p><b>143 </b>E: ¿si?</p>
			<p><b>144 </b>M2: mmj</p>
			<p><b>145 </b>E: ¿por qué crees que muchas mujeres aguantan? | por ejemplo que | cuándo les pegan una vez y no hacen nada o así ¿por qué crees que aguanten?</p>
			<p><b>146 </b>M2: pues yo pienso a lo mejor porque || uno de mujer:: | lo que quiere es un hogar</p> 
			<p><b>147 </b>E: una familia así | hijos | esposo | casa | todo</p> 
			<p><b>148 </b>M2: sí si si</p> 
			<p><b>149 </b>E: okey fíjate || ¿Cómo me dijiste que te llamabas?</p>
			<p><b>150 </b>M2: M2</p>
			<p><b>151 </b>E: ah se me olvidan los nombres [e]  pero mira vamos a hacer un juego || si fueras una artista ¿qué te gustaría ser? O sea | pintora | actriz | cantante | bailarina</p>
			<p><b>152 </b>M2: m:: || cantante yo creo [risas]</p>
			<p><b>153 </b>E: [risas] da:: y que nombre te pondrías?</p>
			<p><b>154 </b>M2: {[riendo] ay me pondría: Jenny Rivera}</p>
			<p><b>155 </b>E: {[subr]¿te gusta Jenny Rivera?}</p>
			<p><b>156 </b>M2: si</p>
			<p><b>157 </b>E: oye Jenny Rivera era gallona verdad?</p>
			<p><b>158 </b>M2: ==si</p> 
			<p><b>159 </b>E: también sufrió violencia</p> 
			<p><b>160 </b>M2: si</p>
			<p><b>161 </b>E: fíjate || no se me va a olvidar así M2 Jenny Rivera [risas] bueno M2 ¿cómo crees que pueda apoyarlas? | ¿qué te gustaría hacer aquí en el taller o no se?</p>
			<p><b>162 </b>M2: es que o sea ¿pero de qué taller sería como de superación personal:: o | {[le]¿cómo de terapia o de qué?}
			<p><b>163 </b>E: sí se me hace que algo como de superación | te voy a decir porque | porque yo no soy psicóloga pero:: || doy musicoterapia no se si te hayas dado cuenta pero yo no veo yo no veo muy bien entonces a mí me ayudo mucho mucho mucho a recobrar mi autoestima | la meditación | la musicoterapia | todo esas técnicas así</p> 
			<p><b>164 </b>M2: si</p> 
			<p><b>165 </b>E: ¿tú eres católica?</p>
			<p><b>166 </b>M2: si</p>
			<p><b>167 </b>E: y crees en...?</p>
			<p><b>168 </b>M2:== creo en Dios nomás</p> 
			<p><b>169 </b>E: nada mas en Dios estem | si y:: por ejemplo | ay se me olvido lo que te iba a preguntar ¿ibas a la iglesia seguido?</p>
			<p><b>170 </b>M2: si</p> 
			<p><b>171 </b>E: ¿y qué te decía el padre o eso nunca supo de eso de de lo que te pasó?</p>
			<p><b>172 </b>M2: no yo iba porque em:: la niña iba a se su comunión ahora el veintiocho de agosto</p>
			<p><b>173 </b>E: a:: okey</p>
			<p><b>174 </b>M2: ella le… mi hija grande la hizo y a ella le gusta y así y pos tenia dos años yendo al catecismo porque ella quería hacer su comunión y yo iba a mi me gusta ir a escuchar la palabra de Dios y todo pero no creo en los padres</p> 
			<p><b>175 </b>E: ah ¿por qué?</p>
			<p><b>176 </b>M2: no sé pos son humanos igual que uno y tanto que ve uno oye en la tele que | que cometen errores y esto y lo otro veda no soy nadie para juzgarlos verdad cada quien pero || pues yo por ejemplo cuando yo | yo quiero desahogarme pos yol yo | le pido a Dios [titubeo] o así {[p]¿si sabe como?}</p>
			<p><b>177 </b>E: okey || bueno entonces ¿que te gustaría que trabajáramos?</p>
			<p><b>178 </b>M2: pues esta bien con eso que dice de la mu::si</p>
			<p><b>179 </b>E: == musicoterapia una relajación</p> 
			<p><b>180 </b>M2: aja</p>
			<p><b>181 </b>E: verdad || para recobrar autoestima si aunque yo te veo a ti muy positiva verdad</p>
			<p><b>182 </b>M2: pues yo me siento muy positiva aja</p>
			<p><b>183 </b>E: si ||ya te sientes bien ya tienes:: tienes veintiséis días pero desde que llegaste ha sido terapia y eso</p> 
			<p><b>184 </b>M2: {[p]namás a una}</p> 
			<p><b>185 </b>E: ¿a una has ido? fíjate | y como quiera te veo muy positiva</p> 
			<p><b>186 </b>M2: si::</p>
			<p><b>187 </b>E: que bueno</p> 
			<p><b>188 </b>M2: pos de hecho ahorita iba:: a hablar con mi psicóloga pero se me ha pasado porque supuestamente yo me iba ir ahora pero | ahora o mañana pero recibí malas noticias y ya no me voy a ir quien sabe hasta cuando</p> 
			<p><b>189 </b>E: ¿a poco?</p>
			<p><b>190 </b>M2: aja</p> 
			<p><b>191 </b>E: ¿por que malas noticias?</p>
			<p><b>192 </b>M2: porque:: | mi red de apoyo era mi comadre entonces mi comadre como dicen así bien vulgarmente me puso el dedo con mi:: esposo que aquí estoy en Monterrey</p> 
			<p><b>193 </b>E: [e] ay:: ¿por qué haría eso?</p>
			<p><b>194 </b>M2: ==ya porque le hablé a mi hermana porque te digo que supuestamente yo ahora me iba porque:: || yo le hablé a mi hermana el jueves y le dije que me consiguiera dinero para irme| entonces ya me dijo a no pos es que tenemos un hermano que pueda ser que tenga la posibilidad de que el me preste para que yo me vaya | pero no esta anda de vacaciones y no lo han podido localizar entonces y ya me dijo {[arremedando]es que no he localizado a B1 } y es mi hermano pero pero voy a ver la manera yo de a ver si como le hago para juntarte el dinero pa que te vengas y que no sé que dijo y luego me habló H2 | H2 es mi ex deste:: de que le dijo tu comadre que está recibiendo llamadas tuyas en Monterrey || y yo cuando le hablé a mi comadre yo le dije {[pp]que no fuera decir nada que estaba aquí ni nada y pos ahorita me voy enterando que || que me puso en la cruz}</p>
			<p><b>195 </b>E: que bárbara | ¿por qué haría eso?</p>
			<p><b>196 </b>M2: pos e:: mi psicóloga dice que pueda ser || como yo los conocí a ellos por medio de mi esposo o sea primero la amistad fue de ellos</p> 
			<p><b>197 </b>E: ah:: okey</p> 
			<p><b>198 </b>M2: entonces dice que pueda ser que que que este les ande fingiendo ay que mucho arrepentimiento y no se que y que a lo mejor lo hicieron para calmarlo {[arremedando]no pos hay que decirle que pos esta en Monterrey para que este se este mas tranquilo} que sé yo algo así || pero pues de todas maneras no se vale\</p>
			<p><b>199 </b>E: claro</p> 
			<p><b>200 </b>M2: mmj</p> 
			<p><b>201 </b>E: claro porque no pues eso no</p>
			<p><b>202 </b>M2: {[con voz cortada] ella era mi red de apoyo}</p>
			<p><b>203 </b>E: fíjate || pero bueno | no yo estoy segura que todo va a salir bien | vas a ver que si</p> 
			<p><b>204 </b>M2: {[pp] si con el favor de Dios}</p> 
			<p><b>205 </b>E: vas a ver que si bueno entonces nos vamos a ver aquí seguido</p> 
			<p><b>206 </b>M2: si</p> 
			<p><b>207 </b>E: si</p> 
			<p><b>208 </b>M2: ah pos ojalá</p> 
			<p><b>209 </b>E: claro</p> 
			<p><b>210 </b>M2: ojalá que |  que vuelva a estar aquí</p> 
			<p><b>211 </b> E: ==mucho || gusto</p> 
			<p><b>212 </b> M2: ándele [beso]</p>
			<p><b>213 </b> E: mucho gusto | te deseo lo mejor | ¿le puedes hablar a alguien mas?</p>
			<p><b>214 </b> M2: {[p] si claro que si y ¿cómo me dijiste que te llamabas?}</p>
			<p><b>215 </b> E: E.</p> 
			<p><b>216 </b> M2: ==E.</p>
			<p><b>217 </b> E: pero me puedes decir E.</p>
			<p><b>218 </b> M2: {[p] E. ah bueno ojalá te vuelva a ver}</p> 
			<p><b>219 </b> E: claro nada mas si me ves recuérdame porque acuérdate que yo no veo muy bien</p> 
			<p><b>220 </b> M2: {[pp]}si claro que si Jenny Rivera</p> 
			<p><b>221 </b> E: ándale</p><br />
			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_3" id="entrevista3">
			<h2>Conversación 03 realizada el 10 de Agosto a las 3.00 pm</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista03.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>20:44 minutos</p><br />
			<p>Deacuerdo a la ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio.</p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 35 años de edad; oriunda de Nuevo León; reside en el municipio de Guadalupe ; proviene de familia disfuncional (padres divorciados, padre alcólico y ejecutor de violencia económica); su primer pareja (<b>H1</b>) era casado (<b>M3</b> asegura no haber tenido conocimiento de ello); de esa primer relación con H1 tiene 3 hijos; la segunda pareja (<b>H2</b>), es drogadicto y ejerció violencia física y psicológica; vivía en unión libre con H2 desde hace un año, pero la relación duró 3; tiene un hijo (<b>N1</b>) de H2; trabajó vendiendo dulces en un mercado pero pasó más tiempo en terapias, porque 2 de sus 4 hijos tuvieron enfermedades y complicaciones; su hijo mayor (<b>N4</b>) es una persona con discapacidad (hemiplejia).</p>
			<p>15 días antes de esta entrevista vivió violencia física y psicológica por parte de H2 y decidió huir del domicilio.</p>
			<p>El lugar de la entrevista es una sala climatizada donde solo se encuentran la entrevistada (M3) y la entrevistadora (<b>E</b>).</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p><b>1 </b>E: ¿Cómo te llamas?</p>
			<p><b>2 </b>M3: M3</p>
			<p><b>3 </b>E: M3| a ver M3 | ¡hay! ando perdida \ por aquí\ vente M3 por acá ||  ¿Cómo te  gusta que te digan?</p>
			<p><b>4 </b>M3: M3</p>
			<p><b>5 </b>E: ¿Así M3?</p> 
			<p><b>6 </b>M3: sí</p>
			<p><b>7 </b>E: Ok:: y mira yo soy voluntaria de una asociación y:: voy a estar viniendo seguido a hacer algunas actividades con ustedes| si | pero para eso necesito conocerlas un poquito má::s|  de qué te gusta hacer::| por qué estás aquí::| tú familia etc | ¿Sí? Para ver como puedo apoyarlas| entonces ¿Cuántos años tienes M3?</p>
			<p><b>8 </b>M3: treinta y cinco</p> 
			<p><b>9 </b>E: treinta y cinco:: ok ¿estás casada?</p>
			<p><b>10 </b>M3: no</p>
			<p><b>11 </b>E: no</p>
			<p><b>12 </b>M3: unión libre {subr. estaba} en unión libre pero ya no [risa]</p>
			<p><b>13 </b>E: Ah ok| ¿tienes hijos?</p>
			<p><b>14 </b>M3: cuatro</p>
			<p><b>15 </b>E: ¡órale!:: ¿grandes?</p>
			<p><b>16 </b>M3: Tengo dos| uno de diecinueve|  una:: niña de diecinueve y un niño de dieciséis| uno de seis y uno de un año</p>
			<p><b>17 </b>E: ¿Están aquí los chiquitos?</p>
			<p><b>18 </b>M3: Si</p>
			<p><b>19 </b>E: ¿Tú venías en la camioneta ahorita?</p>
			<p><b>20 </b>M3: No</p>
			<p><b>21 </b>E: No| ¡ah! Ok | es que me tocó conocer uno| Y:: ¿los chiquitos están aquí| dices entonces?</p>
			<p><b>22 </b>M3: si</p>
			<p><b>23 </b>E: ¿Ellos no están yendo a la escuela?</p>
			<p><b>24 </b>M3: No</p>
			<p><b>25 </b>E: ¿Cuánto tiempo tienes aquí?</p>
			<p><b>26 </b>M3: quince días</p>
			<p><b>27 </b>E: ¡ay! tienes poquito::</p>
			<p><b>28 </b>M3: ya me voy mañana</p>
			<p><b>29 </b>E: enserio:: ¿por qué M3?</p>
			<p><b>30 </b>M3: es que | lo que pasa es que nada mas vine un ratito| o sea unos días a que me den terapia y ya| o sea psicológica mas que nada| porque tengo donde irme con mi mamá:: y con mis hijos| a parte o sea ellos viven a parte tengo a donde ir|</p>  
			<p><b>31 </b>E: M3 ¡ah! muy bien|</p> 
			<p><b>32 </b>M3: nada mas que yo dije primero voy con psicología a arreglarme primero yo:: y luego después ya me salgo \</p>
			<p><b>33 </b>E: ok: || bueno y ya o sea te dieron de alta</p> 
			<p><b>34 </b>M3 – E sí</p>
			<p><b>35 </b>E: ¿o tu sola te quieres salir?</p>
			<p><b>36 </b>M3: ya me dieron de alta| no ya me dieron de alta o sea ya  dije aquí es temporal por lo que tu quieras veda o sea como vean analizando tu caso pero yo llegué:: y o sea sabes qué yo tengo donde ir::| tengo:: tengo con:: como se llama mi familia me apoya económicamente| tengo| no mucho dinero pero tengo pa sobrevivir vengo::  unos quince días para que me den terapia psicológica y {subr. descargar} todo lo que traigo veda o sea  y pos que me apoyen| y si me apoyaron muy bien y todo y dije pos ya cumplió mis quince días ya me voy  [risas]</p> 
			<p><b>37 </b>E-M3 ok [Risa]  ¿De dónde eres?</p>
			<p><b>38 </b>M3: De Guadalupe, Monterrey</p>
			<p><b>39 </b>E: Ah ok:: ¿Tú naciste aquí en Monterrey y todo?</p>
			<p><b>40 </b>M3: Si</p>
			<p><b>41 </b>E: Ok y tu familia ¿todavía tienes a tus papás a los dos?</p>
			<p><b>42 </b>M3: ¡Ah! Sí| gracias a Dios</p>
			<p><b>43 </b>E: ¡que bueno! ¿Y ellos son de dónde?</p>
			<p><b>44 </b>M3: De aquí de Monterrey</p>
			<p><b>45 </b>E- M3 también| ¿tú estás aquí por qué?</p>
			<p><b>46 </b>M3: Por violencia psicológica\</p>
			<p><b>47 </b>E-M3 psicológica|</p> 
			<p><b>48 </b>M3: y en veces violencia de golpes| pero no muy seguido| pero si me daba mis [risas]  si me llegó a pegar así o amenazas pero mas psicológica\</p>
			<p><b>49 </b>E: ¿Cuánto tiempo tenías con tu pareja?</p>
			<p><b>50 </b>M3: Tenía tres años pero viví con el un año</p>
			<p><b>51 </b>E: ¡Ah! ok ¿no vivías con él?</p> 
			<p><b>52 </b>M3: No</p>
			<p><b>53 </b>E: ¿Y los niños mayores todos son de él?</p>
			<p><b>54 </b>M3: No| nada mas el bebé| tengo un bebé aquí [m. levanta los brazos señalando] tiene un año esta güero| rubio| rubio| aquí esta dormido</p>
			<p><b>55 </b>E: Enserio:: [risas] ¿Cómo se llama?</p>
			<p><b>56 </b>M3: N1</p>
			<p><b>57 </b>E: Se oyen los ronquiditos [Risa]</p>
			<p><b>58 </b>M3: Si [risa] ¿tú no ves veda?</p>
			<p><b>59 </b>E: No</p>
			<p><b>60 </b>M3: ¿y de qué vienes?| ¿De dónde vienes  de qué parte?</p>
			<p><b>61 </b>E: Es una asociación que se llama eser:: y capacitan voluntarios te voy a decir por que estoy aquí|| cuando yo perdí la vista::| yo entré en depresión mucho mucho mucho tiempo| yo duré cinco años en terapia entonces:: este| fue muy difícil para mi::| pero hubo mucha gente mucha que me ayudó::| que platicó conmigo:| que| no sé| me escuchó| a veces eso es lo que necesitamos:: ¿Verdad?</p> 
			<p><b>62 </b>M3- E {subr. sí|}</p> 
			<p><b>63 </b>E: entonces| pues Ahora que ya estoy bien:: quiero hacer lo mismo:: | quiero ayudar| quiero ver que puedo hacer y| nada más con esa intención</p>
			<p><b>64 </b>M3: Hace poquito ¿acabas de perder la vista?</p>
			<p><b>65 </b>E: No| yo la perdí a los veintidós años y tengo treinta</p>
			<p><b>66 </b>M3: [sonido de admiración] ¡qué comes! [risa]</p>
			<p><b>67 </b>E: [Risa]</p> 
			<p><b>68 </b>M3: te ves bien jovencita</p>  
			<p><b>69 </b>E: gracias</p>
			<p><b>70 </b>M3: te ves bien jovencita| y/ fue un accidente ¿o qué?</p>
			<p><b>71 </b>E: no:: fíjate que un médico me operó y pues no debió de haberme echo la cirugía| fué una negligencia médica| sí pues no tomó las precauciones:: y pues antepuso el dinero/ antes de la ética y pues ahí están las consecuencias:: cuando quise demandar y todo pues ya era muy tarde| ¡yo no sabía!::</p>
			<p><b>72 </b>M3- E ¿pero| de qué te querías operar?</p> 
			<p><b>73 </b>E: Yo usaba lentes::</p>
			<p><b>74 </b>M3: Ah:: usabas lentes</p>
			<p><b>75 </b>E: Si| yo usaba lentes  entonces me los quería quitar::</p> 
			<p><b>76 </b>M3 - E sí</p>  
			<p><b>77 </b>E: y:: pues ya:: te digo| o sea lo malo fué que yo no sabía nada| yo no:: ¡vaya! yo no sabía:: que existían:: | cirugías para los ojos:: ni nada porque yo no tengo nada ni un hueso quebrado nada nada nada|</p>
			<p><b>78 </b>M3-E gracias a Dios|</p>
			<p><b>79 </b>E: si gracias a Dios| entonces pues si fue un shock bien fuerte</p>
			<p><b>80 </b>M3: Y bien jovencita| deja tu| el chiste de que fue jovencita:: | bueno a lo mejor digo que todas las personas sufrimos así en::  depresión cuando nos pasa algo| yo tengo dos hijo cuatro hijos| pero dos hijos:: me salieron malitos::</p>
			<p><b>81 </b>E- M3 ¿por qué malitos?</p> 
			<p><b>82 </b>M3: uno me salió con| con:: uno me salió con parálisis en el lado derecho</p>
			<p><b>83 </b>E:  parálisis</p>
			<p><b>84 </b>M3: / yo cuando mi hijo nació y me dijeron al me| al año yo me quería morir\ ¿por qué a mi::?| ¿Por qué a mis hijos::?| ¿por qué a mi hijo? ¿por qué?| me dijeron porque Dios conoce a las personas y Dios sabe a quien le van a mandar a ese tipo de personas| me aventé diez años terapias| eh a los doce años le hicieron la última operación:: | terapias | cargarlo::| llévame al baño| párame porque de pie:: de ma de pie:: también en la mano tiene  problemas\  y pos le hacían bullyng en la escuela:: | corajes  y [llanto] yo siempre fui una mamá así de que/ tu no tienes nada:: tú estás bien:: más que todos| yo le decía así y le decía||  le decía| yo si le decía| amá:: es que dicen que yo bueno:: tú estás malito del pie | de la mano {subr. Supuestamente} pero es discapacidad| no tienes fuerza| pero tu amigo/ ta bien orejón/ el otro ta bien greñudo y el otro ta prieto:: no todos no somos iguales| todos tenemos diferentes</p>
			<p><b>85 </b>E- M3 claro |</p>  
			<p><b>86 </b>M3: o cosas así y ahora mijo tiene dieciseis años estudia la preparatoria::</p>  
			<p><b>87 </b>E- M3 enserio::</p>
			<p><b>88 </b>M3: |corta pelo::</p>
			<p><b>89 </b>E- M3 enserio|</p>
			<p><b>90 </b>M3: está trabajando en una empacadora de botes o sea donde compran los botes reciclados| este:: y es una persona bueno para mi/ yo lo valoro mucho y lo amo porque es mi hijo y porque tiene mas|  tiene mucha:: capacidad/ para hacer varias cosas que  {subr.las personas que tenemos todo no lo hacemos} no podemos y él lo puede| amá:: sabes que es que traigo dinero es que corté tres cortes en treinta pesos que no sé que| y te quedas así fíjate que que onda| amá este  la última vez que venimos pa ca pal refugio me dió cincuenta pesos porque le pagan cien pesos mas lo que hace extra| mamá este::  ten cincuenta  pesos</p> 
			<p><b>91 </b>E-M3 ay que lindo</p>  
			<p><b>92 </b>M3: te voy a dar para que te compres unas cocas /mamá y no se que porque no vivimos juntos ahorita en por el momento este:: ||</p> 
			<p><b>93 </b>E: ¿Ellos con quién viven?</p>
			<p><b>94 </b>M3: ahorita en la casa de mi mamá pero viven los grandes  pero el esta a cargo de una hija mia de diecinueve años| y y te quedas dices ¡aja::!  O sea cómo</p> 
			<p><b>95 </b>E- M3 [sonido de admiración]</p> 
			<p><b>96 </b>M3: como hace tanta cosa y mijo no se muere de hambre y trae las mejores ropa y zapatos pero él porque se los gana fíjate y tengo otro hijo| que otro niño que tiene cinco años  que ya pasó todo y todo pero lo que  yo digo que los impactos fueron pa mi veda  también| el nació con ano imperforado su colita donde hacemos popó::</p>  
			<p><b>97 </b>E- M3 ah sí|</p>
			<p><b>98 </b>M3: él se le salió cerrada cuatro centímetros también pa arriba entonces  \lo operaron le hicieron operaciones salió todo muy bien de:: la presión| pero el tuvo complicaciones/ y se me estaba muriendo|  que dices tu pos/ mucha gente se muere veda pero un hijo pa una madre es muy importante y duele mucho o sea duele mucho y eso si me</p> 
			<p><b>99 </b>E-M3 Claro</p> 
			<p><b>100 </b>M3: a mi si me afectó 
			<p><b>101 </b>E: ¿y esos dos niños son de otro señor?</p>
			<p><b>102 </b>M3: si de otro señor sí|  y a decuenta que ya /gracias a Dios ya están bien y todo eso pero te digo yo que cuando uno tuvo un accidente:: y tiene un problema fuerte dices tu \ no voy a poder no voy a poder / y ahora me tocó estar aquí con ellos veda y digo no:: tengo que poder</p>
			<p><b>103 </b>E: y ¿estos chiquitos  son de otro señor?</p>
			<p><b>104 </b>M3:  /no tengo cuatro nada más tres son de uno</p>
			<p><b>105 </b>E-M3 ¡ah!</p>
			<p><b>106 </b>M3: y del último de la ultima pareja que tuve| entonces le digo yo</p> 
			<p><b>107 </b>E: [m. tratando de alcanzar al bebé] ¿dónde está?</p> 
			<p><b>108 </b>M3: [m. acercando el bebé  a la entrevistadora] aquí está| ta bien rubio y rubio| rubio y chiquito</p> 
			<p><b>109 </b>E: M3 ¡está hermoso!| ¿tu pareja era rubia?</p>
			<p><b>110 </b>M3: Si y mi mamá también es Rubia| ahí esta diciendo que esos niños que dicen que son niños gerber no se si te acuerdas</p> 
			<p><b>111 </b>E: [risa] si</p>
			<p><b>112 </b>M3: y este pos ya le dije a la psicóloga ahorita que ya me voy a pasar a retirar</p>  
			<p><b>113 </b>E-M3 que bueno</p> 
			<p><b>114 </b>M3: que muchas gracias por haberme brindado el apoyo| que gracias por un techo|  por la cama::| por el abanico| por la comida| los alimentos</p>
			<p><b>115 </b>E: todo se valora</p>
			<p><b>116 </b>M3: todo se valora</p>
			<p><b>117 </b>E: oye ¿y tu primer pareja? Con esa tampoco te casaste</p> 
			<p><b>118 </b>M3: no lo que pasa es que:: [risa] deja te cuento</p> 
			<p><b>119 </b>E- M3 ¡ah bueno! |</p>
			<p><b>120 </b>M3: es que yo anduve con él| con él  y me dice que salía fueras y que salía fueras ¿cómo que sale fuera? y luego un día le quité la credencial de elector y fuí a dar a la casa de él y pos no salió {subr. la señora}</p>
			<p><b>121 </b>E-M3 ¡estaba casado!::</p>
			<p><b>122 </b>M3: estaba casado| oyes es que:: | lo que pasa es que:: | lo que pasa es que|| le digo no esta el señor H1 y es que yo soy su esposa [sonido de admiración] y me quede así es que yo también| ¿cómo dijo?| dejame voy a hablar con él | porque era cristiana:: | ya vez que los cristianos son un poquito mas así light| entonces le dije no ta bien y luego ya así quedó || y ya le dije eh me pelié con el| hice berrinche y todo eso pero como yo tenia con  mi hijo  con discapacidad a mis se me hacía bien difícil trabajar::| llevarlo a la terapia y descansar veda:: y luego después a mi más fácil se me hizo pos ta bien/ le decía  voy a seguir contigo así como estábamos pero dame dinero yo  lo que me importa sacar a mi hijo a delante/ porque el señor vende carros tiene  un lote de carros| a mi dame dinero y yo pos:: hazlo que quieras| no me interesaba tanto este su amor o así| yo nomás  lo que quería era sacar a N4 adelante| adelante como lo llevaba a terapias y todo pos ya me valió pero al último si lo dejé a él y  me conseguí otro pior [risa]</p>
			<p><b>123 </b>E: otro peor</p>
			<p><b>124 </b>M3: [risa] si otro peor</p>
			<p><b>125 </b>E:  ¿y el que te:: aplicó violencia es el segundo?</p>
			<p><b>126 </b>M3: si| el segundo</p>
			<p><b>127 </b>E: ¿Ese cómo comenzó::?</p>
			<p><b>128 </b>M3: ese me lo presentó una amiga ay que no se que| pero ya me dijo que el era violento\ agresivo pero yo no lo| si si  se miraba o sea  no figuraba  que era agresivo yo me fui por lo guapo::| por lo alto::| güero| no muy altote asi que  sea garonchudo no [risa] o sea fornido:: y pos con su barba de candado [risa]</p> 
			<p><b>129 </b>E: ¿con su gorrita de que? [risa]</p>
			<p><b>130 </b>M3: barba de candado::</p>
			<p><b>131 </b>E: ¡ah barba de candado!</p>
			<p><b>132 </b>M3: Y ya de que me enamoré de él y ¡ándale::!</p>
			<p><b>133 </b>E: guapísimo:: ya me imagino</p>
			<p><b>134 </b>M3: me gustaba así pero dije mis hijos| mis hijos| el problema fue cuando me fui a acostar con el que me gustó mas\ [risas] /Con todo respeto entonces de ahí ya tuvimos una relación y el se iba pa su casa:: yo me iba pa mi casa| dos años así veda y luego ya me embaracé:: y luego ya este después de embarazarme se fue/  me dejo embarazada a los tres meses no mas que \el papá el otro se hizo responsable pero no tengo nada que ver cuatro años  no tengo nada que ver con el otro papá pero el se hizo responsable mis:: tres hijos y del bebé que tenía en la panza y de mi \no se metía a mi casa ni anda pero efectivamente económicamente si me daba.</p>
			<p><b>135 </b>E: el cristiano</p>
			<p><b>136 </b>M3:  la esposa que era  cristiana| la esposa</p>
			<p><b>137 </b>E: ¡ah la esposa! o sea él no</p>
			<p><b>138 </b>M3: él  no| él que iba a ser cristiano [risas]</p>
			<p><b>139 </b>E: y ese ¿entonces el guapo ya no volvió a aparecer?</p>
			<p><b>140 </b>M3: si</p>
			<p><b>141 </b>E: ah si volvió</p>
			<p><b>142 </b>M3: un día llegó fue a la una de la mañana yo ya estaba dormida y llegó y tocó la puerta [sonido de puerta]  ¿quién es?  H2. ¿Cuál:: J? Pues estaba dormida entre dormida y sola pos te asustas ¡tú! |  no | era él:: llegó en un eco con todas sus garras ¡manita! | todas sus garras y todas sus cosas \ y  
			pero a mi no me contó que yo ya definitivamente no queria estar ya con él| bueno luego ya nos juntamos y todo fuimos a rentar otra casa y todo| mis hijos se regresaron pa ca pa la casa de mi mamá::  y yo este pos yo {rac. sufrí mucha violencia} con él porque no quería que le  hablara ya con mis hijos ya::|  que me metiera en la vida de mis hijos::| no quería que nos viéramos ningún día de la semana::| no quería que hablara con ellos::| no quería que hablara con mi mamá::| no quería que hablara con mi papá::|</p>
			<p><b>143 </b>E-M3 dice ¡válgame y por qué!  ¿que excusa daba?</p>
			<p><b>144 </b>M3: bueno que mis hermanos nunca me apoyaban y que nunca <"4 seg"> no ocupaba de ellos nada| de:: que mi papá | que porque mi papá era  borracho:: y que no se que | y que mi mamá pos que quería mas a uno de mis hermanos:: y que mis hijos que ya estaban grandes y que yo los mimaba mucho:: | y que no se que y con los vecinos mucho menos:: | que porque te metes en problemas y chismes y esto | y el otro | y yo le decía pos llévame a Soriana los sábados o los domingos| para que que:: no se que que soy  una mujer de la calle que yo debería estar en la casa namas| ahí hazme de comer y todo lo que hacía estaba mal.</p>
			<p><b>145 </b>E: pura palabra haz de cuenta</p> 
			<p><b>146 </b>M3: sí y así o sea para que es que llévame al Soriana\ no para que quieres eres mujer de la calle| no quien sabe que quieres andar haciendo en la calle | estas acostumbrada a vivir en la mendiga calle | y que no se va ir no se que| ah ta güeno \ no pos ya barrí y trapee  no / que está todo el mugrero \ a poco así trapeas y quien sabe que eres una marrana una puerca y yo con la espalda quebrada de que ya me cansé de limpiar y recoger\ que no se que y que si pasaba algo/ es que tu tienes la culpa::| tu tienes la culpa de todo| tu me haces enojar y ya este::| bueno el se droga ese guapo| alto| con barba de candado después de pasar el tiempo vi que se drogaba veda y entons dije pos no pos ni modo ahí que se fumaba un cigarro ahí de mota y no lo miraba mal yo lo vi como costumbre de cigarro normal|| y luego después empezó  con nos cambiamos de casa y conoció a unos vecinos con la mentada piedra:: y que el ya había sido adicto pero volvió a recaer en la maldita piedra y ya este pos:: me quería quitar el poquito dinero que me quedaba a mi del mandado y me quiso golpear le hable a la patrulla \ {subr. después::} me fuí | regrese con él otra vez y ese fue hace poquito  y nomás porque no le quise conseguir marihuana y dos cahuamas me quiso agredir:: bueno si me agredió {min. física} | este psicológicamente pero eh  físicamente no porque yo le decía que sí| que yo tenía  la culpa de que no haber querido ir por cahuama/ ay no que es que tu tienes la culpa si| si yo tengo la culpa pero en mi cabeza:: yo tenía mucho coraje/| mi cuerpo tenía mucho coraje pero yo decía  o sea no o sea en la última | yo me  en la mañana hice lonche y  me escapé pa acá [risas] y el miedo que me daba que decía que me iba a matar a mi hijo el de dieciséis  años\ |vas a ver si tu me quitas al bebé yo voy y te mato a tu hijo|| tons yo estaba todo el día en mi casa pensando \p   fue cuando me vine pa aca  a refugiarme aquí porque pos ya hable con la:: con que la abogada que nomás estuviera pendiente pa ir a hablarle a la granadera o así veda por mi hijo| pero pos  esperemos que nunca pase eso</p> 
			<p><b>147 </b>E: No</p>
			<p><b>148 </b>M3: esperemos que  se retracte de eso</p>
			<p><b>149 </b>E: oye y ¿qué piensas hacer saliendo de aquí?</p>
			<p><b>150 </b>M3: Es que tengo varios planes:: y necesito saber bien\ porque haz de cuenta que mi mamá tiene una casa| un departamento ese departamento de ella vive sola|   pero tiene una pareja por que tiene como 15 años que no vive con mi papá 
			<p><b>151 </b>E: ¡órale! ¿también se separaron por violencia?</p>
			<p><b>152 </b>M3: violencia económica</p>
			<p><b>153 </b>E: órale ¿cuántos tipos de violencia hay? [risas]</p>
			<p><b>154 </b>M3: creo que hay como cuatro:: o cinco</p>
			<p><b>155 </b>E: ¿si?</p> 
			<p><b>156 </b>M3: aquí nos enseñaron</p>
			<p><b>157 </b>E: ¿ah sí? Pero cuántas conoces</p> 
			<p><b>158 </b>M3-E la física | la mental | la sexual</p>
			<p><b>159 </b>E: ¿pero tú antes no los conocías esos?</p>
			<p><b>160 </b>M3: no| dice que no te daba dinero porque no te quería dar dinero| por que todo eso este pues  violencia violencia económica::| violencia sexual::| violencia de golpes::| psicológica::</p>
			<p><b>161 </b>E: entonces tú no sabías por ejemplo lo que te pasaba hasta que ya alguien te dijo esto se llama:: violencia psicológica::| violencia económica y tu ya empezaste a relacionar  /ah esto lo de mi mamá es económica esto| asi fue</p>
			<p><b>162 </b>M3: [risas] si</p>
			<p><b>163 </b>E: Ok:: fíjate</p>
			<p><b>164 </b>M3: y este ya me vine pa ca y el papá de mis hijos  nunca:: despues de cuatro años deberas\ te lo juro por lo que mas quieras que no he tenido contacto sexual con él no he tenido nada que ver con él pero él| el \papá de mi bebé no quería que yo le pidiera| que le diera la atención a los niños  pero mis hijos necesitaban mas dinero| entonces yo se los pedía a escondidas::</p>
			<p><b>165 </b>E: ¿tu trabajabas?</p>
			<p><b>166 </b>M3: anteriormente:: si pero ya últimamente no| bueno si trabajaba:: duré quince días| veinte días vendiendo dulces en los mercados y has de cuenta que este el papá de mi hijo decía M3 es que yo no te pido nada a cambio te rento la casa:: te la amueblo pero déjate:: ya de que te estén</p> 
			<p><b>167 </b>E-M3 y tu no lo dejabas ¿por qué no lo dejabas?</p>
			<p><b>168 </b>M3: yo digo que no lo dejaba porque dice la doctora que yo soy:: que yo me|| idialice \a ver si dije la palabra si es correcta| me forme una familia papá|  mamá| hijos| porque como el papá de mis otros hijos nunca estuvo conmigo::  yo lo agarré a él papá| mamá| e hijos y una familia</p> 
			<p><b>169 </b>E-M3 ¡Ah! ::</p> 
			<p><b>170 </b>M3: porque como tampoco tenía yo mamá| papá| e hijos yo miraba en otra gente que era mamá| papá| e hijos y yo también quería tener mi familia::| pero dice la doctora que no es así| que este podemos ser mamá::| hermanos::| papá::| o así o sea que no todos debemos ser lo que yo idealicé| y yo le dije que /comoquiera el otro me gustaba [risas] no por anda me desvelé</p> 
			<p><b>171 </b>E: estaba guapo comoquiera [risa]</p>
			<p><b>172 </b>M3: pero pos eso no vale la pena para sacrificar tu vida</p>
			<p><b>173 </b>E: ¡claro!</p>
			<p><b>174 </b>M3: tus hijos y vivir toda atormentada porque /no nada mas hay un guapo en todo el mundo</p> 
			<p><b>175 </b>E: ¡claro!</p>
			<p><b>176 </b>M3: veda</p> 
			<p><b>177 </b>E: ¿tu te volverías a juntar?</p>
			<p><b>178 </b>M3: Ahorita por el momento no::| no no porque diga no me voy a hacer virgen  ni me voy a hacer santa || si me quedé con miedo que mi hijo:: que la otra pareja le haga daño a mis otros chiquitos que tengo porque yo siento que  la pareja que tuve últimamente le hizo daño a mis \hijos los grandes como que si los asusto y todo eso| entonces  ellos no decidieron que yo fuera su mamá:: que yo me juntara con este hombre:: ellos no decidieron nada y si los afecte /ya están grandes| sí| pero  culpa tengo yo si de quererme dar una vida que no era</p> 
			<p><b>179 </b>E- M3 Claro</p>
			<p><b>180 </b>M3:  si ahora digo no| no| no| ahorita por el momento no y si llegara a no se estar mal que no se que siglo veintiuno / si me buscaría una pareja pero fuera de mi casa</p> 
			<p><b>181 </b>E: Ok</p>
			<p><b>182 </b>M3: o sea fuera de mi casa te veo y el título| a lo mejor estoy mal pero no mis hijos no::  a mis hijos ya nadie me les grita| nadie me les hace nada y tú sabes muy bien que cuando llega otra persona llega a imponer sus reglas y en veces buenas y en veces malas /no sabemos y ahorita como que no</p>
			<p><b>183 </b>E: no ok  pues muchas gracias M3 entonces ya no te voy a ver por aquí</p>
			<p><b>184 </b>M3: no::</p> 
			<p><b>185 </b>E: como quiera te deseo mucha suerte</p>
			<p><b>186 </b>M3: ¿Cómo te llamas?</p>
			<p><b>187 </b>E: E</p>
			<p><b>188 </b>M3: E bueno ya me voy| paso a otra persona| o ya cuantas han pasado</p>
			<p><b>189 </b>E: por favor | nada mas a M1 y a M2</p> 
			<p><b>190 </b>M3: ¡te faltan muchas! ya me voy [risas]</p>
			<p><b>191 </b>E: [risas] no me traumes</p><br />
			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_4" id="entrevista4">
			<h2>Conversación 04 realizada el 10 de Agosto a las 4.00 pm</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista04.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>28:02 minutos.</p><br />
			<p>De acuerdo a la Ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio. </p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 23 años de edad; procedente de Durango; vive en unión libre con su pareja desde hace cuatro años; con dos años de residencia en Nuevo León; radica en el municipio de Apodaca; escolaridad secundaria; fue docente de adultos en el rancho de procedencia; trabajó en una compañía ensambladora de autos, hasta que se unió con su pareja;</p>
			<p>Quince días antes de ésta entrevista vivió un episodio de violencia y por lo mismo decidió salir de su hogar.</p>
			<p>El lugar de la entrevista es una sala climatizada donde solo se encuentran la entrevistada (<b>M4</b>) y la entrevistadora (<b>E</b>).</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p><b>1 </b>E: ¿Cómo te llamas?</p>
			<p><b>2 </b>M4: M4</p>
			<p><b>3 </b>E: M4| ¿Cómo te dicen?</p> 
			<p><b>4 </b>M4: me dicen M4</p> 
			<p><b>5 </b>E: M4</p>
			<p><b>6 </b>M4: si</p>
			<p><b>7 </b>E: haber M4 {m. ubicando la silla}</p>
			<p><b>8 </b>M4: mucho gusto {m. dando la mano}</p>
			<p><b>9 </b>E: hola yo no veo muy bien  M4 [risa]</p> 
			<p><b>10 </b>M4: [risa] no:: te preocupes</p> 
			<p><b>11 </b>E: ahí tú me orientas || ¡no! tú te sientas aquí ¿verdad? yo acá ¿Cómo estás M4?</p>
			<p><b>12 </b>M4: pues bie::n ¡ahí! | echándole ganas</p>  
			<p><b>13 </b>E: oye que tienes poquito aquí</p> 
			<p><b>14 </b>M4: si | llegué el jueves \p <2> {en la noche}</p> 
			<p><b>15 </b>E: jueves en la tarde || tienes poquito</p> 
			<p><b>16 </b>M4: p. pero ya me quiero ir</p> 
			<p><b>17 </b>E: ya te quieres ir | ¿Por qué?</p> 
			<p><b>18 </b>M4: porque yo no soy de aquí</p> 
			<p><b>19 </b>E: ¿de dónde eres?</p> 
			<p><b>20 </b>M4: de Durango</p> 
			<p><b>21 </b>E: ¡órale! ¿qué haces tan lejos? [Risas]</p>
			<p><b>22 </b>M4: vine buscando el sueño de monterrey | [risa] ¡ah! no se crea vine a vivir con mi pareja</p>
			<p><b>23 </b>E: ¿viniste aquí a vivir?</p> 
			<p><b>24 </b>M4: si | tenía varios años</p>  
			<p><b>25 </b>E: ¡ah ya tenías varios años!</p> 
			<p><b>26 </b>M4: ya</p>
			<p><b>27 </b>E: ¿Cuántos años tienes aquí en Monterrey?</p>
			<p><b>28 </b>M4: dos::</p>
			<p><b>29 </b>E: ok | y tú ¿Cuántos años tienes?</p>
			<p><b>30 </b>M4: yo veintitrés</p>
			<p><b>31 </b>E: veintitrés | ¡estás bien jovencita!</p>
			<p><b>32 </b>M4: [risa]</p>
			<p><b>33 </b>E: oye y ¿Qué estudiaste?</p>
			<p><b>34 </b>M4: secundaria</p>
			<p><b>35 </b>E: ¿hasta secundaria nada más?</p>
			<p><b>36 </b>M4: si</p>
			<p><b>37 </b>E: ok:: y estudiaste allá en Durango?</p>
			<p><b>38 </b>M4: mmju</p>
			<p><b>39 </b>E: y ¿aquí trabajabas?</p>
			<p><b>40 </b>M4: no | nunca me dejó {trabajar \p}</p>
			<p><b>41 </b>E: nunca te dejó \ | pero tú ¿te viniste con tu pareja desde Durango o viniste==</p> 
			<p><b>42 </b>E- y aquí lo conociste?</p>
			<p><b>43 </b>M4: no | los dos somos de allá</p>
			<p><b>44 </b>E: ah los dos son==</p>
			<p><b>45 </b>M4: ya tem teníanos cuatro años ju::ntos nos  venimos para acá:: y aquí tenía ya dos años ¿cómo ve?</p> 
			<p><b>46 </b>E: ah ok:: | y luego ¿qué pasó?</p>
			<p><b>47 </b>M4: pos {subr. Problemas} | celos</p>
			<p><b>48 </b>E: de que::</p> 
			<p><b>49 </b>M4: mmmmm supuestamente porque yo tenía otro</p>
			<p><b>50 </b>E: según él [risa]</p> 
			<p><b>51 </b>M4: si</p>
			<p><b>52 </b>E: y ¿si tenías otro?</p>
			<p><b>53 </b>M4: n::a no:: no</p>
			<p><b>54 </b>E: que dices | ¡con ése tengo! verdad</p>
			<p><b>55 </b>M4: si:: y yo a {\él}</p>
			<p><b>56 </b>E: [risa]==</p><br />

			<p>->en este momento se presenta un cambio de estado de ánimo en M4, comienza a llorar e interviene diciendo que lo ama, es visible que quiere hablar del tema, pero es doloroso para ella.</p><br />

			<p><b>57 </b>M4: [e. suspiro] yo lo {subr. amaba}</p>
			<p><b>58 </b>E: lo amabas | y ¿ya no?</p>
			<p><b>59 </b>M4: <"4seg."> [llanto] {ac. ya no}</p>
			<p><b>60 </b>E: ¡mm!</p>
			<p><b>61 </b>M4: [llanto] ya no</p>
			<p><b>62 </b>E: ¿por qué?</p>
			<p><b>63 </b>M4: [e. llanto y suspiro] | no | porque todo lo que he sufrido con él y él no::nca lo ha valorado [habla entre llanto]</p>
			<p><b>64 </b>E: mmj</p>
			<p><b>65 </b>M4: [llanto] hemos pasado por mu::chas cosas | y no ha valorado eso | o sea yo como pareja || siempre lo he {\apoyado} || siempre lo he apoyado | en todo aunque estuviera mal yo lo he apoyado | y él nunca ha valorado eso\</p>
			<p><b>66 </b>E: él ¿en que trabaja o que?</p>
			<p><b>67 </b>M4: mmm sabe de todo un poco || albañil | carpintero | mesero</p>
			<p><b>68 </b>E: de todo hacía</p>
			<p><b>69 </b>M4: si de todo</p>
			<p><b>70 </b>E: ¿tampoco estudió?</p>
			<p><b>71 </b>M4: no || pero aparte él tenía otro trabajo | o sea {ac. \él robaba} pp.</p>
			<p><b>72 </b>E: él ¿trabaja en qué?</p>
			<p><b>73 </b>M4: él robaba</p>
			<p><b>74 </b>E: ¡robaba!</p>
			<p><b>75 </b>M4: o roba todavía || \no sé [deja de llorar]</p>
			<p><b>76 </b>E: ¿enserio? Desde allá ¿desde Durango?</p> 
			<p><b>77 </b>M4: si desde || desde que  | que era adolescente |</p>
			<p><b>78 </b>E: ¡órale! y tú cuando lo conociste ¿si sabías eso?</p>
			<p><b>79 </b>M4: yo no sabía porque no somos de donde mismo {ac./ del mismo rancho no!}</p>
			<p><b>80 </b>E: ¡ah! tú ¿eres de un ranchito?</p>
			<p><b>81 </b>M4: si de un rancho</p>
			<p><b>82 </b>E: y ¿tus papás?</p>
			<p><b>83 </b>M4: allá en Durango</p>
			<p><b>84 </b>E: en Durango | y también  mm así eran tus papás osea==</p>
			<p><b>85 </b>M4: no mis papás no | {\ ellos me enseñaron a respetarme}</p>
			<p><b>86 </b>E: mmj</p>
			<p><b>87 </b>M4: {\mis papás no} / en mi familia no se ha visto nunca eso</p>
			<p><b>88 </b>E: ni violencia ni nada</p>
			<p><b>89 </b>M4: violencia si |</p> 
			<p><b>90 </b>E: ¿si?</p>
			<p><b>91 </b>M4: pero eso no</p>
			<p><b>92 </b>E: de ¿qué tipo de violencia?</p>
			<p><b>93 </b>M4: \ de que mi papá le pegaba a mi {mamá{pp.</p>
			<p><b>94 </b>E: a tu mamá</p>
			<p><b>95 </b>M4: si || yo me acuerdo | cuando | cuando le pegaba</p> 
			<p><b>96 </b>E: tú ¿te acuerdas?</p>
			<p><b>97 </b>M4: si tenía como dos años | y que | yo me acuerdo | como\</p>
			<p><b>98 </b>E: y tú ¿qué hacías?</p>
			<p><b>99 </b>M4: \ me sentaba en un rincón o debajo de mi cama</p>
			<p><b>100 </b>E: ¿debajo de tu cama?</p>
			<p><b>101 </b>M4: || si | yo (me acuerdo) |</p>
			<p><b>102 </b>E: y a tí ¿qué te pasó?</p>
			<p><b>103 </b>M4: ¿a mí? || [llanto]</p>
			<p><b>104 </b>E: haber me voy a poner aquí a tu ladito[m. tocando su cabeza]</p>
			<p><b>105 </b>M4: yo soy como quien dice | soy el patito feo de mi mamá [llanto]</p>
			<p><b>106 </b>E: tú eres el patito feo ¿por qué?</p>
			<p><b>107 </b>M4: || [llanto] porque mi mamá siempre me dice vea que te lo dije 
			[e. suspiro] nunca que sabiste fijar | nunca [llanto y sollozos] ||</p>
			<p><b>108 </b>E: osea tú crees que ¿fué tu error el haber elegido a esa pareja?</p>
			<p><b>109 </b>M4: mmmm n::o <"4segs."> a lo mejor no fué mi error |</p>
			<p><b>110 </b>E: no claro que no</p>
			<p><b>111 </b>M4: porque cuando le digo | cuando lo conocí yo él | o sea si se a se dedicaba a eso pero duró dos años que no | que se controló mucho | que trabajaba decentemente</p>
			<p><b>112 </b>E: mmj</p>
			<p><b>113 </b>M4: sea lo convertí por migo || sea como s si como se dice una pareja |</p>
			<p><b>114 </b>E: ok</p>
			<p><b>115 </b>M4: avanzábamos los dos juntos 
			sino ninguno | y ya | nomás se vino para acá y ||</p>
			<p><b>116 </b>E: y cambió</p>
			<p><b>117 </b>M4: \ todo cambió</p> 
			<p><b>118 </b>E: tú crees que sea aquí el País | digo el Estado</p> 
			<p><b>119 </b>M4: si</p>
			<p><b>120 </b>E: definitivamente</p>
			<p><b>121 </b>M4: si</p>
			<p><b>122 </b>E: aquí la gente es mas agresiva o ¿qué?</p>
			<p><b>123 </b>M4:  mas liberal</p>
			<p><b>124 </b>E: mas liberal</p>
			<p><b>125 </b>M4: aquí la vida la vives | que a cabo no te conocen | que a cabo || o se hay muchas mujeres:: como hombres que no no sé | provocativos | o sea aquí la vida la vives diferente | o te acoplas o | te hacen a un lado || porque él cambió cuando llegó aquí | a de cuenta el se vino {subr. Huyendo} porque hizo || hizo un robo muy grande de allá de donde es | se vino huyendo | y estaba embarazada de mi niño</p>  
			<p><b>126 </b>E: ah tú ¿tienes un niño?</p>
			<p><b>127 </b>M4: tengo dos | tengo dos bebe:::- | tengo una niña de seis | y mi hijo de {p. un año} se vino huyendo | a este | como te digo yo me quedé allá un mes | dos meses mientras me alivié || al llegar aquí todo cambió | o sea | sus amigos de que apoco la vieja | ya no | todavía me acuerdo  decían | como ya no ya no nos va a acompañar a la presa de la boca a pistear || a | a cotorrear con las viejas ||</p>
			<p><b>128 </b>E: ¿así le decían?</p>
			<p><b>129 </b>M4: si || y éste na más se reiía na más decía no pos ahorita no || ahorita no  y eso era lo que en esos dos meses que él se vino primero | sé lo que hacía</p>
			<p><b>130 </b>E: mmm</p>
			<p><b>131 </b>M4: si me cotorreo y a mi me olvidaba | o sea yo estaba allá y no me {subr. Marcaba} | no me mandaba {subr. Dinero} || pero yo digo que fue aquí | siempre le dije en los pleitos | dije es que | todo fué cuando yo le decía vámonos [llanto] | vámonos de donde somos</p> 
			<p><b>132 </b>E: ¿tú quieres regresarte a Durango?</p>
			<p><b>133 </b>M4: si | yo quiero regresar| {\ la verdad si} yo aquí yo no quiero estar | (no quiero)</p> 
			<p><b>134 </b>E: y ¿él sabe dónde estás ahorita?</p>
			<p><b>135 </b>M4: no él no sabe nada él cuando yo le dije que me iba a ir  tuvimos una discusión sabes que yo me voy a ir | me dice sí te vas | te vas porque me vas a cambiar por otro | le digo no | dice {subr. sí como no} te vas a ir al centro ahí a de loca | o sea me dió una palabra que || que me dolió mucho no tyo
			[balbuceos con llanto] cuando el me lo dijo | dije no es cierto | tú no sabes ni a donde voy  dijo si {ac. [a eso vas]} || seguimos discutiendo y ya él se fue:: yo me vine:: || la verdad ahorita yo ya \ ya no me interesa  ni que le haiga pasado ni como esté | \ no me interesa ya nada de él</p>
			<p><b>136 </b>E: pero ¿fueron puras palabras?</p>
			<p><b>137 </b>M4: si o sea | esta vez si fueron puras palabras || hace como en el mero día viernes santo de semana santa | ese día si me {\p. golpeó}  dije yo me voy a ir</p>
			<p><b>138 </b>E: porque ¿qué?</p>
			<p><b>139 </b>M4: yo le dije me voy a ir | {ac. \p. y me golpió} (me golpió varias veces)</p>
			<p><b>140 </b>E: ¿ahí en tu casa?</p>
			<p><b>141 </b>M4: ahí donde rentábamos  nosotros (ac. teníamos rentando casa)</p>
			<p><b>142 </b>E: y ¿esa vez que hiciste?</p>
			<p><b>143 </b>M4: le:: hablé a la policía la municipal | y na:: o sea la forma en que llegaron los polecias | le dijieron a él | o sea todavía me vieron así toda golpiada de este lado [m. señala un lado de la cara y cuerpo] | porque || me aventó contra una pader | lo bueno es que no tenía al niño yo</p>
			<p><b>144 </b>E: mmj ¿quién lo tenía?</p>
			<p><b>145 </b>M4: mi mamá || mi mamá estuvo un tiempo aquí y esa vez yo se lo llevé a ella [sollozos] y o sea los policías llegaron  y dijieron no mira arréglalo bien son pareja | la quieres| no que si || y ¿usted? | no dije yo no quiero saber nada de él con esto ya no | no mira arréglalo que apoco otro bato te la va a quitar sea no te dejes | le decía es que no es por un bato | sea en mi mente yo nunca ha estado tener otro bato y yo con él {\<"basta y sobra} pero | pues no sé él nunca lo entendió | nunca| yo le decía a él nomás tú yo no necesito otro  | cuando yo llegué aquí yo || yo nunca usé shorts cuando estaba con él (p. nunca) decía no short no ni blusas de tirantes</p>
			<p><b>146 </b>E: mmj</p>
			<p><b>147 </b>M4: yo le decía ¿Por qué? no la calor | no ponte pantalón| ponte esa blusa | o me miraba vas a salir así decía así no cámbiate | y yo porque | yo no te quiero ver así decía hasta crees o sea tú vas por la calle tú ves mujeres {no no las veo [usando un tono fingido como arremedando]} ¡porfavor! ¡como no! o sea la mirada es muy natural</p>  
			<p><b>148 </b>E: mmj</p>
			<p><b>149 </b>M4: o sea no si miraba y yo si renegaba  batallaba || pero pus bueno me fui acostumbrando aunque no | o sea muy adentro de mi decía  nombre yo tengo ganas se me antoja una blusa así | y un short así || él de primero o sea cuando nosotros estuvimos allá me dejaba que me soltara el pelo que me lo arreglara | una vez pa yo siempre lo traiba pintado una vez pa | para el día de mi cumpleaños él me lo pintó</p> 
			<p><b>150 </b>E: ¿él te lo pintó?</p>
			<p><b>151 </b>M4: [sollozos y llanto] dice te compre te compre un regalo no es tan grande pero te va a gustar  que es siéntate te voy a pintar el pelo sia porque cumples años si te gusta ándale | me senté | me lo pintó | y en cambio aquí cuando ya estaba aquí yo le decía oye me quiero pintar el pelo ¡a fíjate que no! | oye me lo voy a soltar | a fíjate que no agárratelo</p>
			<p><b>152 </b>E: ah ¡no te dejaba estar con el pelo suelto tampoco!</p>
			<p><b>153 </b>M4: no con nada o sea ni las uñas pintadas o sea nomás cuando el quería</p>
			<p><b>154 </b>E: y ¿eso por qué?</p>
			<p><b>155 </b>M4: no sé [sollozos]</p>
			<p><b>156 </b>E: no nunca dijo porque</p>
			<p><b>157 </b>M4: mmnoo yo creo que era por sus celos decía que | decía que si yo me arreglaba decía si tu te arreglas yo estoy seguro que luego luego me cambias | porque te iba a cambiar</p>
			<p><b>158 </b>E: ¿tú lo quieres?</p>
			<p><b>159 </b>M4: orita ya no</p>
			<p><b>160 </b>E: ¡ya no!</p>
			<p><b>161 </b>M4: mmno ya no todo se fue acabando [llanto] cuando sus insultos | sus regaños que me dicía eso no esta bien M4 | que esto que me decía haz de cuenta llegaba  y dicia como que estas gordita ¿no M4? | antes no estabas así || o sea yo me sentía mal y él o sea yo lo miraba y él se arreglaba | él se miraba en el espejo | él || él decía es que yo | pero es que no estas ni guapo | ni pues ¡no tienes nada! Le digo para digan nombre pos soy acá decía todas las mujeres se fijan en mi le digo no | no:: decía pero tú te fijaste en mi  | a si yo pero no todas se fijan en ti o sea en ese aspecto él me hacía sentir mal</p>
			<p><b>162 </b>E: mmm</p>
			<p><b>163 </b>M4: porque él si se arreglaba cuando salía iba a trabajar | se iba bien arreglado y cuando nosotros salíamos | a no tú no M4 y muévele pronto y rápido y no te tardes || si:: ya no eso fue lo que ya no sé dejé de quererlo| no sé de sentir algo por él || eso fue lo que pasó</p>
			<p><b>164 </b>E: pues si se fue acabando</p> 
			¿oye y que piensas hacer después de esto?</p>
			<p><b>165 </b>M4: {\ subr. Trabajar}</p>
			<p><b>166 </b>E: si | ¿en qué te gustaría trabajar?</p>
			<p><b>167 </b>M4: siempre he trabajado en autopartes:: para carros</p> 
			<p><b>168 </b>E: auto partes para carro ||</p>
			<p><b>169 </b>M4: haz de cuenta se hace lo que es para que prende la luz los | los parabrisas bajen los del carro las ventanas</p>
			<p><b>170 </b>E: pero ¿tú sabes hacer todo eso?</p>
			<p><b>171 </b>M4: todo eso sé</p>
			<p><b>172 </b>E: ¿enserio?</p>
			<p><b>173 </b>M4: yo antes trabajaba en eso yo duré cinco años:: yo aprendí muchas cosas | o sea yo no tengo estudio porque mi mamá no me dejó estudiar |</p>
			<p><b>174 </b>E: no te dejó</p>
			<p><b>175 </b>M4: mi mamá decía que pos pa que que al cabo que todas ahí en el rancho se casaban | tenían hijos | al marido | que echabas lonche | ¿Para que estudiar? si lo ibas a tener el estudio colgado ahí del lado de la estufa</p> 
			<p><b>176 </b>E: el estudio colgado de la estufa [risa]</p>
			<p><b>177 </b>M4: de la estufa si</p>
			<p><b>178 </b>E: ¿así te decía?</p>
			<p><b>179 </b>M4: sí decía si “¿Para qué?” | y yo me fui decepcionando y dije pues sí es cierto me voy a casar | a tener hijos | bla bla bla si es cierto yo decía| pero entré a trabajar muy chiquilla en una fábrica de partes es era Koreana y aprendí haz de cuenta yo | o sea yo me acuerdo o sea me sé todo el procedimiento |
			{ac. / sé me varias piezas los modelos que conectores lleva | que cables | como va:: como es el encintado | pruebas eléctricas}</p>
			<p><b>180 </b>E: ¡oh! ¿sabías que hay una empresa Koreana aquí en Monterrey?</p>
			<p><b>181 </b>M4: mmno:</p>
			<p><b>182 </b>E: se está poniendo también autopartes ahí por pesquería</p>
			<p><b>183 </b>M4: apenas esa empresa creo que te da hasta casa ¿no?</p>
			<p><b>184 </b>E: fíjate que no sé pero yo creo que ¡sí!</p>
			<p><b>185 </b>M4: algo así escuché para Villa Juáréz o Juárez hay otra que se llama Delfis y te pagan muy bien</p>
			<p><b>186 </b>E: ¿en serio?</p>
			<p><b>187 </b>M4: si</p>
			<p><b>188 </b>E: y no te da miedo salir a trabajar y cuidar a tus niños</p>
			<p><b>189 </b>M4: || pues es que la verdad si | a mi no me gusta dejarlo con otras personas {\ no me gusta} y haz de cuenta o sea a lo mejor ahorita si me voy a mi rancho de donde soy y quien quite y no se  en Enero porque allá no hay trabajo no hay nada | lo mas que te pagan son quinientos pesos a la semana y bien trabajado 
			[e. suspiro] y a lo mejor veda suponiendo que | no sé en Enero regrese tal vez veda o sea me pongo a trabajar</p> 
			<p><b>190 </b>E: ah ok o sea pero ¿si regresarías a Monterrey?</p>
			<p><b>191 </b>M4: \a / a lo mejor | a lo mejor si a lo mejor no</p> 
			<p><b>192 </b>E: oye y aquí donde viviste en que municipio</p>
			<p><b>193 </b>M4: Apodaca en Fomerrey cuatro</p>
			<p><b>194 </b>E: y ¿tus niños están aquí contigo?</p>
			<p><b>195 </b>M4: na más mi bebé | y la niña no | cuando yo me junté con él mi mamá me la quitó</p>
			<p><b>196 </b>E: ah ¿sí?</p>
			<p><b>197 </b>M4: mi mamá me dijo te juntaste tú || pero la niña no es de él y dice para que me la trate para que le haga algo no</p>
			<p><b>198 </b>E: y ¿está en Durango?</p>
			<p><b>199 </b>M4: está en Durango | tiene un mes que \ se fué para allá mija</p>
			<p><b>200 </b>E: ook | bueno | M4 ¿cómo las puedo ayudar? ¿qué te gustaría hacer o que te gustaría aprender?</p> 
			<p><b>201 </b>M4: aquí || estaría bien que haga actividades que:: que no na más estés pensando porque aquí caminas por un pasillo | entras por otro | te sientas un rato en el patio y en la cocina</p> 
			<p><b>202 </b>E: y todo eso te hace pensar</p> 
			<p><b>203 </b>M4: Sí o sea haz de cuenta| por un rato no se me olvida todo| estoy platicando| estoy riendo| pero ya cuando me acuerdo {\se me da el bajón} o sea veo a los niños | veo a las niñas y me imagino a mi hija verda [llanto] pienso en mi hija mas que nada</p>
			<p><b>204 </b>E: ¿la extrañas?</p>
			<p><b>205 </b>M4: si ya tengo cuatro años y lo faltan poquitos días para que cumpla años</p> 
			<p><b>206 </b>E: ¿enserio?</p>
			<p><b>207 </b>M4: si | así que pos siento gacho [balbuceos] él era de las personas que {\ no me dan mucha chance de verla} mucho no | o sea al principio si él me decía cuando yo lo conocí yo la hago como mi hija decía hasta crees si decía te quiero a ti y quiero a la niña  mi familia nunca le dio ni le dio oportunidad a él ni me la dio a mi | y a la vez digo a lo mejor estuvo bien pues así como es y las cosas que ha hecho las cosas que me ha hecho hacer | que ni a su mismo hijo quiere | o sea yo digo que no a la vez no lo quiero porque el le tiene miedo | él no es de los niños que se está con él él lo ve o sea se va conmigo porque él ve que si estaba llorando y cállalo y \ llévatelo para allá y yo me fijaba que si el niño estaba comiendo no quería ni una embarradita ni en la ropa porque luego luego nos regañaba a nosotros o le quitaba las cosas y a mi me regañaba y a él también le decía | no quiero verte y es para que tú mamá te traiga limpio le decía pues lo traigo pero es un niño | se ensucia | aparte para eso me tiene a mi o sea lo baño | lo cambio o lo lavo | {[usando otro tono, arremeda a la pareja] si pero mira como lo traes} y yo me fijaba que a él no se le acercaba | si se le acercaba lloraba || <"6seg"></p>
			<p><b>208 </b>E: entonces sugieres algunas actividades</p> 
			<p><b>209 </b>M4: si e::h ha bueno yo se algo de repostería</p> 
			<p><b>210 </b>E: ¿enserio?</p>
			<p><b>211 </b>M4: yo mira yo sé hacer repostería y fui maestra del INEA | aparte</p>
			<p><b>212 </b>E: ¿qué es el INEA?</p>
			<p><b>213 </b>M4: e::ste educación para los adultos | para que no saben leer | escribir | no tienen certificado</p>
			<p><b>214 </b>E: ¿tú si sabes leer y escribir?</p>
			<p><b>215 </b>M4: si || haz de cuenta yo:: ||</p>
			<p><b>216 </b>E: les enseñabas a leer</p>
			<p><b>217 </b>M4: si || haz de cuenta yo tenía varios alumnos {\antes de juntarme con él} cada mes les hacía | o sea yo les daba los libros | o sea les enseñaba o sea les ayudaba a  contestarlos | cada mes este venían de Durango | les hacían un examen y si lo pasaban pues ya llegaban a otro nivel | y así hasta que les daban su certificado</p>
			<p><b>218 </b>E: oye y aquí hay estufa porque haber se me está ocurriendo como que hacer algo</p>
			<p><b>219 </b>M4: si si hay estufa</p>
			<p><b>220 </b>E: ¿con horno y eso?</p>
			<p><b>221 </b>M4: si todo</p>
			<p><b>222 </b>E: ¿todo funciona?</p>
			<p><b>223 </b>M4: si porque el | domingo hicieron pastel</p> 
			<p><b>224 </b>E: ¡ah!:: | pero aquí ya todas saben cocinar ¿verdad?</p>
			<p><b>225 </b>M4: pues si pero || por eso te digo que sea un pastel {subdr./ pastel} no como el que hacen aquí</p> 
			<p><b>226 </b>E: ¿Cómo? [risa]</p>
			<p><b>227 </b>M4: sea el de aquí no lleva ni betún ni relleno || [risa] no lleva nada de eso [risa]</p> 
			<p><b>228 </b>E: y ¿tú lo sabes hacer?</p>
			<p><b>229 </b>M4: si de tres leches</p>
			<p><b>230 </b>E: ¡ay! ¿apoco?</p>
			<p><b>231 </b>M4: si:: | uno para | las personas que tienen diabetes  también sé</p>
			<p><b>232 </b>E: el de splenda ese ¿que le llaman?</p><br />
			<p>—> M4 se nota con mayor seguridad al hablar</p><br />
			<p><b>233 </b>M4: mm no se le ralla  || o sea es la harina integral | se ralla zanahoria | almendras || nueces | {\ y ya no me acuerdo} otra cosa mas que | ahorita la verdad no</p>
			<p><b>234 </b>E: no te acuerdas</p>    
			<p><b>235 </b>M4: no</p>
			<p><b>236 </b>E: bueno  ok:: | fíjate igual y podría || ¿no has propuesto que tú des un curso de eso?</p>
			<p><b>237 </b>M4: \ porque pos estoy con la idea de irme [risa]</p>
			<p><b>238 </b>E: ¿por qué?</p>
			<p><b>239 </b>M4: porque pos ya me quiero ir {pp. no estoy a gusto aquí} o sea aquí batalla una por todo | si tan solo que te cuiden tu niño || o sea tienes obligaciones tambié:: n y || no estás a gusto</p>
			<p><b>240 </b>E: mm</p>
			<p><b>241 </b>M4: \ y por eso ya me quiero ir
			O sea no simplemente | o cuando hay pleitos  aquí entre las | las compañeras | se enojan y || esto y || o sea yo no quiero estar aquí | {ac. y luego aparte yo no le tiro a nada aquí } o sea yo digo | yo que gano o sea me quedo y ¿luego? | sea no tengo estufa | no tengo cama no tengo {subr. Nada} ¿a que me quedo?</p>
			<p><b>242 </b>E: mmj</p>
			<p><b>243 </b>M4: pos me consigo una renta y ¿luego el niño? | si me consigo un trabajo de todo el día y luego  la guardería no es todo el día</p>
			<p><b>244 </b>E: claro</p>
			<p><b>245 </b>M4: \ (yo no tengo nada aquí)</p>
			<p><b>246 </b>E: pues si apenas allá en tu==E-</p> 
			<p><b>247 </b>M4: apenas allá</p>
			<p><b>248 </b>E: ¿con tus papás verdad?</p>
			<p><b>249 </b>M4: \ exactamente{subr en la primera e}</p>
			<p><b>250 </b>E: ta bien ¡M4!</p>
			<p><b>251 </b>M4: pero si estaría bien o sea no se mm la repostería | pueda que haga un no sé:: a enseñar| a leer | a escribir</p>
			<p><b>252 </b>E: ¿hay muchas aquí que no saben leer y escribir?</p>
			<p><b>253 </b>M4: no sé:: se me hace que la mayoría si sabe pero | bueno pues quien quite que lleguen algunas que no veda  nunca sabes que va a llegar</p> 
			<p><b>254 </b>E: cla::ro</p>
			<p><b>255 </b>M4: estaría bien | no sé ejercicios</p> 
			<p><b>256 </b>E: fíjate que ¡si!</p>
			<p><b>257 </b>M4: pa salir en forma [risas de ambas]</p>
			<p><b>258 </b>E: ¡salir guapas!</p>
			<p><b>259 </b>M4: pos es que aquí mm no | nomás estás como los pajaritos viendo pa fuera</p> 
			<p><b>260 </b>E: mm</p> 
			<p><b>261 </b>M4: o sea no mm</p>
			<p><b>262 </b>E: ¿no hay tele?</p>
			<p><b>263 </b>M4: si hay pero pos o sea:: no puedes ver {subr. Novelas} | no puedes ver {subr. Noticias}</p>
			<p><b>264 </b>E: ¿por qué?</p>
			<p><b>265 </b>M4: \ pues porque es violento para los niños</p>
			<p><b>266 </b>E: mmm</p>
			<p><b>267 </b>M4: y ya ve ahora las telenovelas pus || ¡también! |[e. inhalación] así que pos | y luego pos ponle una quiere una [subr. Cosa] otra quiere ver otra [subr. Cosa] pos no se pone una de acuerdo y pus | como va a estar una una también ahí ¿verda?</p> 
			<p><b>268 </b>E: pues si [risa] bueno</p>
			<p><b>269 </b>M4: pero si estaría bien no sé | {subr. Ejercicios}||</p>
			<p><b>270 </b>E: fíjate que si</p>
			<p><b>271 </b>M4: mover el bote un rato por las tardes</p> 
			<p><b>272 </b>E: [risa]</p> 
			<p><b>273 </b>M4: si que si</p> 
			<p><b>274 </b>E: ¿si se permite música?</p>
			<p><b>275 </b>M4: || [m. asiente con la cabeza]</p>
			<p><b>276 </b>E: ¿si?</p>
			<p><b>277 </b>M4: si</p>
			<p><b>278 </b>E: ah ok</p>
			<p><b>279 </b>M4: si algunos pasos de baile yo creo bueno  | {\ es que a mi me gusta mucho el baile} pp. mucho me gusta y haz de cuenta | en mi rancho bueno es un ranchito pero {\ si hay civilización} ¡vea! [risa], ahí también hacen zumba | le llaman zumba</p> 
			<p><b>280 </b>E: ah si zumba</p> 
			<p><b>281 </b>M4: zumba  yo siempre he tenido ganas |</p>
			<p><b>282 </b>E: ¿si? de zumba</p> 
			<p><b>283 </b>M4: si porque yo nunca | y este no me dejaba {\ ir} | {no a que vas y a que vas a que vas [usando un tono fingido, arremedando a la pareja]} y si tú vas yo me voy a meter al gimnasio para hacerme así [m. hace un movimiento con los brazos]</p>
			<p><b>284 </b>E: [risa]</p>
			<p><b>285 </b>M4: nunca fui y pues tengo ganas | {p. yo si tengo ganas}</p>
			<p><b>286 </b>E: ah bueno muy bien M4 entonces ya voy tomando nota de todo ok</p>
			<p><b>287 </b>M4: no si porque | pues a lo mejor yo {subr. me voy} a lo mejor me {subr. Quedo} no sé ero | pos van llegando</p> 
			<p><b>288 </b>E: pues si</p> 
			<p><b>289 </b>M4: y si | si como quiera si es una vida cansada</p> 
			<p><b>290 </b>E: como quiera espero verte aquí pronto yo no veo muy bien soy débil visual pero si me ves por aquí nomás recuérdame soy M4</p>
			<p><b>291 </b>M4: si a lo mejor un día regreso | o sea ahorita no digo que me quede</p>
			<p><b>292 </b>E: ok</p>
			<p><b>293 </b>M4: porque  la verdad no | o sea eso no está en mis planes</p>
			<p><b>294 </b>E: no pero lo que sea mejor para ti | para tus hijos ¿verdad? | y al rato | al rato ¿por qué no?</p>
			<p><b>295 </b>M4: si | al cabo decía mi abuelita que en paz descanse | piedras rodando se encuentran</p>
			<p><b>296 </b>E: [risa]</p> 
			<p><b>297 </b>M4: si es cierto o sea tarde que temprano {subr. ¡aa yo te conozco!  ¡hay si te conozco!} y si pos pue::de que algún día regrese y como no | ¡veda! Yo aquí \ en Monterrey he sufrido mucho</p>
			<p><b>298 </b>E: pues si</p>
			<p><b>299 </b>M4: \ y la verdad no me dan ganas de quedarme aquí [risa]</p>
			<p><b>300 </b>E: [risa] ¡está bien M4 | ¿sabes quienes son de las nuevas? | ¿quiénes son las que llegaron la semana pasada?</p>
			<p><b>301 </b>M4: mm pues ¿no a entrado una chava que la golpio el marido? no se si sea</p>
			<p><b>302 </b>E: ¡hay! no se ¿quién?</p>
			<p><b>303 </b>M4: se ama aaaaamm:: M5</p>
			<p><b>304 </b>E: a si ya se quien</p>
			<p><b>305 </b>M4: somos las mas nuevas la otra ya se fue</p> 
			<p><b>306 </b>E: mmj</p>
			<p><b>307 </b>M4: nuevas nuevas \ pues no nomás nosotras</p>
			<p><b>308 </b>E: bueno ya entonces le dices a otra que pase</p> 
			<p><b>309 </b>M4: si está bien</p>
			<p><b>310 </b>E: bueno M4 pues un placer conocerte | aquí voy a estar ok M4</p>
			<p><b>311 </b>M4: y pues gracias por oír [risa]</p> 
			<p><b>312 </b>E: aquí voy a estar y cuando tengas ganas de platicar con toda confianza ok</p>
			<p><b>313 </b>M4: ¡ah! ok gracias</p><br />
			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_5" id="entrevista5">
			<h2>Conversación  05 realizada el 10 de Agosto a las 2.00 pm</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista05.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>17:55 minutos.</p><br />
			<p>De acuerdo a la Ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio. </p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 33 años de edad; radica en Monterrey; vive en unión libre con su pareja desde hace quince años; la menor de cinco hermanos; única mujer; sus padres residen en Guadalajara; escolaridad preparatoria, hasta el segundo semestre; trabajó en una tienda haciendo bisutería; una semana antes de ésta entrevista vivió un episodio de violencia y por lo mismo decidió salir de su hogar.</p>
			<p>Para proteger la identidad de la víctima se han omitido su primer nombre designado en la transcripción como M5, su segundo nombre designado como M5a, apellido designado como M5c y su sobre nombre designado como M5b.</pb>
			<p>El lugar de la entrevista es una sala climatizada donde solo se encuentran la entrevistada (M5) y la entrevistadora (E).
			</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p><b>1 </b>E: Me llamo E. || ¡sí! | y yo soy voluntaria de una asociació::n y entonces voy a | a | mmm | vaya la intención es platicar con ustedes para conocerlas un poquito | y mmmm ver como les puedo ap apoyar sí | entonces mm necesito nada más conocerlas  que | mmm | por ejemplo | tú ¿Cuántos años tienes?</p>
			<p><b>2 </b>M5: treinta y tres</p>
			<p><b>3 </b>E: y | a:: e:: de | ¿Dónde eres?</p>
			<p><b>4 </b>M5: de aquí de Monterrey [m. golpea con la palma de su mano sobre su pierna]</p>
			<p><b>5 </b>E: ¿sí?</p>
			<p><b>6 </b>M5: si</p>
			<p><b>7 </b>E: ¿tú familia?</p> 
			<p><b>8 </b>M5: mmm | pues mi familia | mis papás viven en Guadalajara | este | ten tengo dos hermanos aquí | pero pos | trabajan fueras | {subr. U} uno si vive aquí radica aquí | los otros dos vienen este por temporadas | i se están hiendo y así</p> 
			<p><b>9 </b>E: ¡ah! ok | tú ¿tienes hijos?</p> 
			<p><b>10 </b>M5: no::/ no tengo hijos</p>
			<p><b>11 </b>E: no | y ¿estás casada?</p> 
			<p><b>12 </b>M5: no || vivía \ en unión libre</p> 
			<p><b>13 </b>E: vivías en unión libre | ok | ¿Cuánto tiempo duraste así? ==</p>
			<p><b>14 </b>M5: == quince años</p>
			<p><b>15 </b>E: ¡órale mucho tiempo::! | oye y que piensas de eso de la unión libre | ya ves que a veces pues juzgan mucho a las mujeres ¡no! Por que dicen ¡ay que no está casada! | que sé yo | ¿tú qué piensas?</p> 
			<p><b>16 </b>M5: mmmm | pue::s || eh | tiene sus pros y sus contras || por ejemplo este:: pues | emmm mno | por lo mismo | de que no estas casado | pos no a veces no lo ves como una / responsabilidad | o así ¿no? || {subr. / pero} también este:: como | casos como el mío que ya no funciona la relación\ pues te puedes separar sin necesidad de tener  hacer un /papeleo | burocracia {[habla entre risa] bajar dinero} |</p>
			<p><b>17 </b>E: exa::cto | o sea si conviene verdad</p> 
			<p><b>18 </b>M5: == en algunos casos |</p> 
			<p><b>19 </b>E: tiene pros</p> 
			<p><b>20 </b>M5: es como todo | tiene sus pros y sus contras también depende de las personas ¿no? |</p> 
			<p><b>21 </b>E: sí | oye y tus papás | ¿todavía viven ?</p>
			<p><b>22 </b>M5: sí</p>
			<p><b>23 </b>E: allá en Guadalajara ==</p>
			<p><b>24 </b>M5: ==sí</p>
			<p><b>25 </b>E: en Guadalajara | donde me decías</p> 
			<p><b>26 </b>M5: bueno | creo que ahorita ya están aquí en Monterrey</p> 
			<p><b>27 </b>E: ah ¡sí! | ¿están aquí en Monterrey ?</p>
			<p><b>28 </b>M5: sí</p>
			<p><b>29 </b>E: y ¿Cómo fué tú niñez?</p>
			<p><b>30 </b>M5: mm | bie::n | todo | o sea | que yo me acuerde todo estuvo bien</p> 
			<p><b>31 </b>E: sí</p> 
			<p><b>32 </b>M5: sí | o sea | tengo puros herma::nos</p> 
			<p><b>33 </b>E: hombres</p> 
			<p><b>34 </b>M5: mju y | pues pos | siempre me consintieron mucho [risas de ambas] porque era la única niña::</p> 
			<p><b>35 </b>E: ¿eres la mas chica?</p>
			<p><b>36 </b>M5: mno tengo un hermano mas chico | y tres hermanos más grandes |</p>
			<p><b>37 </b>E: a ok</p>
			<p><b>38 </b>M5: ¡ah no! de los mas chicos [risas] no pero | siempre me consintieron mucho | \me han apoyado mucho</p> 
			<p><b>39 </b>E: que bueno | que bueno | y | ¿por qué estás aquí?</p> 
			<p><b>40 </b>M5: pos || [llanto] <"11 segs entre llanto y silencio"></p>
			<p><b>41 </b>E: ok | tranquila ¿Quiéres que cambiemos de tema? | o ¿Quiéres que hablemos de eso? |</p>
			<p><b>42 </b>M5: {habla entre llanto [sonrisa ligera] mmmm este::} [llanto] | pues \ mi pareja me golpeó</p> 
			<p><b>43 </b>E: te golpeó | ¿Hace cuanto?</p>
			<p><b>44 </b>M5: [llanto y silencio 4 segs] ac. mañana va a hacer una semana</p> 
			<p><b>45 </b>E: una semana ok | y ¿dices que ya tenías quince años ? | ¿verdad?</p>
			<p><b>46 </b>M5: sí</p>
			<p><b>47 </b>E: y ¿ya había sucedido esto antes?</p>
			<p><b>48 </b>M5: n. h. ¡a::h! el año pasado nos separamos por lo mismo p.</p> 
			<p><b>49 </b>E: entonces ésta ¡es la segunda vez!</p>
			<p><b>50 </b>M5: sí | ya después de eso || o sea yo me separé de él como unos tres cuatro meses | me fuí para Guadalajara | me fuí  dos meses |luego regresé | cuando regresé él me anduvo buscando| cuando él se enteró que yo estaba aquí | me anduvo buscando y puos || {subr. regresamos} | pero | este:: taba tranquilo| hasta hace apenas unos meses se empezó a poner otra vez==</p>
			<p><b>51 </b>E: == muy loco</p>
			<p><b>52 </b>M5: así | muy celoso <"4 segs"> muy posesivo y no pos | yo no estaba acostumbrada a una relación así |</p>
			<p><b>53 </b>E: y de repente cambió?</p>
			<p><b>54 </b>M5: {(tono de duda) a::já} hace como tres años tuvo un problema y después de ahí se empezó a poner medio agresivo</p> 
			<p><b>55 </b>E: en serio</p> 
			<p><b>56 </b>M5: fué  cuando comenzó a ponerse agresivo || él no era así ==e-</p>
			<p><b>57 </b>E: ==mju==</p>
			<p><b>58 </b>M5: y pues || [llanto] {habla entre llanto [sonrisa ligera] pp. ( ahora si me golpeó muy mal...)}</p> 
			<p><b>59 </b>E: ahora si | ¿qué?</p>
			<p><b>60 </b>M5: ahora si me golpeó muy feo [sonrisa ligera]</p> 
			<p><b>61 </b>E: y ¿ya lo había hecho?</p>
			<p><b>62 </b>M5: así no</p>
			<p><b>63 </b>E: y | ¿por qué no:: habías | hecho antes algo?</p>
			<p><b>64 </b>M5: || este:: | pues la vez pasada | no te digo | me separé de él</p> 
			<p><b>65 </b>E: nada más | así</p>
			<p><b>66 </b>M5: sí ya | yo no quería saber nada de él (pero | él anduvo insistiendo y regresamos) | pero hace meses empezamos con {p. problemas} y yo ya le había dicho que ya no quería que estuviera {subr. conmigo} que se fuera él pues la casa donde vivíamos pues la rentaba yo</p> 
			<p><b>67 </b>E: a::h ok | tú ¿trabajas?</p>
			<p><b>68 </b>M5: sí</p>
			<p><b>69 </b>E: si | ¿qué haces?</p>
			<p><b>70 </b>M5: | f. yo hacía artesanía | últimamente pues si estaba trabajando en una tienda | pero \yo vivía de eso antes</p> 
			<p><b>71 </b>E: ¿Qué sabes hacer de artesanías?</p> 
			<p><b>72 </b>M5: de todo | collares | pulseras | aretes ==</p> 
			<p><b>73 </b>E: ah:: fíjate lo que traigo aquí| les traía un regalito [m. abriendo la bolsa para sacar un llavero] || mira ¿eres católica?</p>
			<p><b>74 </b>M5: sí |</p> 
			<p><b>75 </b>E: ó ¿creyente | algo de eso? ¿sabes quien es? ==</p>
			<p><b>76 </b>M5: sí | San Benito</p> 
			<p><b>77 </b>E: es para ti M5 | yo quiero que tú estés bien  | [se escucha llanto ligero  de M5] si | y yo sé que vamos a trabajar mucho muy padre juntas y yo te voy a ayudar en lo que yo pueda ¡sí!</p> 
			<p><b>78 </b>M5: [llanto] gracias</p> 
			<p><b>79 </b>E: entonces mmm || no sé si aquí uses llaves | pero bueno lo puedes colgar por ahí en algún lado [risa]</p> 
			<p><b>80 </b>M5: pues si</p> 
			<p><b>81 </b>E: fíjate que yo lo| empecé a hacerlo | porque | yo soy débil visual no sé si te diste cuenta</p> 
			<p><b>82 </b>M5: sí</p>
			<p><b>83 </b>E: si | entonces a mí me gustan mucho las artesanías | hay algo que yo puedo hacer  mucho y es con las manos | por eso cuando me dijiste que hacías artesanías ¡guau! me identifiqué mucho contigo [sonrisa de M5]</p> 
			<p><b>84 </b>M5: a mí me gusta mucho hacer esto</p> 
			<p><b>85 </b>E: ¡sí! y ¿de eso trabajabas entonces?</p>
			<p><b>86 </b>M5: antes sí | es que mí esposo | bueno mi pareja| también se dedicaba a lo mismo  y por lo mismo que empezamos a tener muchos problemas yo quise tener mi espacio y lo dejé de hacer</p> 
			<p><b>87 </b>E: o::k</p>
			<p><b>88 </b>M5: y lo dejé que él siguiera haciendo eso | y yo me dediqué a otras cosas  | pero a mi me gusta mucho yo lo hago desde los diecisiete años</p> 
			<p><b>89 </b>E: fíjate || oye y tu familia que piensa de:: de  eso que te pasó</p> 
			<p><b>90 </b>M5: pues | este | no he hablado con ellos</p>
			<p><b>91 </b>E: ah todavía no  | no saben donde estás |</p>
			<p><b>92 </b>M5: ahorita sí | apenas el viernes me comuniqué con ellos |pero nada más saben que estoy bien | así | pero entre comillas como que me creen | no me creen [risas]</p> 
			<p><b>93 </b>E: y en tu casa no había pasado algo así | similar |</p>
			<p><b>94 </b>M5: con mis papás y así no | nunca</p> 
			<p><b>95 </b>E: ok</p> 
			<p><b>96 </b>M5: || no en mi casa todo | o sea en cuanto a violencia todo estaba muy tranquilo | p. jamás</p> 
			<p><b>97 </b>E: mju</p> 
			<p><b>98 </b>M5: mi mamá es Directora de un kínder | mi papá trabajó muchos años de la policía judicial</p> 
			<p><b>99 </b>E: en serio::</p> 
			<p><b>100 </b>M5: sí:: | hasta que se jubiló</p>
			<p><b>101 </b>E: o::k</p>
			<p><b>102 </b>M5: y pues ahorita ya no trabaja  ha subr. sufrido tres infartos entonces pues <"4 segs"> él es | he llevado una vida muy tranquila no me gusta tampoco mortificarlos con mis problemas |</p>
			<p><b>103 </b>E: o sea se podría decir que tú | ¿guardaste silencio para no mortificar a tus papás?</p>
			<p><b>104 </b>M5: || sí | [llanto]</p>
			<p><b>105 </b>E: ok||  oye y hasta que nivel estudiaste | de escuela</p> 
			<p><b>106 </b>M5: no termine la preparatoria</p> 
			<p><b>107 </b>E: la prepa no | en ¿qué te quedaste? | ¿en el primero?</p> 
			<p><b>108 </b>M5: en el segundo</p> 
			<p><b>109 </b>E: en ¿Cuál estabas?</p>
			<p><b>110 </b>M5: en la prepa dos  la del obispado</p> 
			<p><b>111 </b>E: ok | ok | bueno| ¿algo que creas que podamos trabajar? | ¿que crees que les puedo ayudar?</p> 
			<p><b>112 </b>M5: pues || no te sabría decir | yo me siento bien estoy tranquila | {[habla entre llanto] yo estoy muy dolida} más que nada porque fueron muchos años que duré con mi pareja</p> 
			<p><b>113 </b>E: pues sí quince años verdad | dices | y ¿piensas volver con él?</p>
			<p><b>114 </b>M5: no</p> 
			<p><b>115 </b>E: definitivamente</p> 
			<p><b>116 </b>M5: no</p> 
			<p><b>117 </b>E: oye | y  que te motivó a decir | oye sabes que | hasta aquí |</p>
			<p><b>118 </b>M5: || pues | todo | este ya | no te digo que yo ya tenía meses  con problemas |   y yo ya había dicho que ya no lo quería ahí en mi casa | yo ya tenía tres meses diciéndole que ya no | lo que me motivó fué que |  este su {subr. cambio} de trato hacia mí |  cuando antes era su pareja |  de repente hizo que yo fuera su || pertenencia p.</p><br /> 
			<p>—> Comienza a mover entre sus manos la bolsa de celofán del llavero</p><br />
			<p><b>119 </b>E: fíjate | y ¿él estudió también? | ¿tiene algún grado de estudios?</p> 
			<p><b>120 </b>M5: lo mismo que yo</p> 
			<p><b>121 </b>E: hasta prepa | y ¿trabaja haciendo artesanías también?</p> 
			<p><b>122 </b>M5: sí |</p>
			<p><b>123 </b>E: y él es de aquí de Monterrey</p>
			<p><b>124 </b>M5: mm | nacido en Aguascalientes | pero si criado aquí</p><br /> 
			<p>—> Comienza a mover entre sus manos la bolsa de celofana del llavero</p><br />
			<p><b>125 </b>E: y ¿su familia?</p> 
			<p><b>126 </b>M5: na más vive una hermana suya aquí | sus demás hermanas y su mamá viven en México p.</p>
			<p><b>127 </b>E: a ok</p>
			<p><b>128 </b>M5: pero es muy desapegado a su familia</p> 
			<p><b>129 </b>E: ¡si!</p>
			<p><b>130 </b>M5: sí ||</p>
			<p><b>131 </b> E: ok  || que | que le dirías por ejemplo | a mujeres que estan en esta situación y que temen o tienen miedo de poner un alto</p> 
			<p><b>132 </b>M5: || pues que no se valoran</p> 
			<p><b>133 </b>E: pero ¿a qué se debe?</p><br />
			<p>—> comienza a mover entre sus manos la bolsa de celofán del llavero</p><br />
			<p><b>134 </b>M5:  no se | yo por mucho que lo quisiera | ya no | ya no | yo me quiero más yo | y yo quiero estar bien |</p> 
			<p><b>135 </b>E: ¡claro!</p>
			<p><b>136 </b>M5: yo sé que a su lado no voy a estar ahí | o sea pus | como voy a poder querer a otra persona si no me quiero \p. primero yo misma</p>
			<p><b>137 </b>E: exacto</p> 
			<p><b>138 </b>M5: o sea eso yo lo tengo muy claro</p><br />
			<p>—> deja de mover la bolsa de celofán del llavero</p><br />
			<p><b>139 </b>E: muy bien | que bien | y bueno |</p> 
			<p><b>140 </b>M5: en mí casa siempre me enseñaron eso |</p>
			<p><b>141 </b>E: sí | te enseñaron a valorarte | tus papás te decían como debías de valorarte</p><br />
			<p>—> M5 comienza a mover entre sus manos la bolsa de celofán del llavero</p><br />
			<p><b>142 </b>M5: sí | que siempre me diera mi lugar p. || no dejara que nadie me hiciera a un lado | o sea | haga lo que yo haga yo {[comienza llanto ligero] tengo una familia que me quiere y que me apoya pp.}</p> 
			<p><b>143 </b>E: a::h ok</p>
			<p><b>144 </b>M5: más que nada yo pienso que | {p. si sientes que te valoran | las personas que quieres} | no tienes por que sentirte (miserable..)</p>
			<p><b>145 </b>E: mmj</p>
			<p><b>146 </b>M5: ni menospreciada |</p><br />
			<p>—> deja de mover la bolsa de celofán del llavero</p><br />
			<p><b>147 </b>E: claro | claro |oye y ¿qué haces aquí en las mañanas como| trabajan aquí hacen algo del aseo  cocinan o cómo le hacen?</p> 
			<p><b>148 </b>M5: sí | aquí cocinamos | hacemos la limpieza |y todo eso| pero ahorita a mi no me han puesto a hacer ni una actividad</p> 
			<p><b>149 </b>E: ah ok | dices que tienes apenas quince días verdad</p> 
			<p><b>150 </b>M5: | tengo una semana | voy a cumplir mañana una semana |</p> 
			<p><b>151 </b>E: ah ok ok y ¿cómo te sientes ahora?</p> 
			<p><b>152 </b>M5: pue::s yo me siento bien | oigo los problemas de los demás y pues | a veces este pues  digo yo no debería de estar aquí | pero en la vida no hay coincidencias n. ni casualidades</p> 
			<p><b>153 </b>E: por qué ¿no deberías estar aquí?</p> 
			<p><b>154 </b>M5: a pos a lo que oigo de los demás | es gente que no tiene apoyo de su fami::lia | | que no tiene un lugar a donde ir || [m. mueve con sus manos el paquete donde viene el llavero] | que están en mucho riesgo</p>  
			<p><b>155 </b>E: ok</p> 
			<p><b>156 </b>M5: | yo no me siento que este en riesgo | y mi familia si me apoya y todo eso | pero | cuando paso el problema y todo | pus no tuve o sea oportunidad de sacar mi celula::r || {[sonrisa ligera] ahí tenía todos mis teléfonos} | no me los sabía de memoria | ya hasta que estuve haciendo memoria y que estaba aquí me acordé del teléfono de casa de mi hermano | por que pos [habla entre risa] desgraciadamente | todos usamos el celular | y nos olvidamos de recordar las cosas</p> 
			<p><b>157 </b>E: si los números |</p> 
			<p><b>158 </b>M5: sí | y eso es muy malo en cierta forma | porque {\ ya ves casos como éste pp.} una emergencia | sí no traes tu teléfono | no tienes a quien llamar |</p>
			<p><b>159 </b>E: y ¿él estaba tomado | algo así | cuando hizo eso?</p>
			<p><b>160 </b>M5: sí | si | él toma mucho  pp.</p>
			<p><b>161 </b>E: y nada más bajo efectos de alcohol ¿se porta así?</p>
			<p><b>162 </b>M5: sí</p>
			<p><b>163 </b>E: cuando no|no esta tomado es diferente</p>
			<p><b>164 </b>M5: sí</p> 
			<p><b>165 </b>E:  ok</p>
			<p><b>166 </b>M5: pp. {es muy diferente  cuando esta tomado}</p> 
			<p><b>167 </b>E: bueno m5 |pues aquí voy a seguir viniendo | si | seguido | si me ves | tú nada más recuérdame [risa de ambas]  como te llamas por que  como no veo entonces no ubico muy bien las voces pero | tú me hablas |</p>
			<p><b>168 </b>M5: [risa ] me dicen M5 | pero no me gusta como | porque así se llama mi mamá | pero yo me llamo M5a siempre me dicen M5b</p><br />
			<p>—>para fines de la transcripción se omiten los nombres, apellidos y nombres cortos; ver la ficha técnica.</p><br />
			<p><b>169 </b>E: enserio</p> 
			<p><b>170 </b>M5: sí</p>
			<p><b>171 </b>E: ¿Que significa M5a?</p>
			<p>—> hablan del significado de su nombre</p>
			<p><b>172 </b>M5: miel en japonés</p>
			<p><b>173 </b>E: en serio | y quién habla japonés |</p>
			<p><b>174 </b>M5: ee | mi abuelo | mi bisabuelo era japonés | de apellido M5c</p>
			<p><b>175 </b>E: ah! tú te apellidas M5c</p>
			<p><b>176 </b>M5: sí</p> 
			<p><b>177 </b>E: que interesante y en qué momento llegaron o que onda se nacionalizaron mexicanos | ¿cómo?</p>
			<p><b>178 </b>M5: llegaron a Ciudad Obregón mi bisabuelo || estaba casado con una señora española  | y ya mi abuelo nació aquí | este él es de allá de Ciudad Obregón | mis papás de Navojoa Sonora | | yo soy tercera generación nacida en México</p>
			<p><b>179 </b>E: ok y nunca has ido a Japón ni nada de eso</p> 
			<p><b>180 </b>M5: no</p> 
			<p><b>181 </b>E: y ¿no te llama la atención ?</p>
			<p><b>182 </b>M5: pues algo:: [risa] | tengo primos que si han ido | y pus mi papá tiene dos hermanos  |</p>
			<p><b>183 </b>E: y ¿Cómo es allá el trato a las mujeres | es cierto que les arreglan el matrimonio y eso?</p>
			<p><b>184 </b>M5: la verdad no sabría decirte | nunca he | o sea no tengo costumbres ni nada de eso</p>
			<p><b>185 </b>E: ya no te tocó a tí</p>
			<p><b>186 </b>M5: no</p>
			<p><b>187 </b>E: ok | entonces ¿Cómo te puedo decir?</p>
			<p><b>188 </b>M5: M5b</p>
			<p><b>189 </b>E: ok bueno | haber y así como juego para asociarte | ¿Si fueras artista qué nombre te pondrías?</p>
			<p><b>190 </b>M5: [risa] | ¿si fuera artista?</p>
			<p><b>191 </b>E: que te gustaría hacer | por ejemplo cantante o artesana pintora | actriz</p>
			<p><b>192 </b>M5: [sonrisa] pintora</p>
			<p><b>193 </b>E: pintora</p>
			<p><b>194 </b>M5: a mi no se me da pintar| ni dibujar</p> 
			<p><b>195 </b>E: [risa] nada de eso</p> 
			<p><b>196 </b>M5: no | se me da los trabajos manuales pero dibujar no</p> 
			<p><b>197 </b>E: y ¿Qué nombre te pondrías?</p>
			<p><b>198 </b>M5: haber | no sé >4 segs< [risa] Frida Kahlo</p> 
			<p><b>199 </b>E: [risa] Frida Kahlo ok | vas a ver que con eso no se me va a olvidar | bueno</p> 
			<p><b>200 </b>M5: mucho gusto  m. se acerca a despedirse de beso en la mejilla</p> 
			<p><b>201 </b>E: un placer conocerte y este | espero te sirva | yo se que si |y aquí nos vamos a seguir viendo | ¡sí Frida!</p>
			<p><b>202 </b>M5: bueno [risas de ambas ]</p>
			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_6" id="entrevista6">
			<h2>Conversación 06 realizada el 3 de Diciembre del 2016 a las 9.00 am.</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/VFMR_Entrevista06.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>1:18:12 segundos</p><br />
			<p>Deacuerdo a la ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio.</p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 40 años de edad; hasta el día de la entrevista se encuentra residiendo en el municipio de San Nicolás de los Garza, Nuevo León; proveniente del municipio de Taxil,San Luis Potosí; divorciada de una pareja violenta con la que duró doce años; tiene dos hijos del matrimonio; después de divorciarce, vivió en unión libre con otra pareja violenta <b>(H2)</b> por siete años; sus padres residen enTaxil; tiene escolaridad secundaria; trabajó desempeñando labores del campo y en casas como empleada doméstica; 7 meses antes de ésta entrevista vivió un episodio de violencia y por lo mismo decidió salir de su hogar y se trasladó a Nuevo León; tras las agresiones, le quedaron lesiones permanentes en el ojo y oído; actualmente trabaja como empleada doméstica desde hace 7 meses.</p>
			<p>Para proteger la identidad de la víctima se ha omitido su nombre designado en la transcripción como M6, su apellido paterno como <b>M6.1</b> y su apellido materno como <b>M6.2.</b></p>
			<p>Dentro de la transliteración se omiten otros nombres como el de la segunda pareja sentimental designada como <b>H2</b>, el nombre de la hija designada como a <b>A1</b>, el nombre del cuñado como H1 y otro como <b>P1</b>.</p>
			<p>El lugar de la entrevista es una sala de un domicilio particular, y únicamente se encuentran la entrevistada <b>(M6)</b> y la entrevistadora <b>(E)</b>.</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p><b>1 </b>E: Bueno e::h mm …entonces te decía | estoy haciendo una investigación..de que tan difícil es para las mujeres que vienen de entornos rurales a la ciudad| si| entonces lo que quiero que me platiques un poquito es más o menos sobre cómo era tu vida en el rancho como es ahora aquí e::h que encuentras de diferente y todo eso es básicamente todo lo que ocupo sí  pero bueno empezamos| primero ¿Cómo te llamas? ¿Cuál es tu nombre completo?</p>
			<p><b>2 </b>M6: M6</p>
			<p><b>3 </b>E: M6</p>
			<p><b>4 </b>M6: mmjju</p> 
			<p><b>5 </b>E: ¿M6 qué?</p>
			<p><b>6 </b>M6: M6.1 M6.2</p> 
			<p><b>7 </b>E: ok | y ¿Cuántos años tienes?</p>
			<p><b>8 </b>M6: Cuarenta</p>
			<p><b>9 </b>E: ¿Cuántos |?</p>
			<p><b>10 </b>M6: Cuarenta porque cuando en mi cumpleaños cumpliré cuarenta y uno</p>
			<p><b>11 </b>E: ¿Cuándo cumples?</p>
			<p><b>12 </b>M6: ya este [risa] el otro sábado</p> 
			<p><b>13 </b>E: [risa]</p>
			<p><b>14 </b>M6: El otro sábado ya:: ya estoy por cuarenta y uno</p> 
			<p><b>15 </b>E: Órale bueno | tú estas casada divorciada ¿cuál es||?</p>
			<p><b>16 </b>M6: Divorciada</p>
			<p><b>17 </b>E: ¿Divorciada?</p>
			<p><b>18 </b>M6: Si</p>
			<p><b>19 </b>E: Ok. ¿Tienes hijos?</p>
			<p><b>20 </b>M6: Si | dos</p> 
			<p><b>21 </b>E: Dos ¿de qué edades?</p>
			<p><b>22 </b>M6: de mm:: el mayor tiene veintidós años ya veintitrés años va a cumplir este Febrero</p> 
			<p><b>23 </b>E: A::h ok</p>
			<p><b>24 </b>M6: veintitrés y la muchacha dieciocho</p>
			<p><b>25 </b>E: Mmm:: ok ¿trabajas?</p> 
			<p><b>26 </b>M6: Si</p>
			<p><b>27 </b>E: ¿Qué haces?</p>
			<p><b>28 </b>M6: Pues ahorita horita aquí estoy con ustedes</p> 
			<p><b>29 </b>E: Si de empleada doméstica verdad</p> 
			<p><b>30 </b>M6: Si así le llama</p> 
			<p><b>31 </b>E: muy bien Vives aquí en | en Nuevo León  porque estás trabajando aquí pero ¿te sabes el municipio dónde vives?</p>
			<p><b>32 </b>M6: ¿Aquí dónde estoy?</p>
			<p><b>33 </b>E: Si</p> 
			<p><b>34 </b>M6: No [risa]</p>
			<p><b>35 </b>E: No</p> 
			<p><b>36 </b>M6: Nomás el nombre las alboradas [risa] nada mas</p>
			<p><b>37 </b>E: Ok</p> 
			<p><b>38 </b>M6: Pero aquí la calle este aquí nono me la se</p>
			<p><b>39 </b>E: Y con tu hermano</p>
			<p><b>40 </b>M6: Allí::  nomás conozco allí [risa] nomás por el este la de tienda de Soriana</p> 
			<p><b>41 </b>E: Por ahí</p> 
			<p><b>42 </b>M6: Ajaam:: pero su calle de ellos allí yo no tampoco no me acuerdo si me lo dicen eh || pero no me acuerdo</p> 
			<p><b>43 </b>E: Ok</p> 
			<p><b>44 </b>M6: Se me olvida</p>
			<p><b>45 </b>E: Si no me equivoco por lo que me ha platicado tu hermano creo que es municipio de San Nicolás en la colonia Carmen Romano si te suena</p> 
			<p><b>46 </b>M6: Algo así</p>
			<p><b>47 </b>E: Ah<"3 segs."> muy bien vamos bien ok mmm este ¿Cuántos hermanos tienes?</p>
			<p><b>48 </b>M6: Yo mm :: Son muchos once</p> 
			<p><b>49 </b>E: ¡Once!</p>
			<p><b>50 </b>M6: Diez hermanos conmigo once</p>
			<p><b>51 </b>E: Ok y todos viven</p> 
			<p><b>52 </b>M6: Si todos</p> 
			<p><b>53 </b>E: Ok. Tú ¿de dónde vienes? ¿de dónde eres?</p>
			<p><b>54 </b>M6: ¿Del MERO MERO donde vive mi mamá?</p>
			<p><b>55 </b>E: Si</p> 
			<p><b>56 </b>M6: ¿Allí a donde voy a llegar? ¿Dónde voy a estar Taxil?</p>
			<p><b>57 </b>E: ¿Taxil?</p>
			<p><b>58 </b>M6: Si pero se llama el Taxil le dicen Taxil porque TAXIL</p> 
			<p><b>59 </b>E: A ok.</p>
			<p><b>60 </b>M6: Ajaam::Taxil</p>
			<p><b>61 </b>E: Taxil</p>
			<p><b>62 </b>M6: ajam::
			<p><b>63 </b>E: Y que significa ese lugar ¿sabes?</p>
			<p><b>64 </b>M6: Según que eeeh:: que muchos años encontraron un este  mmm este una lagartija dibujado en una piedra</p>
			<p><b>65 </b>E: Aaaah::</p>
			<p><b>66 </b>M6: Y por eso  Taxil eses lagartija</p>
			<p><b>67 </b>E: Mmm:: por eso le llama ::</p>
			<p><b>68 </b>M6: Por eso le llamaron así</p>
			<p><b>69 </b>E: Y Taxil es de donde ¿de San Luis?</p>
			<p><b>70 </b>M6: San Luis</p> 
			<p><b>71 </b>E: ¿Si?</p>
			<p><b>72 </b>M6: Si tiene municipio Tampomlone  Taxil municipio de Tampomolon</p>
			<p><b>73 </b>E: ¿Tampomolone?</p>
			<p><b>74 </b>M6: Tampomolon San Luis Potosí</p>
			<p><b>75 </b>E: Aaaah:: muy bien</p> 
			<p><b>76 </b>M6: Estado se San Luis Potosí</p>
			<p><b>77 </b>E: Si</p>
			<p><b>78 </b>M6: Si</p>
			<p><b>79 </b>E: ¿Tú naciste ahí?</p>
			<p><b>80 </b>M6: Si allí nací</p>
			<p><b>81 </b>E: ¿Y todos tus hermanos también?</p>
			<p><b>82 </b>M6: Si todo</p>
			<p><b>83 </b>E: o sea ¿casitoda tu familia tus papás::?</p>
			<p><b>84 </b>M6: Si mis papás</p>
			<p><b>85 </b>E: Y mm ::este e::h tú :: ¿cuándo dejaste ahí y te viniste aquí a la ciudad?</p>
			<p><b>86 </b>M6: Yo apenas este en :: en  este año Abril desde Marzo vine aquí veintinueve o treinta me vine para acá</p>
			<p><b>87 </b>E: Ok. ¿Y no habías venido antes?</p>
			<p><b>88 </b>M6: Sisi había venido nada más a pasear</p>
			<p><b>89 </b>E: ¡Nada más? para trabajar no</p> 
			<p><b>90 </b>M6: No.</p>
			<p><b>91 </b>E: Ok | allá en Taxil ¿hablan algún dialecto?</p>
			<p><b>92 </b>M6: mmmjim || ::</p>
			<p><b>93 </b>E: ¿Cuál?</p>
			<p><b>94 </b>M6: Náhuatl</p>
			<p><b>95 </b>E: Y tú ¿hablas Náhuatl?</p>
			<p><b>96 </b>M6:Síy en Huasteco</p>
			<p><b>97 </b>E:¿Y aparte español?</p>
			<p><b>98 </b>M6: Si</p>
			<p><b>99 </b>E: ¡Órale!</p>
			<p><b>100 </b>M6: Si</p>
			<p><b>101 </b>E: Muy bien ¿estudiaste?</p>
			<p><b>102 </b>M6: Si</p>
			<p><b>103 </b>E:¿Hasta qué nivel?</p>
			<p><b>104 </b>M6: Pues termine cuando estaba chica nomás la primaria y ahora de adulto la secundaria</p>
			<p><b>105 </b>E: Ah ok muy bien y haya en el rancho ¿estabas casada?</p>
			<p><b>106 </b>M6: Mmmju</p>
			<p><b>107 </b>E: Si</p> 
			<p><b>108 </b>M6: Si sí estaba casada</p>
			<p><b>109 </b>E: ¿Y ya no?</p>
			<p><b>110 </b>M6: No pos no nos separamos y nos divorciamos</p>
			<p><b>111 </b>E:Aaah ||:: ¿si te divorciaste de papelería de juez de todo?</p>
			<p><b>112 </b>M6: Si todo firmamos acta y todo el divorcio</p>
			<p><b>113 </b>E: y esa persona ¿era tú primer pareja?</p>
			<p><b>114 </b>M6: Si</p>
			<p><b>115 </b>E: Tu primer pareja ¿ y te volviste a casar después?</p>
			<p><b>116 </b>M6: Me junte otra vez unión libre nomás</p>
			<p><b>117 </b>E: Aaaah ||:: ok</p>
			<p><b>118 </b>M6: Por siete años</p>
			<p><b>119 </b>E: Y casada ¿cuánto duraste?</p>
			<p><b>120 </b>M6: doce años</p>
			<p><b>121 </b>E: ¡Órale!</p>
			<p><b>122 </b>M6: Si doce años</p>
			<p><b>123 </b>E: Entonces los hijos son ¿de quién? ¿De tu primer matrimonio?</p>
			<p><b>124 </b>M6: Si ajam:: con el que me casé</p>
			<p><b>125 </b>E: Pero y ok ¿Y porque te divorciaste?</p>
			<p><b>126 </b>M6: Por problemas porque él me engañaba con otras</p>
			<p><b>127 </b>E: ¡Te engañaba con otras!</p>
			<p><b>128 </b>M6: Hasta que él me dijo que si que si tenía otras otra mujer otra muchacha y me cambio por otra muchacha</p>
			<p><b>129 </b>E: Enserio lo afirmó</p>
			<p><b>130 </b>M6: Si y estuvimos separados un año el durmiendo en su cuarto y yo con mis hijos él se apartó sólo y cuando nos divorciamos yo le dije a la licenciada y el reconoció que si es cierto yo le dije estuvimos separados un año a si es cierto dijo el porqué es cierto yo estaba con mis hijos y el solo se apartó a la otra casa se quedaba solo con ella</p>
			<p><b>131 </b>E: y ¿Dónde vivía?</p>
			<p><b>132 </b>M6: Allí mismo</p> 
			<p><b>133 </b>E: Ok mmm</p> 
			<p><b>134 </b>M6: Él es huasteco</p>
			<p><b>135 </b>E: ¿Vivian en una casa de él?</p>
			<p><b>136 </b>M6: Si aparte de sus padres</p>
			<p><b>137 </b>E: Ok. Y luego te separaste ¿y qué hiciste?</p>
			<p><b>138 </b>M6: Toda la semana problema| todo el año se separó él conmigo se apartó | puro problema yo le ofrecía de comer le lavaba la ropa lo esperaba con tortillas calientitas nunca le di tortillas frías | Nosotros comíamos temprano con mis hijos pero dejaba la masa para tortiarle a él es especial para él  esperaba a que llegue para tortiarle a él siempre le di tortilla suave y calientita nunca le di frías</p>
			<p><b>139 </b>E: Mm :: ||¿y aun así?</p>
			<p><b>140 </b>M6: Aún así nono reconoció lo que yo hacía por él</p>
			<p><b>141 </b>E: Pero los problemas :: ||</p>
			<p><b>142 </b>M6: Si antes después se enojó conmigo que esto que lo otro y dice y luego le digo tu así eres y siempre te enojas en cualquier cosa y yo siempre aquí estoy y se enojó mucho y me dice yo a ti en cualquier rato te mato me dijo |aaaah :: me matas le digo si te mato me dijo tanto te da coraje que este aquí le digo no pues yo me voy le digo yo me voy y me pongo a trabajar le digo tengo mis brazos y mis pies  y lo pensé dos o tres veces antes de dejarlo yo adentro agarro mis cosas y me Salí siempre he ahorrado yo | trabajo ahorro mi dinero tenía mis ahorros que voy y consigo una camioneta y que hecho mis cosas y me fui y entonces  y entonces ya cuando me iba con mis cosas que se me olvida la mano del metate ¿si conoces la mano del metate la mano para moler?</p>
			<p><b>143 </b>E: Si se usa para moler verdad</p> 
			<p><b>144 </b>M6: El metate</p>
			<p><b>145 </b>E: Sí | qué es como una piedrita también ¿no?</p>
			<p><b>146 </b>M6: No | esa no| está largo si esta largo si no es igual como el molcajete es diferente largo y que se me olvida y que me regreso otra vez a la casa y lo encontré llorando | en la puerta me agarró allí  No te vayas no quiero perdóname dice perdóname no quiero que te vayas Y que has hecho le digo nunca va a cambiar siempre sigues así siempre me los has dicho te ofrezco de comer y empiezo hablar dejas de tragar y te sales te largas le digo siempre he intentado hablar contigo ¿En que yo estoy fallando?¿ porque te enojas conmigo? Tú ya no me das para la semana me das doscientos pesos para el mandado y comprar maíz :: || quédate me dice no te vallas y estaba llorando no he digo yo ya agarré la decisión  y me voy y me fui y se quedó llorando nono le hice caso porque yo siempre todo el tiempo se sentaba con nosotros con los niños porque yo siempre estoy con los niños se sienta y le digo ¿en qué estoy fallando? Platícame yo quiero saber no entiendo porque yo siempre te eh apoyado | no dice | se para y se va mejor se mete al cuarto donde él duerme todo el tiempo</p> 
			<p><b>147 </b>E: pero los problemas que tenían ¿era nada mas así de discusión?</p>
			<p><b>148 </b>M6: Mmmjm :: de discusión luego él tomaba y me golpeaba ya después</p>
			<p><b>149 </b>E: ¡Ahhh! También te llego aaa::</p>
			<p><b>150 </b>M6: Si me golpeaba me enfermaba yo bastante mis hijos cuando veían que venían su papá ya borracho corrían atrás de la casa a esconderse se escondían ellos si</p> 
			<p><b>151 </b>E: ¿Porque a ellos también les pegaba?</p>
			<p><b>152 </b>M6: No a mí me veía que me pegaba</p> 
			<p><b>153 </b>E: Aaah ¿nada más a ti?</p>
			<p><b>154 </b>M6: Si nada más a mí</p>
			<p><b>155 </b>E: pero ¿Porqué nada más a ti? si tú estabas en la casa trabajando normal y luego él llega y te pega</p>
			<p><b>156 </b>M6: Ajaaam discutía y discutía y luego nada más a veces no le contestaba y con eso se enoja | quiere que este peleando pero con palabras así que le conteste si y así</p> 
			<p><b>157 </b>E: Aaaah:: || ok</p> 
			<p><b>158 </b>M6: si no le contesto es cuando me golpeaba</p>
			<p><b>159 </b>E: Pero || ::</p>
			<p><b>160 </b>M6: Porque yo me quedaba callada no le contesto porque no tiene motivo | porque estar peleando yo estoy en la casa tú vas trabajas y llegas yo aquí estoy te estoy esperando y en que estoy fallando le digo</p>
			<p><b>161 </b>E: Y entonces y él ¿Cómo te pegaba?</p>
			<p><b>162 </b>M6: Pues me golpeaba en la cabeza</p>
			<p><b>163 </b>E: ¿Con que? ¿Con la mano? ¿Con patadas?</p>
			<p><b>164 </b>M6: Con la mano</p> 
			<p><b>165 </b>E: ¿O con patadas?</p>
			<p><b>166 </b>M6: Si con la mano</p>
			<p><b>167 </b>E: ¿Así cerrada con los puños?</p>
			<p><b>168 </b>M6: si porque es hombre y el golpe es más recio que el de una mujer</p>
			<p><b>169 </b>E: Y tú ¿te defendías?</p>
			<p><b>170 </b>M6: No yo me dejaba que me golpeara</p>
			<p><b>171 </b>E: tú te dejabas</p>
			<p><b>172 </b>M6: si</p> 
			<p><b>173 </b>E: ¿Por qué?</p>
			<p><b>174 </b>M6: y una vez si me defendí porque yo ya tanto pues siempre llega y me golpeaba borracho llegaba si borracho porque nomas y este llegaba y me golpeaba y así | Y una vez que me dio mucho coraje me golpeó recio aquí en mi oreja  y hasta como que se apagó sentí muy feo en la cabeza y que voy y que agarro sobre de él me fui en la playera de aquí de los botones que lo sacudo agarre y me colgué y le rompí la camisa</p> 
			<p><b>175 </b>E: ¿Enserio?</p>
			<p><b>176 </b>M6: si porque me dio mucho coraje me golpeo en la oreja y si me lastimó</p>
			<p><b>177 </b>E: ¿Y ahorita tienes consecuencias? ¿Ya no escuchas bien o si escuchas?</p>
			<p><b>178 </b>M6: aveces cuando este || aveces de repente</p> 
			<p><b>179 </b>E: ¿Enserio?</p>
			<p><b>180 </b>M6: si de repente si a veces siento como que  me duele no sé cómo siento algo así si desde entonces.</p>
			<p><b>181 </b>E: entonces ¿nada más fue la oreja la que te quedo así mal?</p>
			<p><b>182 </b>M6: si pero yo estoy lastimada del ojo también de un ojo</p>
			<p><b>183 </b>E: ¿también ahí te pegó?</p>
			<p><b>184 </b>M6: no es el otro que deje hace poco</p>
			<p><b>185 </b>E: ¿aaa::ósea la otra pareja?</p>
			<p><b>186 </b>M6: también me golpeó || me golpeó también y me pegó en el ojo y yo sentí me va a dejar siega me empezó a salir agua cuando me golpeó me empezó a salir agua así como lagrima pero no espeso así no sé cómo se sentía mi ojo me dolía y no podía ver | si y por eso también lo deje a él también por golpes también</p>
			<p><b>187 </b>E: haber me voy a regresar primero al que fue tu esposo ese cuando te pegaba era nada más cuando estaba borracho.</p>
			<p><b>188 </b>M6: si nada más Cuando esta borracho pues nada más estamos discutiendo Y a veces yo le platico y no me escuchaba</p>
			<p><b>189 </b>E: y ¿lo denunciaste?</p>
			<p><b>190 </b>M6: no nunca</p>
			<p><b>191 </b>E: ¿por qué?</p>
			<p><b>192 </b>M6: eso es lo que me dicen muchas que yo nada más me separé sin denunciarlo y era la obligación de que mantenga a mija por que cuando yo me separé tenía ocho años la niña| ocho años y yo nunca lo denuncié y yo estaba casada y tenía el derecho de denunciarlo y que mantenga a la niña</p>
			<p><b>193 </b>E: claro</p>
			<p><b>194 </b>M6: pero yo nunca lo hice Nunca lo hice ||: nunca</p>
			<p><b>195 </b>E: entonces después de doce años te saliste  te fuiste a tu casa otra vez</p>
			<p><b>196 </b>M6: si me regresé con mi mamá allá en la casa</p> 
			<p><b>197 </b>E: y ¿te llevaste a tus hijos?</p>
			<p><b>198 </b>M6: nomás la niña por que el niño no me quiso seguir</p> 
			<p><b>199 </b>E:aa no ::</p>
			<p><b>200 </b>M6: no Dijo que él se quedaba con su papá y después que yo me fui como una semana estuve allá en la casa de mis papás él fue con el niño dijo que yo me regresara | que el niño me extrañaba que quería estar conmigo y le digo pero es que lo hubieras pensado antes le digo yo ¿en qué fallé? Dime ¿en que fallé? Pues yo sé que no dice por eso te estoy pidiendo que regreses no || le digo para regresar está muy difícil le digo ya me Salí me salí le digo yo porque ya sufrí mucho le digo no es de un rato le digo son muchos años que sufrir y luego dice no || regrésate No ::le digo no Y volvió como tres | cuatro veces fue a la casa a decirme que me regresara con él que él va a cambiar vamos a salir a pasear con los niños y que me regresara.</p>
			<p><b>201 </b>E: y ¿él antes no hacía eso verdad?</p>
			<p><b>202 </b>M6: no | le digo no yo ya no me regreso no ::le dije no me regreso y no me regresé</p>
			<p><b>203 </b>E: y él | él ¿porqué era agresivo? también su familia era así</p>
			<p><b>204 </b>M6: si su papá | Que era mujeriego y golpeador</p>
			<p><b>205 </b>E: también</p> 
			<p><b>206 </b>M6: si y así me platicaba su mamá de él</p> 
			<p><b>207 </b>E: y la señora que te platicaba|  no te decía ¿porqué aguantaba ella?</p>
			<p><b>208 </b>M6: ella dice que || es mi suegra la que me dijo y ella dice que por sus hijos aguantó los golpes y el señor mujeriego y porque ella estaba casada que por eso  La obligación de estar con su esposo y sus hijos así me decía por eso me dijo y le digo pero es que me golpea cuando llega borracho ¡aguántalo! como yo estoy aguantando a mi viejo me dijo me dijo una vez así a ella la única que le platique y mi suegro nunca le platique hasta ahora hace poco que me dijo su hermana de él de mi suegro dijo ¿Porqué no platicaste con tu suegro? ¿Por qué no le comentaste como te maltrataba el señor? Dice que él hubiera hablado con su hijo y no se hubieran separado estuvieran unidos con tus hijos y ustedes dice tu nunca le platicaste dice no || pues yo le dije a mi suegra y nada más me dijo que me aguante le digo como ella está aguantando le digo y por eso yo nunca platiqué con él le digo yo le tenía confianza a mi suegra le digo</p>
			<p><b>209 </b>E: y ¿en tú familia? Tus papás</p> 
			<p><b>210 </b>M6: igual</p>
			<p><b>211 </b>E: igual ¿qué?</p>
			<p><b>212 </b>M6: de que ¿de qué fueron mis papás?</p>
			<p><b>213 </b>E: ¿ahí también había agresiones?</p>
			<p><b>214 </b>M6: sí también yo cuando estaba chica me golpeaban mucho me pegaban mucho</p>
			<p><b>215 </b>E: ¿tus papás?</p>
			<p><b>216 </b>M6: si || mi mamá y mi papá porque a nosotros siempre nos ocupaban en cualquier cosa que vayas a traer leña que acarrees agua a los animales siempre todo el tiempo en ese tiempo yo cuando estaba chiquita pues ellos molían caña había mucho trabajo había que acarrear caña ir a lavar los moldes a donde iban a echar la miel pues yo Siempre me ocuparon y si digo que no ahí va la braña o el cinturón</p>
			<p><b>217 </b>E: [risa]</p>
			<p><b>218 </b>M6: sí siempre todo el tiempo</p>
			<p><b>219 </b>E: y ¿entre ellos se peleaban entre tus papás?</p>
			<p><b>220 </b>M6: si mi papá ahora también en este tiempo igual tomaba mucho mi papá</p>
			<p><b>221 </b>E: ¿le pegaba a tu mamá?</p>
			<p><b>222 </b>M6: si también</p>
			<p><b>223 </b>E: ¿si:: ?</p>
			<p><b>224 </b>M6: si yo lo veía cuando le pegaba cuando estaba chica le pegaba mucho por que llegaba borracho agarraba machete agarraba mecate</p>
			<p><b>225 </b>E: He :: mecate para ahorcarse?</p> 
			<p><b>226 </b>M6: Si porque decía que se iba a ahorcar porque el traía coraje no sé de qué pues entre ellos no sé qué problemas tenían</p> 
			<p><b>227 </b>E: ¿Pero nunca lastimó a tu mamá?</p>
			<p><b>228 </b>M6: ¡No nunca! Nunca la lastimó</p>
			<p><b>229 </b>E: ¿con el machete y así no? Nunca</p>
			<p><b>230 </b>M6: No | bueno | que yo viera no a mi mamá nunca la vi golpeada así la espantaba con machete pero siempre se metía mi padrino y su hermano de mi papá y mi abuelito vivía de junto | mi abuelito si | ellos defendían a mi mamá para que no la golpeara</p>
			<p><b>231 </b>E: y ¿tus abuelos también o sea eran así violentos?</p>
			<p><b>232 </b>M6: No sé a mi abuela nunca la conocí ahí no sé nunca la conocí</p>
			<p><b>233 </b>E: ¿entonces después de separarte decides separarte? Te fuiste con tus papás bueno al ranchito que tienen ahí y luego ¿cuándo conociste a tu segunda pareja?</p>
			<p><b>234 </b>M6: después de no sé ocho nueve diez once años este después de tres años yo creo después de tres años lo conocí a él | sí porque mi niña tenía tres  años cuando nos fuimos a vivir con él</p>
			<p><b>235 </b>E:  y ¿también vivía ahí?</p>
			<p><b>236 </b>M6: si ::la niña si vivía conmigo</p>
			<p><b>237 </b>E: No y este señor que conociste</p>
			<p><b>238 </b>M6: a :: no | a :: si cerca de ahí vivía de la casa de mi mamá en ese ranchito</p>
			<p><b>239 </b>E: Y ¿Cómo lo conociste a él?</p>
			<p><b>240 </b>M6: Él :: este :: una vez que yo como yo ya cuando una vez que empecé a trabajar comencé a buscar trabajo salía tarde me voy en la mañana a las seis de la mañana me iba a las cinco de la tarde salía y en esa vereda un camino no es carretera y este iba caminando y que me lo encuentro ahí él venía de su milpa y el pasaba y no me dejaba pasar y yo no ya déjame pasar ya es tarde y yo ando sola le digo y dice nono te voy a dejar ir dime si quieres andar con migo me dijo ¡no! Ahorita yo no quiero le digo le digo no yo comencé a trabajar y voy a trabajar</p>
			<p><b>241 </b>E: ¿y en que trabajabas?</p>
			<p><b>242 </b>M6: yo en la casa también le ayudaba a lavar a la señora a hacer limpieza</p>
			<p><b>243 </b>E: ¿ese era el único trabajo que era diferente del campo verdad? Porque siempre habías trabajado en el campo en la milpa haciendo tortillas cocinando y luego entonces ¿le dijiste que si?</p> 
			<p><b>244 </b>M6: no yo le dije que no no ahorita no le dije no dime me dice y le digo después déjame pasar voy a pensarlo le digo voy a pensarlo muy bien le dije yo y él venía medio tomado y no le digo mejor cuando estés bien le digo ahorita vienes tomado se ve le digo se ve se nota ¡no yo no e tomado nada! Me dice ven y yo no mejor después le digo platicamos le dije y luego dice a bueno me dice pero yo te voy a ir a dejar a tu casa me dijo le digo no le digo yo no quiero no quiero andar así le digo yo estoy en la casa de mis papás le digo y eso que tiene me dice no :: le digo después si a bueno dice ya vete me dijo y luego me dice ¿Cuándo te veo? No se le dije yo a y luego le dije :: ¡ya me fui corriendo ya me daba miedo porque el tomado no estaba borracho borracho! | borracho es diferente Y ya me fui ya entonces este luego otro día un domingo lo encontré ahí en el pueblo en un pueblito me lo encontré y otra vez que hablo y me dice ¿qué? Y ¿Qué le has pensado? Me dice y yo este ::ahorita todavía no le pienso nada pero ya te dije días que le pensaras me dice no le digo luego y luego ya después le digo cuando ya después que me había hablado que me habla su mamá me hablo su mamá me la encontré ahí caminando me la tope con él y me dice estas bien me dice y yo si le digo ¿porque? A nomas este te quiero decir es que me dijo mi hijo me dijo ¡y yo ya había platicado yo con él! Y luego dice este dice que si le vas a hacer caso dice háblame me dijo ya me había desde cuando me dijo ¿Cuál hijo? Les dije yo ¡mi hijo mayor! Me dijo y luego le digo ¡no lo conozco le dije yo? Le digo yo no lo conozco le digo y luego dice ¿no lo conoces? No | no lo conozco y ya después me dice su nombre se llama H1 me dice es el mayor mi hijo mayor me dice y dice que te saluda me dijo dice el día que te la encuentres ahí me la saludas me dijo me dice ¡a! muchas gracias le digo | me dice ahí luego te habla cuando te vea me dijo | a || está bien le dije</p>
			<p><b>245 </b>E: y ¿a si duraron mucho tiempo hasta que ya te decidiste?</p>
			<p><b>246 </b>M6: ¡si :: !y luego ya fue a la casa y me dijo no pues ve por tus cosas y vamos a tu casa y fuimos a la casa y ¡mi mamá ni caso le hizo no le hablo nada!</p>
			<p><b>247 </b>E: ¿Por qué estaba enojada tu mamá? ¿no quería que te fueras o ¿qué?</p>
			<p><b>248 </b>M6: No no me dijo nada mi mamá la que si se enojo fue A1</p>
			<p><b>249 </b>E: ¿Tu hija?</p>
			<p><b>250 </b>M6: la niña estaba chiquita pero estaba bien enojada| bien enojada que porque me iba a juntar otra vez con ese señor que nos íbamos a quedar con sus abuelos ahí</p>
			<p><b>251 </b>E: ¿luego se fueron a dónde? A casa de él</p>
			<p><b>252 </b>M6: a casa de él como él tenía su casa aparte no con su mamá</p>
			<p><b>253 </b>E: ¿el trabajaba?</p>
			<p><b>254 </b>M6: sí |sí trabajaba</p>
			<p><b>255 </b>E: ¿en qué?</p>
			<p><b>256 </b>M6: pues hacia una jornada que de ahí trabajos</p>
			<p><b>257 </b>E: ¿también tu esposo? Tu primer esposo</p>
			<p><b>258 </b>M6: también</p> 
			<p><b>259 </b>E: ¿también trabajaban en eso verdad?</p>
			<p><b>260 </b>M6: si</p>
			<p><b>261 </b>E: y luego este se fueron y empezó todo muy bien</p>
			<p><b>262 </b>M6: m ::jum || todo muy bien! Estaba muy bien si tomaba todo el tiempo tomaba</p>
			<p><b>263 </b>E: ¡u quela!</p>
			<p><b>264 </b>M6: todo el tiempo pero nunca fue a golpearme así que golpes que me diera o así maltrato nunca Cuando él tiene dinero él nos compra lo que nosotros queríamos o lo que le pedíamos lo que nosotras necesitábamos él nos compraba nos daba dinero nunca nos negó nada todo estaba bien</p>
			<p><b>265 </b>E: ¿y luego?</p>
			<p><b>266 </b>M6: y luego empezó a trabajar ahí en Tampico nos traía cosas de allá y el guisaba asía la comida todo el hacía ya después hasta hace poco que no se levantaron chisme contra mi hija ya ahí levantaron mucho chisme ya mi hija andaba en la secundaria ya y le sacaban chisme que la habían visto con un muchacho besándose que abrazándose que hay en la calle que no sequé ¡y mi hija saliendo de la escuela llegaba temprano muchos llegaban tarde! Pasaban los viernes y como era el último día de la semana los viernes ¡muchos se quedan en la plaza andan ahí paseándose! Digo y como es día de comercio allá los viernes y mi hija no ella llegaba siempre temprano y cuando yo me voy pues me regreso con ella y ahí anda conmigo</p>
			<p><b>267 </b>E: ¿entonces no era cierto eso?</p>
			<p><b>268 </b>M6: No era cierto esos chismes y por eso nunca lo creímos nosotros y él se daba cuenta cuando él estaba pues cuando llegaba temprano ya llegue mami y papi ya llegue dice y ahí anda siempre todo el tiempo le dijo papá a él siempre le dijo papá y este y así le levantaron mucho chisme y hasta me fue a reclamar Y luego ya yo platiqué con una cuñada ahí su cuñada de él y yo platiqué con él y luego le pasaron el chisme que yo no sé que dije y pues es qué yo platiqué le digo porque mi hija bien que la conoces le digo que ella no se mete con nadie |no platica con nadie |no se arrima con nadie |no se anda metiendo con nadie| le digo y tiene amigas ¡tiene amigas en la escuela pero aquí |aquí la familia nunca! Le digo y le dijeron todo le pasaron a la hermana de él ¡y luego ella vino a reclamarme ahí en la casa! Vete a dentro así como aquí si tienen problema viene y se mete y reclama cosas que no son reclamo | ¡pero frente a él siempre me reclamo algo frente a él!</p>
			<p><b>269 </b>E: ¿tu cuñada?</p>
			<p><b>270 </b>M6: siempre me reclamó una cosa</p> 
			<p><b>271 </b>E: y el nunca lo detenía?</p>
			<p><b>272 </b>M6: pero él dijo pero por qué |por qué tú tienes que venir a reclamarle aquí Por qué le dice por qué tienes problema contra ella ¡no pues es que anda platicando anda diciendo chisme que no se qué! Pero yo no lo escucho y no se para dónde va le dije y nos defendía siempre | siempre nos defendió</p></p>
			<p><b>273 </b>E: y allá es muy mal visto que salgan con algún muchacho y que lo bese o ¿Qué?</p>
			<p><b>274 </b>M6: allá sí| por eso luego luego lo hablan mi hija ni tenía novio para acabar no tenía novio mi hija. Nunca lo vi con un muchacho nunca bueno ya después tenía amigos</p>
			<p><b>275 </b>E: oye entonces allá no está muy bien visto que se besen antes de que sean novios</p>
			<p><b>276 </b>M6:  si luego luego levantan chisme pero mi hija ni tenía novio eso fue lo que yo le dije y me dio mucho coraje</p>
			<p><b>277 </b>E: luego entonces todo comenzó por ese chisme| y en qué momento él se pone agresivo| porque me comentaste ahorita que te pegó</p>
			<p><b>278 </b>M6: si ya después porque esa hermana no nada más dos veces fue tres veces fue como cuatro veces fue a reclamarme no sé que tanto y le digo yo no he dicho nada contra usted le digo ¿por qué tanto problema? ¡Hay desde que ha llegado ella nosotros tenemos muchos problemas! Dijo ella y oyendo su hermano dice desde que ha llegado tenemos problemas con ella hemos tenido problemas dijo desde que ha llegado él ¿sí? no dirás que yo me la traje dice ella no ha venido sola yo me la traje le dijo yo me la traje por eso están aquí por eso están aquí con migo no es porque se vino ella yo me la traje le dijo ¡hay tu que tanto la defiendes a ella no seque tanto la quieres tu ya no eres mi hermano H1 tu ya no eres mi hermano! Le dijo así le dijo su hermana le dijo pues si tanto coraje le tienes contra ella pues dime  lo que traes dice yo me los llevo a Tampico ahí van a estar bien y felices le digo no como aquí con problemas con cualquier chisme te vienes corriendo reclamando le dice y dice no mejor me la llevo le dice | ¡no eres bien pendejo! Dijo | su hermano ¡eres bien pendejo | ya no eres mi hermano! Le dijo pues yo ya se que no soy tu hermano le dice por eso estas tratando así nos vienes y nos reclamas cualquier cosa nos dices pendejadas por eso vienes aquí a reclamar cualquier cosa. No le dijo tu siempre le digo si tienes coraje pues tu si quieres a tu hermano pues quédatelo y cuídalo le digo quédate como si fuera tu esposo le digo hay no || como crees pues si eso es lo que te da coraje que yo esté viviendo con tu hermano le digo quieres te mantenga le digo | pues quédate y yo me voy le digo que problema tenemos le digo contra usted le digo | para que me vengas a insultar si yo no he dicho nada le digo y ya no dijo nada ella ya se fue mejor a su casa si hasta || también se quería meter su mamá y el señor ese no lo dejó nunca lo dejó dice amá tú no te metas en chismes tu mejor vete a la cocina vete a ver qué haces allá ponte hacer un trabajito le dice la agarro de los hombros y encamino su mamá |Por que ella va y va a ayudar a su hija la mamá si lo quería ayudar.</p>
			<p><b>279 </b>E: entonces ¿Por qué si era tan bueno por qué te separaste?</p>
			<p><b>280 </b>M6: ¡pues! Por los problemas que que tuvimos con su hermana luego de ahí yo todo el tiempo le ayudé cuando el no está y tenemos mil maicitos en la milpa que tiene monte y pues yo siempre lo he cuidado chapuliar a limpiado yo siempre y este pues como ya tuvimos mucho problema y yo ya estoy muy cansado de los problemas una vez y tú que crees que yo no le digo y yo cuando le ido a reclamar le digo nombre si dice y ya de allí empezaron a levantarme chismes</p>
			<p><b>281 </b>E: ahora a ti</p>
			<p><b>282 </b>M6: a mi || que no que esto y que el otro que yo voy a la milpa que yo voy muy tarde a la milpa que no sequé hago allá || y así</p>
			<p><b>283 </b>E: ¿con otro señor o qué?</p>
			<p><b>284 </b>M6: eso es lo que querían decir yo creo y yo le dije estas dudando de mi o que le dije yo tú estás allá y yo aquí le digo y nunca dices cuando vas a regresar ya para acá o cuando me voy para allá con tigo le dije a no dice y luego ya comienza a reclamarme cosas que esto que lo otro le digo ¡no! Gracias a Dios que yo estoy aquí le digo estoy bien y te he respetado desde que estoy aquí con tigo le digo en cambio tu no le digo yo te he visto cómo eres le dije yo Que una vez borracho estaba borracho ahí en la casa y pasa mi mamá y mi hermana mi mamá la vio y lo abrazó la abrazó a mi mamá y luego de ahí ya va y que abrázame hermana y empezó a besarla la empezó a besarla y mi hermana nada más se dejó no lo empujó ni le reclamo nada nada más se dejó que la besara.</p>
			<p><b>285 </b>E: Y ¿tú qué hiciste?</p>
			<p><b>286 </b>M6: yo estaba viendo nada más no le dije nada nada más lo vi || y por eso yo le dije le reclame y le dije no! Tú eres así ¿yo cuando me has visto? ¿Cuándo me has visto? Le digo a nadie me ha faltado al respeto ni un hombre le digo y nunca me voy a dejar le digo si alguien me falta al respeto yo voy a hablar le digo no tengo porque aguantar le digo en cambio tu si le digo tu quien sabe como antes para allá le digo y estás echándome a mí aquí y yo le digo yo no le digo tú y tú familia me ven como soy le digo y lo vas a ver vas a saber con quién le digo ver con quien te ando engañando con quien ando le dije yo y que hay mi hermano dijo que te vio que nose qué me dijo ¡que yo me le ofrecí con su hermano! Así dijo Que ya donde el trabaja ahí mismo, su milpa de él él naranja él tiene andaba chapuliando ahí un naranjal y que según yo fui a verlo y que me le ofrecí ¿de qué manera me ofrecí? Le dije yo y si fui a verlo esa vez pero él fui porque como teníamos elotes yo iba en las mañanas temprano me iba a cuidar con los pájaros se amontonaban mucho allá mucho elotes así cuando ahy yo me fui y él a mí me había hablado en el celular me dijo hay le dices a mi hermano que chapuliar por si lo vez ahí anda en el naranjal y yo dije ¡a bueno! Yo muy obediente a lo que me dijo yo le digo dije y ya fui y escuche que andaba ahí chapuliando y le di :: je y pues como le decimos H2 le digo H2 me dice que paso dijo tu hermano que si ya le empesaste a chapuliar otra vez aquí el naranjal que lo termines todo le digo ha hablo dijo si |si hablo le digo hablo tu hermano y me dijo que te dijera que lo terminaras ya que regrese ya te paga los días le digo que has trabajado le digo ha bueno a no ya me había dicho el me dice a bueno está bien le digo y ya me fui y sus hijos en cuanto yo estaba platicando con él llegan</p>
			<p><b>287 </b>E: ¿ha él tenía hijos?</p>
			<p><b>288 </b>M6: si tiene dos</p>
			<p><b>289 </b>E: ¿era divorciado?</p>
			<p><b>290 </b>M6: ¡No! Tiene mujer |Él tiene mujer</p>
			<p><b>291 </b>E: ha ¿está casado?</p>
			<p><b>292 </b>M6: si bien casado tiene sus hijos</p>
			<p><b>293 </b>E: ¿y todavía vive con la señora? ¿y todavía vive con la señora? Ósea ¿vivía con las dos?</p>
			<p><b>294 </b>M6: no || es su hermano de él con el que vivía yo el señor con el que lo dejé su hermano es su hermano porque trabajaba en el naranjal ahí mismo</p>
			<p><b>295 </b>E: ¿oye que es chapuliar?</p>
			<p><b>296 </b>M6: chapuliar es cuando hay monte y este || chapuliar  es machetear || con machetes las hierbas</p>
			<p><b>297 </b>E: ha:: las hierbas</p>
			<p><b>298 </b>M6: ha ha las hierbas</p> 
			<p><b>299 </b>E: ha:: ok | oye entonces ¿de ahí empezaron los problemas?</p></p>
			<p><b>300 </b>M6: si ahí es donde empezó él a decirme y fue donde le dije no le dije yo fui a ver a tu hermano y si lo fui a ver pero yo fui a decirle que se pusiera a chapuliar esos naranjales le dije nada más le dije y en ese momento llegaron sus hijos le digo yo ya me vine le digo no supe en que decirle cosa más le digo nada mas lo que me dijiste le digo yo ya me vine para acá a la casa le digo no pero anda diciendo ahora esto que tú te le ofreciste pero de qué forma me ofrecí a menos que no tuviera de tragar le digo ni eso voy a hacer le digo mientras tenga mis manos yo me pongo a trabajar y cualquier rato si de veras no tengo que comer le digo me voy con una amiga una conocida ahí voy a comer le digo si tanto traído hambre le digo pero de andarme haciéndome eso yo nunca le digo nunca que me perdone Dios le digo nunca lo he hecho nunca lo haré nunca me voy a ofrecer con un hombre le digo y menos con tu hermano le digo pues nunca voy a estar con ellos le digo.
			<p><b>301 </b>E: ¿y él nunca lo entendió? ¿se puso celoso?</p>
			<p><b>302 </b>M6: sí no ni cuando tomaba ¿Verdad que si que te gusta mi hermano? me decía y así me decía siempre como crees estas bien perdido le digo aunque tanto tomas trais en tu cabeza pero yo no jamás voy a hacer eso le digo ¿dime con otro hombre? Le digo | ya después de mucho coraje | pero menos con tu hermano le digo | con tu hermano no, me da asco le dije yo hasta fuera con otro le digo me da asco le digo yo estoy estoy contigo estoy viviendo aquí le digo porque sé que yo no soy de esas personas le digo
			<p><b>303 </b>E: claro | y entonces | ¿cuándo fue que te agredió?</p>
			<p><b>304 </b>M6: después ya cuando este |estuvimos ya esos días que de tanto pelearnos yo ya no me voy a regresar porque en ese tiempo cuando me reclamó me golpeó</p>
			<p><b>305 </b>E: ¡ha! Cuando dijo que te habías ofrecido con su hermano Ahí ¿fue lo del ojo? 
			<p><b>306 </b>M6: ¡No! || este me había ofrecido dijo | lárgate de una vez antes que yo se que te encuentro o que sepa más me dijo y me pegó | Me dio una cachetada y a mí me dolió y le dije a esta bien si me voy y agarre mis cosas y me fui ya paso una semana y me empezó a hablar ¡no regrésate regrésate! No || me dice yo voy a estar contigo me dice me dijo voy a cambiar me dijo ¡no para que cambies esta muy difícil! Le dije yo porque yo sé que no hago nada yo estoy en tu casa te he ayudado te he apoyado ¡lo que tienes! es por mí también le digo yo no soy una gastadera le dije yo porque el  hizo su casa arriba de un cuarto arriba hizo baño letrina puso todo con taza y fosa abajo porque el solar de él es un pedasito también para su casa para una letrina de verás que arregle bien no no tenía drenaje ¿Cómo le dicen ustedes de esas tuberías?</p>
			<p><b>307 </b>E: si tubería drenaje</p>
			<p><b>308 </b>M6: no tenía y por eso hizo una fosa y ahí le ayudé lo apoyé nunca me gasté su dinero se lo cuidaba le ahorraba nunca se lo gasté y después me fui y me dijo que regrésate regrésate me hablaba al celular diciéndome que ya no va a hacer lo mismo Y vas a cambiar si voy a cambiar y me regresé con él otra vez y lo mismo otra vez || y se enojaba borracho y me volvía golpear ahora si  el golpe en mi ojo hasta se hizo morado se hizo negro mi ojo feo se hizo se lastimo Ya otra vez me habla ya otra vez voy con él</p>
			<p><b>309 </b>E: a o sea te habías ido otra vez</p> 
			<p><b>310 </b>M6: no | fue a la casa y me dijo regrésate y yo de tonta ahí vengo otra vez Y dice mi mamá tú de verás te gustan los golpes y no te duelen | me dijo mi mamá  verdad que si le digo | pues es que él cuando él esta no toma todo tranquilo le digo no me dice nada no me regaña no me dice nada le digo</p>
			<p><b>311 </b>E: ¿nada más cuando toma?</p>
			<p><b>312 </b>M6: cuando toma le digo</p>
			<p><b>313 </b>E: y cuando toma se acuerda primero de || su hermano</p>
			<p><b>314 </b>M6: si || de su hermano y le digo que motivos tienes le digo</p>
			<p><b>315 </b>E: y por eso comenzaron los golpes</p>
			<p><b>316 </b>M6: si por eso  Si le digo es que yo no tengo porque le digo que me echen eso de que yo ando con  tu hermano tiene a su mujer</p>
			<p><b>317 </b>E: y luego fue finalmente entonces fue cuando el ojo te golpeo en el ojo y ya ¿esa fue la última vez?</p>
			<p><b>318 </b>M6: ¡no! Por eso te digo me golpeó en el ojo y me regresé otra vez con él y luego otra vez estuvimos discutiendo y ¡esto ya cuando me regrese digo ahora si te voy a llevar a Tampico! Me dijo | a || está bien le digo porque aquí yo siempre me quedo sola le digo yo si me voy con tigo pero y los animales porque yo tenía mis pollos y luego este luego este dice yo voy a ir a dejarlos allá con mi mamá me dice y le dije yo a bueno dice ¡los anduve acarreando esos días! esa semana que llegó él los anduve acarreando a mis pollos pollitos y gallos gallinas me los lleve allá con mi mamá ya decidida de irme para Tampico con él y luego dice nos vamos a ir y allá vamos a estar me dice venimos o no allá vamos a estar me dice a esta bien y empecé a acarrear mis cosas todo y luego este ya ese día cuando llego un Domingo cuando él tomó con su hermano otra vez estaban tomando y yo esa vez fui a la milpa en la tarde porque había tomates coyoles de esos chiquillos coyoles se llaman allá | y fui a cortar para el otro día ir a vender y ya en la tarde nos íbamos a ir para Tampico | y ya había ido con mi mamá y le había dicho | si quieren tomate vayan a cortar le digo | hay muchos le digo | yo si me voy a ir para Tampico yo ya no voy a poder para vender le dije yo vayan a traer le digo me dijo ¿hay muchos? Y yo si le digo hay muchos le digo vayan a cortar le digo porque se va a echar a perder me voy a ir para Tampico le digo y luego dice ¿vas a venir a cortar? Y le digo si voy a ir a cortar poquito le digo y esto || lo que pueda más voy a ir a vender le digo a bueno y cuando yo me fui a la milpa él se quedó tomando ahí con sus amigos yo me fui y le digo ya me voy a la milpa luego te voy a ir a encontrar me dijo te voy a ir a ver en la milpa y yo ¡ha bueno! Le dije yo y cuando yo llegue a la milpa y andaba mi mamá ahí ya andaba mi papá cortando el tomate ya me ayudaron a llenar mi cubeta es un bote lo lleno y ya después de ahí ya este estaba ahí esperándome sola y lo estaba esperando a que horas llegaba a qué horas llegaba porque me dijo te voy a ir a ver ahí en la milpa dijo ahí me esperas me dijo ¡ha! Está bien le dije yo ahí se me hizo tarde estar espere y espere ya había terminado de cortar el tomate me senté a esperarlo y nunca llegaba y este || como yo casi no le echo saldo a mi celular no le marqué si va a ir o no y ya me vine caminando despacio y me paso por agua porque yo llevé un bote aparte para el agua no tenía agua de pozo porque yo ocupaba puro de pozo y este ya entonces pasé por el agua || !hay! me dio mucho coraje porque me engañó por sus hermanos no fue y me engaño diciéndome que iba a ir allá me dio coraje y me marcó y no le contesté en el celular y yo ya venía caminando ya pasé ahí a la noria a agarrar el agua me marcó otra vez y no le contesté y luego va lo voy viendo que va pasándose va para la milpa lo dejé que se fuera como a mí me engañó a que me iba a ver en la milpa también le hice lo dejé que se fuera ¡no! Me quede ahí llenando mi bote ahí en la noria ya cuando ya esté ya me vine para la casa y llegué un rato me senté | Que llega bien enojado ¡pero enojado! y luego él ¿Dónde te metiste? ¿Dónde andabas? me dijo que yo te fui a buscar te marqué y no me contestaste ¿porque no me contestaste? me dio coraje le digo porque tú me engañaste con que ibas a ir a verme le digo y yo le estu::ve esperando allá en la milpa y nunca llegaste le digo de coraje le digo no te contesté al celular le digo y tu querías estar con tus hermanos ¡no! Le dije yo porque te quedaste con ellos te digo que voy para allá a la milpa y tú te quedaste le digo | y luego me dice tú me andas haciendo pendejo me dijo y con maldiciones me dijo | tu andas con alguien me dijo me dijo mi hermano que tu andas bien acompañada me dijo con quién le dije yo vengo de la milpa le digo y luego pase por el agua le digo yo te vi ahí cuando te ibas subiendo por el camino para allá le dije ¡yo no te hable le dije! ¡Porque tú me engañaste le dije! tu dijiste que querías ir pero tu querías estar con tus hermanos no pues a mí me dio coraje también</p>
			<p><b>319 </b>E: ¿y empezaron a pelearse otra vez?</p>
			<p><b>320 </b>M6: sí<"3 seg.">pelearnos allí y reclamos y así hay yo sé que me estás engañando andas muy acompañada ¿con quién acompañada?  Le dije y luego dice ¡hay! pues si dice y que me da un golpe me pegó en la cara y fue cuando yo no lo aguante y me dijo lárgate me dijo lárgate no te quiero ver lárgate ya no quiero nada contigo aquí dice te me largas ahorita me dijo  ya no quiero nada aquí ya estoy fastidiado dice ¿ya te fastidie verdad? Le dije yo de tanto ayudarte yo siempre le digo pero tú no te mereces eso le dije yo lárgate me dijo saca tus fregaderas de allí y lárgate me dijo ya ahorita me dice se acabó todo me dijo a esta bien le dije está bien le digo gracias por todo le digo no es la primera vez que me pegas le digo le dije no es la primera vez le digo si si me voy le dije y que me meto a dentro me meto agarro mis cosas aunque no me traje todo le dejé se quedaron ahí en su casa de él todavía se quedaron hasta eso en bolsas lo eché en una bolsa grande lo eché en mi ropa ya como quiera así nada más</p>
			<p><b>321 </b>E: Y ¿ya no te dejó ir por las cosas o tú ya no quisiste ír?</p>
			<p><b>322 </b>M6: ¡No! Yo ya no fui</p>
			<p><b>323 </b>E: a ok oye y luego cuando te pegaba así fuerte como por ejemplo lo del ojo | me dices que te salió agua ¿fuiste a consultar?</p>
			<p><b>324 </b>M6: ¡No!</p>
			<p><b>325 </b>E: ha no ¿Por qué no?</p>
			<p><b>326 </b>M6: No porque no</p>
			<p><b>327 </b>E: ¿sólo se quitaba?</p>
			<p><b>328 </b>M6: si ||solo</p>
			<p><b>329 </b>E: y la gente que te veía ¿Qué te decía? Porque dices que te quedó así morado ¿Qué te decían?</p>
			<p><b>330 </b>M6: mi hermana se dio cuenta mi mamá y otra señora</p>
			<p><b>331 </b>E: ha ¿pero tú te escondías te tapabas así?</p>
			<p><b>332 </b>M6: ¡sí! Porque yo no veía me dolía mucho mi vista mi vista me dolía si y de allí me Salí fue cuando me dijo que me saliera y se acabó todo a esta bien le dije si me voy le digo no me mantienes no te estoy pidiendo para tragar le digo yo también estoy trabajando le digo para comprarme algo para comer le digo no quiero tu dinero le digo porque vendió naranja cinco mil pesos tenía ahorrado ni un peso le gasté iba a trabajar a Tampico y regresaba y no sé en que gastaba su dinero pero nunca le pedí y nunca me dio el dinero y por eso yo le reclamé le digo al cabo no me mantienes le digo me mantengo sola le digo para que necesito de un hombre le dije yo puedo sola le dije yo y lo vas a ver le digo vas a ver con quien estoy con quien ando le digo bien te vas a dar cuenta si tuviera algún hombre no tendría necesidad de andar trabajando de andar vendiendo le digo y te tengo a ti y mira le digo yo salgo a trabajar porque yo comencé a trabajar ahí su casa de él pues yo comenzaba a salir a trabajar un día voy a trabajar otro día voy a vender le digo no necesito de un hombre le digo yo puedo trabajar me mantengo le digo si puedo le digo yo ¡¿ha sí puedes?! ¡sí! le digo así como tú le dije yo ¡ha! Lo vamos a ver me dijo a ver si es cierto que andas con alguien me dijo no yo no necesito le digo yo también puedo trabajar para mantenerme le digo y me fui de la casa hasta él me sacó la tele que tenía como el que tiene allá tu mamá en P1 así de grande que tenemos la tele que nos habían regalado | él me lo sacó para fuera | dijo aquí está la tele me la saco afuera | dijo aquí está la tele ¡ah está bien! le dije| sí llévatela para que no te regreses me dijo así me dijo |aunque ya no regreses por la tele no ya no le digo está bien gracias le dije yo luego me saco otra vez con la caja de la tele dice la puedes meter aquí ¡No! Ya no necesito así me la llevo le digo le dije ahí le deje la caja de la tele y me fui</p>
			<p><b>333 </b>E: ¿oye y tu niña no estuvo ahí</p>
			<p><b>334 </b>M6: no | no estaba ella aquí | estaba aquí en Monterrey| Y luego que me encuentro a la cuñada de él me dijo no te vayas no te vayas me dijo quédate</p>
			<p><b>335 </b>E: ¿la que andaba primero haciendo chismes?</p>
			<p><b>336 </b>M6: ¡No! Es otra ella es muy seria casi no convivía si hablas si hablas y platicas con ella no no habla nada más te va a ver y no platica nada así es ella no saca chisme no escuche nunca nada| Y me dijo no te vayas me dijo quédate dice tienes tu casa todo lo ha hecho el por ti dice y porque lo vas a dejar tu todo ¡hay que se quede le digo yo! que se encuentre a alguien y si la quiera más le digo que a mí ojalá que un día si se encuentre a alguien a una mujer que no la maltrate le digo no como a mi yo que tanto lo apoyé le ayude nunca lo he dejado y mira le digo lo que hace el ¡no! Le digo yo ya no le dije lo van a ver algún día le digo que si de veras tengo otro hombre le digo porque ese es un problema que tiene él le digo que según me iba a llevar a Tampico y mira lo que me hizo le digo | ese día al otro día nos íbamos a ir a Tampico y nada le digo y me dice perate no te vayas me dice.</p>
			<p><b>337 </b>E: Y ¿el si se fue a Tampico?</p>
			<p><b>338 </b>M6: pues cuando eso anoche un domingo en la tarde noche que me Salí al otro día el lunes se largó el solo y se fue pa Tampico así siempre cuando me golpea y yo no me dejo me voy para la casa para el otro día se va pa Tampico siempre ha hecho así</p>
			<p><b>339 </b>E: ¿Cada que te golpeaba se iba?</p>
			<p><b>340 </b>M6: si ||se iba que por ||</p>
			<p><b>341 </b>E: ¿Miedo algo así?</p>
			<p><b>342 </b>M6:  Yo creo que si | por dejarlo algo así | si ||</p>
			<p><b>343 </b>E: Y ¿a él tampoco lo denunciaste?</p>
			<p><b>344 </b>M6: nunca tampoco nunca no ||</p>
			<p><b>345 </b>E: y ¿si hay policías?</p>
			<p><b>346 </b>M6: si ||</p>
			<p><b>347 </b>E: ¿allá cómo ven eso? o sea si se ||</p>
			<p><b>348 </b>M6:  Casi no ayudan allá no hay apoyo allá en la presidencia no hay apoyo y por eso me separe con él por golpes y de ahí | ahora este último que me pegó otra vez me corrió de su casa me sacó de su casa este me fui días hice ahí en la casa creo (lunes | martes) ¡no! ahí estuve en la casa de mi mamá me vine para acá se acabaron los problemas | A la semana ya estaba ahí con mi hija me comenzó a hablar que regrese que regrese que me vaya para Tampico de aquí para Tampico que me vaya ¡hasta hace poco ya estaba aquí! aquí con ustedes otra vez todavía me hablaba hace poco todavía me decía no ||regresa</p>
			<p><b>349 </b>E: ¿y si piensas volver con él?</p>
			<p><b>350 </b>M6: ¡No! Yo ya no no ya no quiero pues es que yo ya me quede mal del ojo a veces se empaña mi ojo no puedo ver ¡no puedo ver siento!</p>
			<p><b>351 </b>E: ¿Y por qué no vas a consultar?</p>
			<p><b>352 </b>M6: hasta ahorita no he ido hasta ahorita estoy pensando de ir por si voy ahí en la casa saco mi seguro allá y este y voy a consultar a ver qué me dicen</p>
			<p><b>353 </b>E: Oye y luego |bueno ya te viniste para acá y luego ¿qué te pareció la ciudad?</p>
			<p><b>354 </b>M6: Pues aquí yo siento que estoy bien más tranquila ya no hay problemas de quien me diga esto que el otro estoy sola</p>
			<p><b>355 </b>E: ¿Aquí vives con tus hermanos? Bueno | de Lunes a Sábado estas trabajando verdad en la casa te quedas a vivir y todo pero y luego ¿te vas con tu hermano? Y ya está más tranquilo todo</p>
			<p><b>356 </b>M6: Si mi hermano esta aquí el también aquí casi no platica casi no | es serio también</p>
			<p><b>357 </b>E: y ¿ha sido difícil aquí en la ciudad? ¿Qué es lo más difícil que | has pasado?</p>
			<p><b>358 </b>M6: Pues ahorita ||no sé yo ciento difícil porque voy y salgo aquí y no conozco</p>
			<p><b>359 </b>E: ¿ósea que con muchas calles y así</p>
			<p><b>360 </b>M6: Si y hay mucho peligro| Siento que hay más peligro aquí por los carros porque a mí me dan mucho miedo los carros | y yo casi no conozco ¡los semáforos se llaman! y no conozco muy bien</p>
			<p><b>361 </b>E: ¿allá no hay carros?</p>
			<p><b>362 </b>M6: Sí pero allá es muy diferente allá hay municipio y aquí ciudad es muy diferente | pues ahí ya conoces y menos carros allá corren menos carros pasan allá por donde tú vas a pasar a caminar y aquí no muchos carros y es a lo que a mí me da miedo</p>
			<p><b>363 </b>E: Y el estilo de vida ¿Cómo es visto aquí? Como son |Por ejemplo ¿Cuál es la diferencia de las mujeres de allá a las mujeres de aquí?</p>
			<p><b>364 </b>M6: Pues si se parecen mm || ¿de qué forma?</p>
			<p><b>365 </b>E: si ósea ¿Cuál es la diferencia? ¿Qué has visto diferente en el rancho y la ciudad?</p> 
			<p><b>366 </b>M6: Pues | <"5 segs."> | ¿cómo del rancho a la ciudad? | ¿no entiendo?</p>
			<p><b>367 </b>E: si | como las mujeres | por decirte | aquí trabajan más o en el rancho trabajan más o ¿cómo?</p>
			<p><b>368 </b>M6: Allá en el rancho hay trabajo más pesado</p>
			<p><b>369 </b>E: A ||ok | esa es otra diferencia | pues si todas son de campo y ¿allá las mujeres también trabajan en el campo?</p>
			<p><b>370 </b>M6: si trabajan también por eso como yo yo conozco trabajo de hombre también</p>
			<p><b>371 </b>E: Fíjate esta bien Y ¿Qué te gusta más el rancho o la ciudad? Ya que conociste la ciudad ¿Qué te gusta más?</p>
			<p><b>372 </b>M6: Pues yo siento aquí más mejor| me siento más tranquila | no como allá que tenía problemas que esto y que el otro</p>
			<p><b>373 </b>E: Mucho chisme verdad allá ::</p>
			<p><b>374 </b>M6: Allá con mi familia igual mi hermano ahí está el malo</p>
			<p><b>375 </b>E: ¿Por qué malo?</p>
			<p><b>376 </b>M6: Porque hace poquito quemó su casa</p>
			<p><b>377 </b>E: ¿Tu hermano?</p>
			<p><b>378 </b>M6: Si ||mi cuñada vive con su mamá</p>
			<p><b>379 </b>E: ¿Y porqué quemó la casa?</p>
			<p><b>380 </b>M6: Por borracho también | se peleó con su mujer | según se escondió la mujer| y el dijo si ella se escondió o me la escondieron que le dijeron con mi mamá y mi papá | ustedes la escondieron pero ahorita lo va a ver voy a quemar la casa dice  se acabó le digo y pensaron que nada más estaba diciendo y mi mamá igual ¡todo se quemó!</p> 
			<p><b>381 </b>E: ¡¿Con tu mamá?!</p>
			<p><b>382 </b>M6: La casa de ellos |por que vivían a parte | cerca de ellos la casa pegada y  esta echa de palos y todo prendió todo se quemó sus cosas todo lo que tenían ellos se quemó todo</p>
			<p><b>383 </b>E: ¡¿Qué le pasa?!</p>
			<p><b>384 </b>M6: él está enfermo tiene problema ¡mucho problema tiene!</p>
			<p><b>385 </b>E:[ risa] oye y luego ahora que se quedó sin casa ahora ¿Dónde vive?</p>
			<p><b>386 </b>M6: Cuando se fue mi cuñada para el otro día se fue a su casa él se quedaba afuera en la casa ahí afuera se dormía porque decía que se quedó sin casa</p>
			<p><b>387 </b>E: ¡Hay que bárbaro!</p>
			<p><b>388 </b>M6: Dice mi mamá</p>
			<p><b>389 </b>E: que barbaros | entonces los hombres allá están medios ||loquillos</p>
			<p><b>390 </b>M6: Zafados</p>
			<p><b>391 </b>E:[ risa]</p>
			<p><b>392 </b>M6: Muy locos allá</p>
			<p><b>393 </b>E: ¿Y mujeres no hay así</p>
			<p><b>394 </b>M6: No allá no más que otras que son bien canijas también con los hombres</p>
			<p><b>395 </b>E: ¿Si? [risa]</p>
			<p><b>396 </b>M6: Si no trabajan nada más quieren dinero fácil le digo yo si también mujeres de esas</p>
			<p><b>397 </b>E: [ risa]que bárbara| Bueno este :: entonces :: me llamo la atención todo lo que me contaste ¿tú conoces la palabra violencia? ¿Qué es?</p>
			<p><b>398 </b>M6: si ¿Violencia? | No es donde dan golpes</p>
			<p><b>399 </b>E: Y ¿Cuántos tipos de violencia conoces | nada más de golpes o hay más?</p>
			<p><b>400 </b>M6: De golpes | no | este insultos gritos</p>
			<p><b>401 </b>E: Y allá hay lugares en los que les dicen ha las mujeres que eso es violencia ::</p>
			<p><b>402 </b>M6: Si ||</p>
			<p><b>403 </b>E: ¿Si van personas a compartirles?</p>
			<p><b>404 </b>M6: Si con las brigadas que van | nos hacen pláticas que no nos dejemos | que como mujeres no nos dejemos que nos maltraten a los hombres | hay que denunciarlos o hay que pedir ayuda con un licenciado | licenciada | que nos apoyen ellos | que nos orienten para que no pasemos en esos |este, golpes o maltratos | no con golpes|  sino con palabras también | pero como mujeres allá nosotros no le hacemos caso</p>
			<p><b>405 </b>E: ¿Por qué?</p>
			<p><b>406 </b>M6: Pues por eso nunca nos quejamos de los hombres y eso nunca se va a acabar porque allá siempre se ha escuchado de esos que pasan |siempre</p>
			<p><b>407 </b>E: Pero ustedes hacían caso <"3 segs."></p>
			<p><b>408 </b>M6: Porque nos dejamos mucho por eso |</p>
			<p><b>409 </b>E: ¿o sea pero porque se dejan?</p>
			<p><b>410 </b>M6: Es miedo | eso es lo que decimos nosotras | porque así nos preguntan |¿Por qué no denuncian? ¿Por qué no piden ayuda? | Por miedo | es lo único con lo que sabemos decir | por miedo</p>
			<p><b>411 </b>E: ¿Pero miedo a que te vuelva a golpear?</p>
			<p><b>412 </b>M6: ¡Pues si! como muchas mujeres con hijos no pueden denunciar | porque si se separan los hijos donde quedan| eso es lo que piensan ellas | ¿Dónde quedan los hijos? Hay que ver que crezcan y dicen y sea lo que sea que estén con su papá y su mamá y no separados | eso es lo que dicen las demás señoras de allá que tienen hijos | yo que yo ya no tenía | donde parecían estos golpes van a seguir así | un rato bien un rato no | ¡na! Y estoy sola | ¿Qué estoy esperando otro golpe? Que donde no pueda caminar o donde ya no pueda levantarme | pues no | mejor me salí y me vine para acá Preferí mejor trabajar y no estar allá</p>
			<p><b>413 </b>E: Y fíjate que te fue muy bien | estuvo mejor ¿no?</p>
			<p><b>414 </b>M6: ¡Pues si! Es lo que yo le digo a mi mamá</p>
			<p><b>415 </b>E: ¡ha! Qué bueno | Bueno || oye y ¿qué música te gusta?</p>
			<p><b>416 </b>M6: De todo</p>
			<p><b>417 </b>E: ¿Si? Y ¿sabes bailar?</p>
			<p><b>418 </b>M6: No</p>
			<p><b>419 </b>E: ¿Te gusta nada más escucharla?</p>
			<p><b>420 </b>M6: nada más escucho si la pongo en mi celular y ahí la escucho</p>
			<p><b>421 </b>E: Y allá como hacen fiestas?</p>
			<p><b>422 </b>M6: Pues allá también ponen música si quieren baila si una fiesta</p>
			<p><b>423 </b>E: Ahorita ya vienen las fiestas de Diciembre Ya estas lista para bailar</p>
			<p><b>424 </b>M6: [risa]no | yo no bailo! Tal vez no sé cómo se valla estar el tiempo pues voy a salir a pasear a una fiesta con mis papás.
			<p><b>425 </b>E: ¡Ha qué bueno!</p>
			<p><b>426 </b>M6: Es lo que estoy pensando sacarlos a pasear porque ellos nunca salen a ningún lado nada más están en la casa en el trabajo nada más para salir a divertirse un rato fiesta a pasear</p>
			<p><b>427 </b>E: ¡Qué bueno! No pues está bien  Bueno | ¿algo más que me quieras platicar antes de terminar? ósea de tu experiencia en la ciudad como ha sido y eso</p>
			<p><b>428 </b>M6: No quien sabe que mas</p>
			<p><b>429 </b>E: ¿No? Bueno |Pues gracias esa era toda mi entrevista [risas]</p>
			<p><b>430 </b>M6: ¡Querías saber de mi vida que [risas]! ¡Era lo que querías!</p>
			<p><b>431 </b>E: Yo quería saber de tu vida ver como |</p>
			<p><b>432 </b>M6: Si porque también me iban a preguntar como que me divorcie | que esto que el otro</p>
			<p><b>433 </b>E: Es que a veces es difícil ¿no? yo por ejemplo conozco a muchas personas que les da miedo y que no no hacen nada pero ahí están ¡aguante y aguante y aguante! hasta que llegan a matarlas</p>
			<p><b>434 </b>M6: ¡Sí! si ha pasado si han pasado muchas cosas</p>
			<p><b>435 </b>E: Y entonces dices ahorita que me estabas platicando ¡no sabía de qué tenías dos parejas violentas! eso yo no lo sabía me contaste pero yo creía que era el último y no ni en cuenta no me lo hubiera imaginado entonces yo escucho eso y dije bueno y ¿Por qué ella si pudo poner un alto verdad? ¿Por qué ella sí pudo y otras no? Y ¿Por qué a ti no te da miedo ponerte a trabajar y a otras si? verdad y generalmente es porque le tienen miedo a la ciudad osea las que vienen</p>
			<p><b>436 </b>M6: Si</p>
			<p><b>437 </b>E: Bueno le tiene miedo a la ciudad dije bueno ¿Cómo? Se le hace difícil la ciudad es diferente |Pero bueno eso ya me lo platicaste ahorita</p>
			<p><b>438 </b>M6: Si porque si tiene diferencia mi ciudad y el rancho donde has crecido donde lo has vivido todo este es muy diferente| Yo he salido si de veras salí cuando estaba joven todavía no me había casado vine en el mero municipio de San Luis es donde la primera vez que salí ahí donde aguanté un mes con una señora que era bien corajuda y no aguanté y me fui para el rancho de ahí otra vez me fui para Guadalajara así con las primas nunca salí sola con una prima me fui para Guadalajara allá estuve también un mes ahí también se peleaba discutían y no sabían ni de donde mi prima es ahí donde no me gusta pues también que me regreso cuando yo les dije yo me voy a la casa le dije ustedes me pagan para el pasaje y me van a dejar a la central digo yo me voy a ir al rancho ¿Por qué te vas a ir? yo ya me voy le dije y cuando yo les dije que me voy es porque yo me salí ya y si me vinieron a dejar | Y este me regresé al rancho y de ahí trabaje cercas del rancho en Ciudad Valles también en un ranchito que se llamaba Tanquián ahí anduve cercas de ahí ya después me casé y ya no trabajé</p>
			<p><b>439 </b>E: ¿Y allá de que trabajabas?</p>
			<p><b>440 </b>M6: En casas también</p>
			<p><b>441 </b>E: ¿Y en Tanquian también?</p>
			<p><b>442 </b>M6: Si también ahí hacía aseo | limpieza y cuidaba a una niña</p>
			<p><b>443 </b>E: Y ¿en Valles también?</p>
			<p><b>444 </b> M6: Si también pero ahí también es bien difícil porque éramos tres muchachas las que estaban una hacía limpieza | una guisa | hacía comida y otra que |este |como le diré que ordena ahí en la mesa todo lo que los platos las cucharas tenedores los vasos</p>
			<p><b>445 </b>E: ¿Tu que hacías? ¿a ti que te tocaba?</p>
			<p><b>446 </b>M6: A mi me mandaban a eso a ordenar los platos los vasos que el jugo que los tenedores todo esos cubiertos como les dicen</p>
			<p><b>447 </b>E: Y ¿por qué? ¿Era una casa grande de ricos o qué?</p>
			<p><b>448 </b>M6: si |Ahí si</p>
			<p><b>449 </b>E: ¡¿Todo Valles?!</p>
			<p><b>450 </b>M6: ¡Todo! ¡no! nada más a esa familia he ido me metí a trabajar nada que esto y que el otro así para que ellos cuando los patrones llegaban a comer nada más se sientan a comer y tu sirbales y tenedores cucharas vasos todo estaba puesta ya la mesa nada más tu sírveles que coman y ya se levantan y se van y ya y no aquí con ustedes es bien diferentes aquí ustedes son como si fueran la familia ustedes no le hacen como uno que viene de un rancho no lo hacen de menos aquí ustedes tienen mucho cambio en cambio otros lugares que yo he pasado a trabajar eso es muy diferente uno como lo hacen menos no se lo discriminan como le diré</p>
			<p><b>451 </b>E: ¿Si te ha tocado discriminación?</p>
			<p><b>452 </b>M6: Si</p>
			<p><b>453 </b>E: ¿Pero quiénes son los que más discriminan?</p>
			<p><b>454 </b>M6: Pues ||yo digo las patronas porque hay muchas diferencias en partes porque en partes donde también me ha platicado también mi cuñada M2 en partes no comen tortilla a veces sobra la comida a veces no tienes que comprarte para que comas ella le ha tocado dice le tocó tiempo dice que estaba trabajando así también dice tenía que comprarse para comer también a veces abastece muy poquita la comida y si te tocó la comida comes si no no nada tienes que comprar así me ha platicado ella le digo yo allá no nunca me han hecho menos le digo yo vengo de un rancho le digo soy indígena más bien le digo yo más bien le digo yo| Soy indígena y ellos siempre ¡van a comer! vamos a comer acá que esto y que el otro le digo nos sentamos en la mesa todos le digo | y yo he conocido le digo yo he conocido ¡tu comes hasta el último primero lavas las vasijas | los platos | los vasos todo eso! y comes hasta el último te sientas a comer al último porque yo cuando yo llegué apenas aquí cuando apenas llegue aquí le digo ya habíamos guisado con tú mamá ya me había enseñado a guisar como lo prepara ella más bien la forma en que guisa ella y yo que le e hecho eso se lo hice yo me lo enseñó ella digo ¡ya está la comida! Si ya esta le dije ya vamos a comer | Pues yo conozco que una muchacha que trabaja en casa los patrones comen primero ellos en la mesa se sientan a comer terminan de comer uno que necesita para lavar los trastes ya si vas a comer te quedas hasta el último y yo por eso les dije tú mamá digo ¡ya está la comida! Vente ya vamos a comer le digo dijo vamos a sentarnos acá en la mesa aquí vamos a ponernos aquí va a hacer ahora y es en donde quitamos ya el comedor y entonces me dijo ¡vamos a comer! Sírvete pues ya sabía que iba a comer hasta el último ¡NO NONO! De una vez me decía y yo lo conozco así donde he trabajado yo siempre hasta el último nunca vas a comer con tus patrones de veras  que viven de la casa nunca vas a comer con ellos y yo aquí muy diferente lo veo porque cuando vamos a comer todos vamos a comer y ahí donde yo trabajé ahí en Valle no me gustaba a veces sobraba la comida y a veces no y como teníamos que comer hasta el último nos sentábamos hasta el último ya los patrones se iban y ya no se a dónde se iban se salen y nosotros nos quedábamos para comer y como ellas ya conocen todo el año que vivían ahí las muchachas agarraban pues que van a comer esto del refri y yo no conozco y a veces que que vamos a comer nosotros que ya se acabó la comida ¿Qué vamos a comer? ¡Fijate ahí busca en el refri a ver que comes y encuentras! me decía pues yo me quedo sin comer porque yo no sabía no conocía</p>
			<p><b>455 </b>E: ¿No sabías guisar y eso?</p>
			<p><b>456 </b>M6: ¡Si guisar si! pero no sabía que comida voy a  tocar porque soy varios que son para guisar para hacer de comer pues si son de ellos de los patrones si yo voy a estar agarrando y ellos no ellos agarraban cualquier cosa y empezaban a guisar y a comer y ahí es donde no me gustó a mi también y me Salí me regresé para el rancho</p>
			<p><b>457 </b>E: ¿Valle está lejos del rancho?</p> 
			<p><b>458 </b>M6: No como dos horas en camión</p> 
			<p><b>459 </b>E: Y ¿tú ibas y venías todos los días?</p>
			<p><b>460 </b>M6: No | me quedaba ahí</p> 
			<p><b>461 </b>E: ¿Hay tantos municipios por ahí verdad?</p>
			<p><b>462 </b>M6: Si ||</p> 
			<p><b>463 </b>E: Ahí muchos!</p>
			<p><b>464 </b>M6: ¡Si! || y le platiqué a mi cuñada le dije yo ahí si vas a comer todos comemos le digo nos sentamos en partes no dice ahí es bien diferente le digo</p>
			<p><b>465 </b>E: ¡[risas]!</p> 
			<p><b>466 </b>M6: Porque ellos son de rancho también me dice son maestros me dice.</p>
			<p><b>467 </b>E: y tú cuñada ¿todavía trabaja?</p>
			<p><b>468 </b>M6: no ya no</p><br />
			<p><b>Fin</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_7" id="entrevista7">
			<h2>Conversación 07 realizada el 29 de Enero del 2017 a las 9.00pm.</h2>
			<p>Via Whatsapp</p><br />
			<p>Entrevista realizada por Esther Anahí Piña Ramirez</p>
			<p>Licenciada en psicología</p><br />
			<p>De acuerdo a la Ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio. </p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 27 años de edad; reside en el municipio de Salinas Victoria, del Estado de Nuevo León, México; se dedica al hogar y cuidado de sus hijos; vive en Unión Libre; tiene cuatro hijos menores de edad; por pláticas de la suegra y otras amistades, se sabe que vive violencia doméstica y física.</p>
			<p>Fue una entrevista fallida; la víctima, después de haber aceptado la entrevista, se retractó y contestó de forma agresiva a la entrevistadora vía whatsapp.</p>
			<p>El primer acercamiento se dio en el domicilio particular de la entrevistada (<b>M7</b>), donde vive con sus hijos (<b>Hs</b>) y su pareja sentimental (<b>H1</b>).</p>
			<p>El código que se utilizará para la entrevistadora será (<b>E</b>).</p><br />
			<p><b>Simbología que se utiliza en la transliteración: </b></p>
			<p>Amparo Tusón (1997: 146 - 148), en su libro "Análisis de la conversación"  presenta una lista de simbología que permite realizar una transliteración más flexible basada en la de Pairató, de la cual se extraen para esta entrevista, los siguientes símbolos</p><br />
			<p>Nasalización: e</p>
			<p>Abertura: h</p>	
			<p>Ritmo acelerado: ac</p>
			<p>Ritmo lento: le</p>
			<p>Interrogación, pregunta: ¿?</p>
			<p>Entonación exclamativa: ¡!</p>
			<p>Tono ascendente: /</p>
			<p>Tono descendente: \</p>
			<p>Corte abrupto en medio de una palabra: 	:::-</p>	
			<p>Pausa breve: |</p>
			<p>Pausa mediana: ||</p>				
			<p>Pausa larga indicando segundos: <"núm. de segs."></p>
			<p>Énfasis: subr</p>
			<p>Mayor énfasis: MAYÚS</p>				
			<p>Alargamiento de un sonido:	::</p>
			<p>Piano, dicho en voz baja: p</p>
			<p>Pianísimo, dicho en voz muy baja: pp</p>				
			<p>corte, dicho en voz alta: f</p>				
			<p>Fortísimo, dicho en voz más alta: ff</p>				
			<p>Solapamiento de un turno: ==</p> 
			<p>Intervención de turnos: A- o B-</p>
			<p>Fenómenos no léxicos: [ ]</p>
			<p>Marcador de fronteras en las que se produce algún fenómeno: {}</p>
			<p>Palabra ininteligible o dudosa: ()</p>
			<p>Para señalar algo importante para el análisis: —></p>				
			<p>Movimiento: m</p><br /><br />

			<p>—> Antes de agendar cita con la Entrevistada, se le platicó un poco sobre la finalidad de nuestras entrevistas, recordándole que la información es confidencial, M7 estuvo de acuerdo.</p><br />

			<p><b>1 </b>E: bueno M7 como acordamos || el domingo (veintinueve de enero)  vengo a tu casa</p>
			<p><b>2 </b>M7: OK</p><br />

			<p>—> Tanto el primer contacto como el resto de la comunicación fue vía Whats App; un día antes de la fecha acordada, se trató de comunicar con M7 sin tener respuesta, en un principio, las llamadas telefónicas daban línea, después de cuatro llamados, la línea enviaba a buzón directamente. 
			llegó la fecha, domingo a medio día, entonces, se tomó la decisión de asistir a su hogar ubicado en Salinas Victoria. La visita no fue exitosa, debido a que  al llegar a la vivienda, nadie atendió el llamado, por lo que se decidió retirarse e intentar comunicarse por teléfono; posterior a ello, se le siguió insistiendo vía WhatsApp, recibiendo noticias de M7, el mismo día a las 9:00 pm.</p><br />

			<p><b>3 </b>M7: No me verás la cara de pendeja de seguro mi suegra te pidió hacerme esto para separarme de su hijo no sé quien se crea ella para andar contando mis cosas como si yo contara por lo que pasó ella por pendeja pero yo no pasaré por eso yo si tengo suficientes huevos para defenderme y no necesito de nadie y menos de tu ayuda para solucionar los pleitos que tengo con mi esposo mi hombre el papá de mis hijos / entonces ya no estés chingando con tus mamadas de entrevista o quererla hacer de psicóloga conmigo porque conmigo no / y si vuelves a venir verás como te irá.</p>
			<p><b>4 </b>E: Hola M7 puedes tomar mi llamada para explicarte un poco ya que estas malinterpretando las cosas y no quiero ocasionar algún problema.</p>
			<p><b>5 </b>M7:  (solo vio mi mensaje y no recibió llamadas)</p>
			<p><b>6 </b>E: Ok te entiendo que estés molesta, las entrevistas que estoy recabando es para un proyecto sobre la familia en el cual se desglosa comunicación, unión y respeto. Es información confidencial cómo te lo mencioné al inicio / no me atrevería hacerte daño y menos a tu familia/ respeto tu decisión y de ante mano una disculpa.</p>
			<p><b>7 </b>M7: claro, solo deja de chingar, bye ya no me quites mas mi tiempo.</p><br />
			<p><b>Fin</b></p><br />
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