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
	<title>Corpus Ling��sticos D.E</title>
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilosMSVD.css">
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
							<span class="sr-only">Men�</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">Corpus Ling�istico D.E</a>
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
							<li><a href="Aportaciones.php"><span class="icon-open-book"></span>Producci�n Cientifica</a></li>
							<li><a href="../logout.php"><span class="icon-log-out"></span>Cerrar Sesi�n</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>

	
<section> <article class="titulo"> 
<h1>CORPUS VF(Violencia en la Frontera)</h1>
</article> <article class="MSVD"> 
<hr class="division" size="4" color="#6914OF" />
<p class="pad-top">Dentro del corpus &quot;Violencia en la Frontera&quot; (VF) 
  se encontrar&aacute; informaci&oacute;n referente a diversos tipos de violencia 
  emitidos hacia indocumentados procedentes de la segunda caravana migrante que 
  cruz&oacute; la frontera entre Guatemala y M&eacute;xico.<br>
  Hasta el momento de la entrevista, los migrantes fueron refugiados en la Asociaci&oacute;n 
  Civil &#8220;Comedor del Padre Infante&#8221;, cuyo acceso propici&oacute; recaudar 
  un corpus de ocho relatos que hacen alusi&oacute;n a la violencia que experimentan 
  estas personas durante su tr&aacute;nsito hacia EUA, y los motivos de su migraci&oacute;n.<br>
  El rango de edad de los participantes osila entre los 17 y los 54 a&ntilde;os 
  y su pa&iacute;s de procedencia es Honduras.<br>
  Las entrevistas fueron realizadas en el mes de marzo del 2019.<br>
</p>
<p class="pad-buttom">Las conversaciones (audios) han sido transcritas y marcadas 
  con simbolog�a que propone Amparo Tus�n Valls (1997), y puede ser localizada 
  dentro de este mismo v�nculo. En cada una de las transliteraciones se brinda 
  una explicaci�n m�s extensa.</p>
<hr class="division" size="4" color="#6914OF" />
</article> <article class="acceso_rapido"> 
<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista1"><span class="icon-sound">Ir 
    a Entrevista 1</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista2"><span class="icon-sound">Ir 
    a Entrevista 2</span></a></div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista3"><span class="icon-sound">Ir 
    a Entrevista 3</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista4"><span class="icon-sound">Ir 
    a Entrevista 4</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista5"><span class="icon-sound">Ir 
    a Entrevista 5</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista6"><span class="icon-sound">Ir 
    a Entrevista 6</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista7"><span class="icon-sound">Ir 
    a Entrevista 7</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista8"><span class="icon-sound">Ir 
    a Entrevista 8</span></a> </div>
</div>
</article> <article class="entrevista_1" id="entrevista1"> 
<h2>Entrevista realizada el d&iacute;a viernes, 8 de marzo de 2019.</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista01.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>06:19 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo masculino; De nombre Alan Joel; 17 a&ntilde;os de edad; Casado 
  con dos hijos; Originario de Honduras; Con cuarto grado b&aacute;sico de estudio; 
  Migrante por falta de trabajo en su pa&iacute;s de origen; Se dirige a Estados 
  Unidos; Sufri&oacute; violencia en la frontera en Guatemala (Se les arrojo bombas 
  lacrim&oacute;genas); La entrevista es presencial, en el comedor del migrante 
  (Pedro Infante) ubicado en Monterrey.</p>
<p>Sea <b>J</b>, la entrevistadora (Estudiante de la UANL), <b>A </b>el migrante<b></b>.</p>
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b> </p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {}</p>
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m</p>
1. J:// Bueno mi nombre es Jhoselin Garcia y esto es una entrevista para medir 
la violencia en la frontera y la seguridad de los que transitan en ella. Vengo 
de la UANL y te voy a hacer unas preguntas &iquest;okey? <br>
2. A: p Okey<br>
3. J: eh &iquest;Cu&aacute;l es tu nombre?<br>
4. A: /Alan Joel <br>
5. J: &iquest;Qu&eacute; edad tienes?<br>
6. A: diecisiete a&ntilde;os<br>
7. J: Okey | ee tu &iquest;cu&aacute;l es tu pa&iacute;s de procedencia?<br>
8. A: Hondura <br>
9. J: Honduras &iquest;Tu &uacute;ltimo grado de estudios?<br>
10. A: cuarto grado <br>
11. J: Okey ee:: &iquest;Tu estado civil? <br>
12. A: Casado<br>
13. J: Okey, muy bien, sobre tu familia &iquest;Cu&aacute;ntos hijos tienes? Vives, 
o sea, &iquest;viven con sus padres con sus hermanos?<br>
14. A: Si con mis padre<br>
15. J: Con sus padres, y &iquest;Cu&aacute;ntos hijos tienes?<br>
16. A: ee:: | dos <br>
17. J: /Dos, Okey ee:: &iquest;D&oacute;nde se qued&oacute; tu familia durante 
tu transito migratorio?<br>
18. A: en albergues, parques<br>
19. J: Okey em:: &iquest;y hacia donde se dirigen?<br>
20. A: a || a Estados Unidos <br>
21. J: \ a Estados Unidos<br>
22. A: &not;Si<br>
23. J:&iquest; Tu motivo de la migraci&oacute;n?<br>
24. A: no, pobreza<br>
25. J: Okey<br>
26. A: /No hay trabajo <br>
27. J: Okey a:: &iquest;Tienes alg&uacute;n familiar o amistad en el destino que 
quieres ir?<br>
28. A: Si<br>
29. J: /Si tienes <br>
30. A: un amigo <br>
31. J: Okey a:: &iquest; Y qu&eacute; trabajo desempe&ntilde;ar&iacute;as all&aacute;?<br>
32. A: de todo porque s&eacute; de todo menos robar &lt;risas&gt; <br>
33. J: Okey y &iquest;cu&aacute;ntas veces has intentado migrar?<br>
34. A: primer ves<br>
35. J: es la primer vez, okey. &iquest;y has sido deportado antes? <br>
36. A: nunca <br>
37. J: muy bien, a:: &iquest;C&oacute;mo fue tu migraci&oacute;n? O sea &iquest;qu&eacute; 
medio de transporte usaste? &iquest;Qu&eacute; pa&iacute;s :::-<br>
38. A: e:: en camiones, en rastra, plana y camiones tambi&eacute;n<br>
39. J: y los d&iacute;as que te tardaste m&aacute;s o menos<br>
40. A: como m&aacute;s de mes y medio creo en llegar aqu&iacute; va<br>
41. J: m&aacute;s de mes y medio <br>
42. A: &iexcl;Si!<br>
43. J: Okey, y ahorita aqu&iacute; en M&eacute;xico &iquest;Qu&eacute; es lo que 
haces?<br>
44. A: no aqu&iacute; buscar trabajo pero la verdad me piden papeles bastantes, 
solo tengo el permiso nada m&aacute;s<br>
45. J: okey a:: &iquest;C&oacute;mo es el acceso a la educaci&oacute;n para las 
mujeres en tu pa&iacute;s?<br>
46. A: &iquest;C&oacute;mo as&iacute;?<br>
47. J: m:: que si pueden estudiar <br>
48. A: /&iexcl;Ah si!/ <br>
49. J: &iquest;Si, si pueden?<br>
50. A: Si<br>
51. J: \ Ah okey e| &iquest;Conoces el tema de la violencia &iquest;<br>
52. A: &iquest;C&oacute;mo es?<br>
53. J: La violencia es cuando hay agresividad en los hogares o con las personas 
<br>
54. A: &iexcl;Ah no si! Si la he visto, si he visto varios casos, //muertes//<br>
55. J: &iquest;Cercanos a ti?<br>
56. A: &iexcl;Si, cercanos! Enfrente de mi casa le volaron la cabeza a uno <br>
57. J: &iquest;En serio? &iquest;Y te llevabas mucho con la persona? :::-<br>
58. A: \Si, con varios, varios amigos mios murieron <br>
59. J: &iquest;Y sabes la raz&oacute;n?<br>
60. A: \&iexcl;No! \<br>
61. J: Solamente, bueno, muy bien aa:: m| muy bien, hablando de violencia en la 
frontera &iquest; Que escuchan de parte de otras personas? <br>
62. A: No pos, simplemente que la polic&iacute;a ta trantando de no dejar pasar 
a los hondure&ntilde;os <br>
63. J: Okey <br>
64. A: Nada m&aacute;s<br>
65. J: Muy bien e:: | &iquest;Est&aacute;s consciente de las agresiones que pueden 
experimentar en la frontera? O sea los riesgos a los que :::-<br>
66. A: //No, si porque aqu&iacute; en este camino venimos a lo que Dios diga.<br>
67. J: Okey, y | &iquest;Consideras que vale la pena arriesgarte? <br>
68. A: || s:: solamente Dios sabe veda <br>
69. J: Okey, e:: | &iquest;Qu&eacute; medidas tomas para prevenir las agresiones 
en la frontera? <br>
70. A: Evitar como decir si miro peligroso ah&iacute; no me voy para ac&aacute; 
<br>
71. J: No acercarte ah&iacute; <br>
72. A: Si \\ no acercarme (ah&iacute;)<br>
73. J: Okey | a:: |muy bien, dice, espec&iacute;ficamente para prevenir la violencia 
sexual &iquest;Qu&eacute; medidas adoptan?<br>
74. A: m:: &iquest;C&oacute;mo as&iacute;?<br>
75. J: || m como las violaciones a las mujeres, o abuso sexual <br>
76. A: &iquest;Qu&eacute; si lo he visto o |?<br>
77. J: Que si sabes como lo previenen o &iquest;has visto alg&uacute;n caso?<br>
78. A: // Ah si , si lo he visto <br>
79. J: Tambi&eacute;n sabes all&aacute; en tu pa&iacute;s<br>
80. A: p Si, \en mi pa&iacute;s es visto\<br>
81. J: &iquest;Tambi&eacute;n a personas cercanas a ti? Tipo amigos, vecinos :::-<br>
82. A: /eh no/, solo amigas <br>
83. J: Solo amigas, okey, nos quieres platicar de alg&uacute;n caso <br>
84. A: m:: \La verdad no\<br>
85. J: Okey bueno muy bien, no pasa nada, e:: | a ti en lo personal &iquest;te 
ha pasado alguna agresi&oacute;n en la frontera | que hallas pasado?<br>
86. A: Nunca, e que es primer vez, solo en Nova Caliente en Guatemala, solo en 
la frontera fue la agresi&oacute;n de los polic&iacute;as hondure&ntilde;os tiraron 
bombas lagrimas <br>
87. J: Te tiran bombas <br>
88. A: pp \Si<br>
89. J: Okey, &iquest;y porque crees que exista esa violencia dirigida a los migrantes?<br>
90. A: La verdad no lo s&eacute; <br>
91. J: Muy bien, a:: || muy bien y tu, o sea en lo personal &iquest;Qu&eacute; 
sugerencias dar&iacute;as a las personas que quieren salir de su pa&iacute;s por 
cualquier que sea el motivo?<br>
92. A: &iquest;C&oacute;mo as&iacute;?<br>
93. J: mm si, o sea | tu que consejo les dar&iacute;as a tus compa&ntilde;eros 
o vecinos que est&aacute;n all&aacute; y se quieren venir para ac&aacute; :::-<br>
94. A: // ah okey// <br>
95. J: que si lo intenten o <br>
96. A: No si en caso me va bien yo tampoco le deseo el mal a la otra persona, 
no pos gracias a Dios y llegue porque no pueden llegar vos<br>
97. J: Ellos<br>
98. A: Si <br>
99. J: e:: || Muy bien y &iquest;tu como piensas que pueda solucionarse la violencia?&iquest; 
Qu&eacute; crees que haga falta para que ya no haya tanta violencia?<br>
100. A: Bueno en mi pa&iacute;s <br>
101. J: aja<br>
102. A: el presidente que la, es lo &uacute;nico <br>
103. J: Muy bien y en las fronteras<br>
104. A: en las fronteras no s&eacute; la verdad<br>
105. J: Okey y || y am &iquest;c&oacute;mo crees que pueda solucionarse el problema 
de la migraci&oacute;n? <br>
106. A: Solo que Dios les ablande el coraz&oacute;n porque la verdad solo el poder 
pues de ah&iacute; nosotros no podemos hacer nada <br>
107. J: Okey, y si tuvieras la oportunidad de ayudar a otros migrantes &iquest;Qu&eacute; 
har&iacute;as?<br>
108. A: || ayudarle la verdad /porque yo sufri/ y me han ayudado la verdad <br>
109. J: y no quieres que ellos pasen lo mismo <br>
110. A: As&iacute; <br>
111. J: &iquest;y algo m&aacute;s que quieras decir a la entrevista?<br>
112. A: mm no, nada <br>
113. J: Okey bueno, muchas gracias.<br>
<br />
<p><b>Fin.</b></p>
<br />
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article> <article class="entrevista_2" id="entrevista2"> 
<h2>Entrevista realizada el d&iacute;a viernes, 8 de marzo de 2019.</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/MSVD_Entrevista02.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>10:27 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo femenino; 26 a&ntilde;os; procedente de Honduras; tiene 3 hijos 
  de residencia en Honduras, radica en Monterrey.</p>
<p>El lugar de la entrevista es una iglesia que da asilo a personas migrantes, 
  se encuentran la entrevistada (<b>E</b>) y el entrevistador (<b>C</b>).</p>
<br />
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {}</p>
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m</p>
<p>&nbsp;</p>
1. C: Hola buenas tardes aqu&iacute; eh estoy Ciro Picardi de parte de la universidad 
aut&oacute;noma de nuevo le&oacute;n y nos encontramos el d&iacute;a de hoy con/<br>
2. E: Cynthia <br>
3. C: Con Cynthia, muy bien, Cynthia, este, le vamos a realizar algunas, algunas 
preguntas sobre su, su viaje, sobre su situaci&oacute;n actual, est&aacute; bien 
que grabemos esta entrevista, para fines escolares <br>
4. E: Si<br>
5. C: Muy bien eh me podr&iacute;a primero este, proporcionar su edad, como, &iquest;cu&aacute;ntos 
a&ntilde;os tiene?<br>
6. E: Yo tengo 26 a&ntilde;os <br>
7. C: 26 a&ntilde;os, muy bien eh, &iquest;de d&oacute;nde viene Cynthia?<br>
8. E: De honduras<br>
9. C: De honduras, muy bien eh, &iquest;de qu&eacute; ciudad viene?<br>
10. E: De Tegucigalpa.<br>
11. C: a teguci es la capital no?<br>
12. E: si, pero soy de Patuca Olancho <br>
13. C: a ok, ok muy bien, &iquest;y cu&aacute;l fue su ultimo grado de estudio 
Cynthia?<br>
14. E: Pues llegue hasta 4to grado por la situaci&oacute;n<br>
15. C: ok, perfecto y :: &iquest;qu&eacute; ocupaci&oacute;n ten&iacute;a en Honduras?<br>
16. E: pues/ all&aacute; me dedicaba a lo que es, aa, lavar ajeno, a trabajar 
en el d&iacute;a talvez en comedor, a lo que se gana solo son 100 el d&iacute;a 
50 la (empira) me entiende porque la situaci&oacute;n esta s&uacute;per dif&iacute;cil 
y sobre todas las cosas venimos aqu&iacute; a buscar una lucha, <br>
17. C: si <br>
18. E: m&aacute;s por los hijos de uno por su familia, todo eso, me entiende, 
la situaci&oacute;n en honduras esta dif&iacute;cil y la delincuencia<br>
19. C: ok<br>
20. E: adem&aacute;s de eso vamos huyendo a muchas cosas porque ya no soportamos 
el pa&iacute;s, el presidente que esta all&aacute; me entiende es, en vez de apoyar 
m&aacute;s bien/ esta echando a perder todo el pueblo por que lo que es la capacidad 
casi todo el mundo se est&aacute; viniendo para ac&aacute;<br>
21. C: mmjj ::<br>
22. E: todo mundo est&aacute; queriendo viajar, pero sobre de esos viajes ponernos 
en peligro nuestra vidas por que tantas cosas que se han visto, se han visto violaciones, 
secuestros, bueno que es lo que no, me entiende<br>
23. C: claro<br>
24. E: Aqu&iacute; solo Dios con nosotros y ah&iacute; nadie mas <br>
25. C: mmjj/, que/ lo que me comentaba Cynthia del tema de secuestros, violaciones, 
hasta, tienes alguna historia o algo que nos puedas comentar, de hecho, nuestra 
entrevista esta, esta direccionada a eso al tema de mujeres<br>
26. E: pues la verdad si porque/ no hace mucho a llegado personas as&iacute; que 
tal vez han cruzado mas adelante y los vinimos est&aacute;n contando las historias 
sobre de eso uno se encarga de aconsejar a las dem&aacute;s a las que quieren 
seguir ahorita el camino, eh, si es bien dif&iacute;cil la verda es cosas, situaciones 
que si duelen mucho, cuando le cuentan esas historias a uno eh/, tenemos cierta 
personas que las han violado, a los hombres los han golpiado y es una injusticia 
me entiende por qu&eacute; nosotros vamos a buscar lo que es una vida mejor, pero 
por buscar una vida mejor ciertos hondure&ntilde;os, compa&ntilde;eros han muerto, 
han muerto ni&ntilde;os, han, quien no se sabe va pero si en Guatemala fue porque/ 
ps sacaron carrera, ah&iacute; murieron 5 hondure&ntilde;os eh, mas all&aacute; 
dicen que veneraron una familia no le sabr&eacute; decir si si es cierto va pero 
lo que vienen contando lo que vienen de atr&aacute;s para ac&aacute; esa es la 
historia que se traen y s&uacute;per dif&iacute;cil y uno va por una lucha me 
entiendes que lo den sobrevivir que lo dejen pasar/ no que los maltraten porque 
nadie sabe la situaci&oacute;n de nuestro pa&iacute;s porque uno tiene la esperanza 
<br>
27. C: si<br>
28. E: y la esperanza me entiende uno tiene que saberla llevar, pero uno se trata 
de aconsejar a las dem&aacute;s personas, pero la persona no le hace caso a uno, 
sino que ellos quieren seguir porque las necesidades bueno sin piedra por que 
venir sin dinero aqu&iacute; es dif&iacute;cil eh sin ropa sin nada me entiende, 
sin comida, todo eso, gracias a Dios tenemos el apoyo de la iglesia que nos ha 
estado ayudando en la comida me entiende, en los alimentos <br>
29. C: si...<br>
30. E: eh/ m&aacute;s por los ni&ntilde;os yo tengo 3 hijos, los deje en honduras 
yo no los traje va porque<br>
31. C: por el riesgo<br>
32. E: uno, no los pongo en riesgo si yo voy a sufrir, si a m&iacute; me va a 
pasar algo, que me pase a m&iacute;, pero me doler&iacute;a el alma que me le 
pase a mis hijos, eso si no, me entiende<br>
33. C: claro<br>
34. E: y :: yo s&eacute; yo tengo la fe en Dios, no le voy a decir que ahorita 
voy a cruzar, pero yo tengo la fe en Dios que voy a llegar a Estados Unidos y 
ahorita no pero ahorita me quedo trabajando ac&aacute; porque hay bastante trabajo<br>
35. C: que bueno<br>
36. E: que bueno que aqu&iacute; lo apoyan a uno excelente para aqu&iacute; no 
tengo queja a m&iacute; no me han visto mal durante estoy aqu&iacute; <br>
37. C: mmjj<br>
38. E: lo que si a veces hay cosas que uno necesita me entiende <br>
39. C: Si claro claro, y :: en temas para, para tus hijos all&aacute;, en en honduras 
cu&aacute;l es tu plan, como como piensas este, traerlos<br>
40. E: pues mi plan si Dios lo permite, a m&iacute; me encantar&iacute;a tener 
mis hijos aqu&iacute;, pero por la situaci&oacute;n o el dinero no los traje, 
porque yo ven&iacute;a caminado <br>
41. C: si <br>
42. E: yo hasta hace poco como ayer llegue anoche <br>
43. C: como, &iquest;c&oacute;mo fue tu viaje Cynthia, como llegaste?<br>
44. E: pues fue un poco dif&iacute;cil porque se aguanta hambre , sed, porque 
la primera cavara, en la primera caravana si apoyaba, en, las entradas pues porque 
de ac&aacute; para all&aacute; no los han visto mal pero de Guatemala para ac&aacute;, 
hemos sufrido, los han visto ma/l, los han rechazado como persona porque somos 
g&uuml;eros, a nosotros nos dicen g&uuml;eros, hemos aguantado hambre, se, tal 
vez en un camino una dormida, usted sabe libre en el parque donde sea ah&iacute; 
dorm&iacute;amos, eh/, lo que me ha dolido m&aacute;s el alma, son los ni&ntilde;os, 
porque uno aguanta aun y uno aguanta ese (lason) y los ni&ntilde;os si la pesaron, 
realmente nosotros, tal vez ::, que se toquen la conciencia me entiende que cuando 
vienen ni&ntilde;os as&iacute; que le regalen un su&eacute;ter una cobija o algo, 
todo eso, no lo vamos a pagar nosotros, sino que van a recibir la bendici&oacute;n 
de Dios nosotros no le tenemos por qu&eacute; pagar por que no tenemos con qu&eacute; 
pero la, ah&iacute; se reciben las bendiciones <br>
45. C: claro, claro que si <br>
46. E: eso si es &lt; 3 seg&gt;<br>
47. C: si pudieras dar alg&uacute;n consejo al, a a tus amigos y familiares que 
est&aacute;n en honduras, al momento de venir, &iquest;qu&eacute; les dir&iacute;as?<br>
48. E: pues yo a mis amigos a mis paisas de honduras a todo mi compa&ntilde;eros, 
a mi familia a mis hijos lo &uacute;nico que les puedo decir que la situaci&oacute;n 
es dif&iacute;cil para agarrar un camino de esos, hay que/, explicarse decidirlo 
y decidirlo a todo, al que hay que decidir a perder y a ganar y yo lo que les 
aconsejo que no se mueven de donde est&aacute;n que agarren experiencia de nosotros, 
todo lo que sufrimos como caminamos, que por favor entiendan que si este camino 
no es para nosotros no es para nosotros, los pa&iacute;ses no son de nosotros, 
nuestro pa&iacute;s est&aacute; en honduras y si esa situaci&oacute;n ahorita 
esta as&iacute; se va a componer, que tengan fe ::, que solo conf&iacute;en en 
Dios pero no les aconsejo que por favor no agarren ese camino est&aacute; un s&uacute;per 
dif&iacute;cil, s&uacute;per dif&iacute;cil, la verdad si/, que agarren consejo 
que no sigan este camino o el que quiere seguir que si siga pero con su dinero, 
pague su coyote el que tiene, pero as&iacute;, que no se venga porque realmente 
a lo que vienes es a sufrir<br>
49. C: ok, &iquest;cu&aacute;nto tiempo duro tu viaje, Cynthia?<br>
50. E: un mes<br>
51. C: un mes <br>
52. E: a caminando un mes, hemos venido caminando yo casi solo caminando con mi 
compa&ntilde;ero, hemos sufrido bastante, realmente se sufre <br>
53. C: no puedo imaginar lo que pasaron, en, en este camino <br>
54. E: si caminando, unos unos no caminaron mucho porque se vinieron en el tren, 
pero realmente los que nos vinimos a pie si sufrimos <br>
55. C: si no no<br>
56. E: sufrimos hambre, sed, que es lo que no se sufre, las creaturas como sufren, 
que dolor no, eso no lo hagamos, hag&aacute;moslo por los hijos de nosotros a 
no traer a sufrir nuestros hijos ac&aacute; y es cierto que hay partes que nos 
ayudan, pero no es justo el ni&ntilde;o no tiene por qu&eacute; sufrir lo que 
sufrimos nosotros, si a veces no aguantamos ni nosotros el sufrimiento de la (son) 
el hambre, no digamos en un angelito, no por favor eso si hay que tratar de evitar 
de traer a sufrir a nuestros hijos ac&aacute; &lt; 5 seg.&gt;<br>
57. C: perfecto, eh, bueno ya lo que has visto hasta ahorita de M&eacute;xico, 
Cynthia hay algo que te ha gustado, alg&uacute;n alg&uacute;n algo que te haya 
parecido bonito, algo que te de esperanza <br>
58. E: eh ::, pues mi esperanza aqu&iacute; en M&eacute;xico lo m&aacute;s, aqu&iacute; 
en monterrey es el trabajo aqu&iacute; hay bastante trabajo, las personas son 
lindas personas, aqu&iacute; nos han visto bien bueno no me quejo de monterrey 
no nos quejamos tiene todo el pueblo dice que de aqu&iacute; no nos quejamos porque 
nos han apoyado s&uacute;per bastante para aqu&iacute; no hay queja, y aqu&iacute; 
todo es lindo las personas tanto el trabajo que hay, las oportunidades que nos 
ofrecen eso nosotros lo agradecemos <br>
59. C: que bueno<br>
60. E: demasiado se los agradecemos por que el trabajo es &uacute;til y es lo 
que m&aacute;s necesitamos nosotros aqu&iacute; en esta situaci&oacute;n, eso 
si <br>
61. C: que bueno, me da mucho gusto, ahorita como planes de que trabajo tienes 
pensado realizar en estos di, en estos d&iacute;as, o que respuestas tenias <br>
62. E: pues ahorita, estamos buscando lo que hallemos primero, lo que queremos 
es trabajar no importa lo que ganemos, sino que necesitamos trabajo, algo que 
ganemos porque necesitamos tal vez alquilar cuartos no sabemos, as&iacute; todo 
el tiempo, o ayudar aqu&iacute; en la iglesia o algo por que si el, ya nos dan 
la oportunidad de estar aqu&iacute; tenemo que ofrendar me entiendes, todo eso 
apoyar porque no hay que solo dar la mano y agarrar todo el codo, no, hay que 
tratar de apoyar tambi&eacute;n eh entonces/, hay alg&uacute;n lado donde trabajo 
y ah&iacute; estamos varia gente se ha ubicado ah&iacute; donde estamos ubicados 
poco a poco todo eso.<br>
63. C: y que has visto que que consigan trabajo, que que trabajos has visto que 
consigan ahorita <br>
64. E: pues :: algunos han conseguido en casa otros en ayudantes de alba&ntilde;il, 
otros de lavar coches, varias personas comedores, todo eso<br>
65. C: que bueno o sea si hay, si ha habido oportunidades hasta ahora <br>
66. E: si hay oportunidades, oportunidades en M&eacute;xico hay, el que no quiere 
trabajar es porque no quiere <br>
67. C: claro<br>
68. E: pero aqu&iacute; trabajo luego ofrecen m&aacute;s oportunidades de trabajar 
quien m&aacute;s queremos, queremos oportunidad/ para ir a correr el riesgo de 
seguir a correr ese camino m&aacute;s adelante, mejor qued&eacute;monos aqu&iacute;, 
que aqu&iacute; hay apoyo suficiente por trabajo, el que no quiere entender por 
qu&eacute; no quiere<br>
69. C: claro<br>
70. E: esto es/ <br>
71. C: perfecto Cynthia me parece muy bien me gustaron mucho sus palabras que 
nos compartiste y de mi parte seria todo en esta entrevista y pues bueno te deseamos 
lo mejor me da mucho gusto escuchar t&uacute;, que tienes muchos &aacute;nimos, 
vas a ver que todo se va a solucionar, monterrey es una ciudad con muchas oportunidades 
y sin duda va a salir todo bien ||<br>
72. E: pues si &lt; 5 seg &gt;<br>
73. C: &iquest;algo m&aacute;s que quieras agregar?<br>
74. E: no pues/, solamente en decirles algo m&aacute;s a esas personas que tal 
vez no se tocan la conciencia para hacer lo que hacen y esos caminos, no s&eacute; 
si nos van a amenazar que nos van a mandar a matar, que es lo que tal vez tratan 
de hacer, agarrar el miedo a uno/, peor uno lo &uacute;nico que hace es buscar 
una vida mejor de ofrecerle algo mejor a nuestros hijo, a nuestra familia, tal 
vez por venir a buscar un una nueva vida vayamos a fracasar en esos caminos, es 
un poco dif&iacute;cil tratemos de de ayudar/, no de quitar, m&aacute;s bien, 
hay personas que (puchica), toqu&eacute;monos la conciencia, todos somos humanos 
cuando nos muramos todos vamos pal cielo pero si somos de mal coraz&oacute;n vamos 
atr&aacute;s ni a la puerta, por favor comprendamos eso <br>
75. C: perfecto Cynthia, much&iacute;simas gracias<br>
<br />
<b>Fin.</b>
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />

</article> 
 </article> <article class="entrevista_3" id="entrevista3"> 
<h2>Entrevista realizada el d&iacute;a viernes, 8 de marzo de 2019.</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista03.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>9:42 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo femenino; De nombre Gladis Rondina Sevilla Gomes; 37 a�os de 
  edad; Viuda con 4 hijos (Lleva consigo a 3 de ellos, la menor se qued� en Honduras); 
  Originaria de Honduras; Sin estudios; Trabajadora de limpieza en hogares en 
  su pa�s de origen; Migrante por falta de trabajo; Se dirige a Estados Unidos; 
  Es la quinta vez que ha sido deportada; No ha sufrido violencia en la frontera; 
  La entrevista es presencial, en el comedor del migrante (Pedro Infante) ubicado 
  en Monterrey.</p>
<p>Sea (<b>J</b>)la entrevistadora (Estudiante de la UANL), (<b>G</b>) la migrante.</p>
<br />
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {}</p>
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m</p>
<p>&nbsp;</p>
1. J: ac E &iquest;Me puede decir su nombre completo?<br>
2. G: \Gladis (Rondina) :::-<br>
3. J: Okey<br>
4. G: Sevilla Gomes <br>
5. J: Y || &iquest;Qu&eacute; edad tiene?<br>
6. G: treinta y siete<br>
7. J: Okey || &iquest;Qu&eacute; hac&iacute;a? &iquest;De d&oacute;nde viene?<br>
8. G: \ De Honduras<br>
9. J: MAY&Uacute;S Honduras &iquest;Y qu&eacute; hac&iacute;a en su pa&iacute;s?<br>
10. G: Solamente cuidar mis hijos y buscar trabajo de aseo de limpieza de casa 
pue&#8217; eso era todo :::-<br>
11. J: Okey<br>
12. G: \ Porque uno no encuentra trabajo / porque yo no soy una madre estudiada 
:::-<br>
13. J: &iquest;No estudio nada?<br>
14. G: No porque mis padres son de escasos de recursos y no ten&iacute;an dinero 
o no ten&iacute;an nada y mi mam&aacute; | se qued&oacute; sola por muchos a&ntilde;os 
porque mi pap&aacute; la dejo con todos nosotros chiquitos pue no nos pudo dar 
estudios y yo no s&eacute; nada y aqu&iacute; pue buscan mucho // Hay trabajo 
&iexcl;yo me admiro hay trabajo! yo quisiera trabajar <br>
15. J: \ (Aqu&iacute;)?<br>
16. G: Si aqu&iacute; hay trabajo, aqu&iacute; en Saltillo<br>
17. J: \Okey<br>
18. G: Lo &uacute;nico que me necesita yo es tener un \\ Ser una persona estudiada 
para yo ando tres ni&ntilde;os // Tengo cuatro ni&ntilde;os deje una ni&ntilde;a 
en honduras y ando tres<br>
19. J: Tiene 4 y ahorita trae tres<br>
20. G: MAY&Uacute;S Hay tres si \ Entonces (ta bien)<br>
21. J: &iquest;Y con qui&eacute;n dej&oacute; su hija?<br>
22. G: Con la t&iacute;a porque el pap&aacute; de ello de los primero ni&ntilde;os 
ya me lo mataron <br>
23. J: Ah Okey &lt;&#8221; 10 Segundos&#8221;&gt;<br>
24. J: Okey entonces &iquest;y viene solamente usted con sus tres hijos?<br>
25. G: // Si porque ellos no tienen pap&aacute;<br>
26. J: Ah okey<br>
27. G: ac Si ah&iacute; ( tan los papeles mio la &uacute;ltima ni&ntilde;a) no 
tiene pap&aacute; pue el pap&aacute; de ello me lo mataron) y se me ha hecho dif&iacute;cil 
mi vida :::-<br>
28. J: Entonces ahorita esta soltera<br>
29. G: tengo ocho a&ntilde;os de estar sola y (mmm) ando sufriendo / sufro en 
honduras y toy sufriendo aqu&iacute; porque no hallo trabajo pue:: &iquest;C&oacute;mo 
le hago para darle de comer eh?<br>
30. J: Y sus &iquest;A sus pap&aacute;s si los tiene?<br>
31. G: \ Mis pap&aacute;s si los tengo<br>
32. J: &iquest;En Honduras?<br>
33. G: En Honduras pero est&aacute;n separados / Pap&aacute; ta por un lado y 
mam&aacute; por otro<br>
34. J: Okey y &iquest;Cu&aacute;ntos hermanos tienes?<br>
35. G: | Ah tengo | cuatro | somos seis // &eacute;ramos ocho pero asesinaron 
dos// <br>
36. J: Okey eran ocho<br>
37. G: (Asesinaron dos de mi hermano de los m&aacute;s menores de los &uacute;ltimos<br>
38. J: &iquest;Y qu&eacute; le dijo su familia de que se viniera?<br>
39. G: No (se est&aacute;n) dando cuenta<br>
40. J: &iquest;No se dieron cuenta? <br>
41. G: /Sola me vine con mi hijos/ porque por parte de mi familia (no deje a mi 
hija&#8230; porque por parte del pap&aacute;)<br>
42. J: &iquest;Pero sus pap&aacute;s no saben que se vino?<br>
43. G: Solo se lo dije a mi pap&aacute;. Mi mam&aacute; no porque ellos est&aacute;n 
muy retirados y le dije a mi pap&aacute; que no le fuera avisar mi mam&aacute; 
porque (Se iba a venir) y es una se&ntilde;ora de setenta y seis a&ntilde;os y 
:::-<br>
44. J: //Se iba a preocupar mucho<br>
45. G: Se iba a preocupar y a su (&#8230;) ha sufrido mucho. Nadie lo puede creer, 
se mira muy demacrada ya porque sufri&oacute; cri&aacute;ndonos a nosotros <br>
46. J: Si pues tuvo muchos hijos<br>
47. G: Si sufri&oacute; mucho para darnos de comer lo mismo me esta tocando a 
mi //Tengo ocho a&ntilde;os \ y ya no puedo yo<br>
48. J: &iquest;y hacia d&oacute;nde se dirige usted?<br>
49. G: Estados unidos<br>
50. J: a Estados unidos<br>
51. G: ya quiero pasar con mis tres ni&ntilde;os<br>
52. J: &iquest;Y por qu&eacute; quiere ir a Estados Unidos?<br>
53. G: Trabajar y tal vez me echen la mano con (uno). Yo quiero mire, mis hijos 
quieren seguir estudiando yo no tengo donde vivir en mi pa&iacute;s, no tengo 
donde vivir. Solo me han dado as&iacute; pues un donde vivir con mis ni&ntilde;os 
pero simplemente a mi hijo de diecis&eacute;is a&ntilde;os pues unas tres personas 
me lo encontraron pues me lo (inculparon), me le pusieron armas (en ese sentido) 
(&#8230;) estem y ya por dos veces me hab&iacute;an ido a (sepultiar) a mi casa, 
a extorsionar pue, yo no les &iquest;qu&eacute; les iba a dar? Si antes iba a 
hacer una limpieza de casa por un d&iacute;a, dia y medio para darles (que era) 
caf&eacute; y su pan. Ya en la calle pues lo (hicieron) por mi hijo pues yo no 
pude, busque trabajo y como hay mucha protesta en Hondura ee le quieren dar el 
golpe de estado al presidente de Honduras porque el no est&aacute; ayudando. Hay 
grupos mm :::-<br>
54. J: (Hay) Mucha violencia tambi&eacute;n<br>
55. G: Hay grupos armados escondidos que salen a violentar, pues a violentar. 
(&#8230;) en esas protestan matan, matan pues a personas. Entonces nosotros estamos 
sufriendo. Yo no pude encontrar un trabajo /se lo juro \ no pude, yo me daba pena. 
Mis hijos si encontraban un banano, un pl&aacute;tano en el suelo as&iacute; se 
lo com&iacute;an y aqu&iacute; pues || aqu&iacute; vea, donde vinimos a parar 
en esta casa pa poderles que mis ni&ntilde;os puedan comer y <br>
56. J: &iquest;Y qu&eacute; trabajo piensa que puede encontrar en Estados Unidos 
?<br>
57. G: Pues all&aacute; limpieza de casa aa | dobla de tela el | pues hay muchos 
trabajos que yo los puedo hacer m&aacute;s f&aacute;cil, pero un trabajo de estudio 
(Mu chica yo deseo porque) hay trabajos que me ense&ntilde;en pue eso esta as&iacute; 
yo lo puedo aprender pero como no estudie<br>
58. J: mmjj<br>
59. G: Pues puedo | no me queda m&aacute;s que lavar, buscar lavados | de limpieza 
eeh pa lo que me digan pero de un trabajo donde yo pueda ganar <br>
60. J: &iquest;Y ya hab&iacute;a intentado antes salir de su pa&iacute;s?<br>
61. G: Si, con esta van cinco veces<br>
62. J: O sea ya hab&iacute;a intentado Salir de su pa&iacute;s pero no hab&iacute;a 
podido &iquest;o si?<br>
63. G: Ya intente cuatro veces, con esta van cinco <br>
64. J: O sea y &iquest;qu&eacute; pasa? &iquest;La deportan?<br>
65. G: (Si) me deportan porque me encuentran y con los ni&ntilde;os me hallan 
pue donde quiera me ven as&iacute; sentada y entonces me preguntan &iquest;Se&ntilde;ora 
usted que es de aqu&iacute;? Yo soy migrante &iquest;y qu&eacute; hace aqu&iacute;? 
No:: ando migrando (..) no usted no puede estar aqu&iacute;, usted (..) en la 
colina va a comer bien va a beber bien, pero es que es eso. Siempre (&#8230; van) 
a mi pa&iacute;s que esta bien violentado no nom&aacute;s y pues me deportan. 
Cinco veces con esta ya con mis tres ni&ntilde;os que Dios lo sabe y esta viendo 
de arriba lo que nosotro estamo haciendo <br>
66. J: &iquest;Y c&oacute;mo llegan? &iquest;C&oacute;mo llegan a M&eacute;xico? 
Caminando, en tren :::-<br>
67. G: Ah pues por partes, por tres partes. Por aventones que las personas nos 
hacen favores nos dan aventones, otra que:: los (combis) nos dan aventones a modo 
de bajarnos antes de migraci&oacute;n fue as&iacute; como logramos llegar.<br>
68. J: Okey<br>
69. G: \ Esta peligroso. Ah&iacute; est&aacute;n mis tres ni&ntilde;os, tengo 
una ni&ntilde;ita de ocho, tengo al ni&ntilde;o de diecis&eacute;is y el de trece 
a&ntilde;o <br>
70. J: Est&aacute;n peque&ntilde;os<br>
71. G: tan peque&ntilde;os, yo necesitan, quieren estudiar pues <br>
72. J:&iquest;Y en su pa&iacute;s hay acceso a la educaci&oacute;n para los | 
las ni&ntilde;as?<br>
73. G: \ \ Hay para todos<br>
74. J: Para todos <br>
75. G: Si pero yo no puedo, no, soy madre sola tengo ocho a&ntilde;os por Dios 
hasta que el de arriba (me lleve) c&oacute;mo les voy a dar estudio <br>
76. J: &iquest;Y ha sufrido violencia en todos estos viajes| todos estos viajes 
que ha intentado llegar a estados unidos?<br>
77. G: / No/ ahorita no he sufrido violencia gracias a Dios. Quiz&aacute; Dios 
est&aacute; viendo que:::-<br>
78. J: &iquest;Alguien la ha agredido? &iquest;Nadie?<br>
79. G: As&iacute; no, (&#8230; Frontera) que a uno lo tratan de criminal y le 
quitan el dinero, que mira que tienes que rodear aquella frontera, tene que caminar 
un hora y algo pa as&iacute; pagame y nosotros decimos &#8220;no, no podemos pagar 
ve que escucha&#8221; &#8220;No, no te vayas a quedar sola porque esta frontera 
nosotros tenemos a alguien,// paguenos para irlos a cruzar//&#8221; \ as&iacute; 
pues \<br>
80. J: &iquest;Pero qui&eacute;n les dice eso? <br>
81. G: personas que nos salen de ah&iacute; pue queriendo extorsionar pue as&iacute; 
lo pagan, tenemos que pagar. La pizada de Guatecal a frontera nos cobran a los 
ni&ntilde;os cuatrocientos quetzales, cuatrocientos pesos, as&iacute; por cruzarlos 
a un rodeo <br>
82. J: p Okey<br>
83. G: y luego cuando uno ya termina de llegar a un lugar que le puedan una combi 
traer ya no trae dinero porque ya hay vivos en frontera que le est&aacute;n quitando 
el dinero, si no :::-<br>
84. J: Entonces usted no ha sufrido ninguna agresi&oacute;n, nadie la golpeado:::-<br>
85. G: No gracia a Dios no, gracias a Dios no<br>
86. J: \ okey<br>
87. G: gracias a dios que eso no nadie me ha :::-<br>
88. J: &iquest;y usted cree que vale la pena arriesgarse?<br>
89. G: pues no lo s&eacute; || no s&eacute; si valdr&aacute; la pena porque todav&iacute;a 
no lo ha logrado el sue&ntilde;o que yo quiero <br>
90. J: Pero todo esto que pasa cuando esta aqu&iacute;, los que la regresan, o 
sea &iquest;vale la pena otra vez intentarlo &iquest;<br>
91. G: \ pues | yo digo que si porque durante uno no le pase nada pue vuelve a 
regresar <br>
92. J: pp Okey <br>
93. G: Y que uno tambi&eacute;n trate (o sea) por los ni&ntilde;os porque ellos 
no saben \\na \\ <br>
94. J:/ Y como le hace para aqu&iacute;, hay tantos hombres son menos mujeres 
y usted tiene ni&ntilde;os<br>
95. G: &iexcl;Si somos poquitas! Este nosotro mujeres aqu&iacute; ya nos vamo 
a ir pa la misa de la misa los llevan a hacer fila all&aacute;, all&aacute; los 
hacen un regristro (y todo no) registran todo a uno.<br>
96. J: pp Okey<br>
97. G: /Nos hacen un gran registro no s&eacute; a quien (&#8230;)<br>
98. J: Pero est&aacute;n separados hombres y mujeres<br>
99. G: /&iexcl;Si, si! All&aacute; la mujeres y aqu&iacute; lo hombre. ac Nomas 
en el d&iacute;a las mujeres tienen que estar dentro con los ni&ntilde;os y los 
hombres afuera. Nosotro ya en la ma&ntilde;ana lo tiran para ac&aacute; despu&eacute;s 
que le dan caf&eacute; con pan lo traen para ac&aacute; en la noche<br>
100. J: No los tienen juntos, entonces no hay tanto problema <br>
101. G: No juntos no. Orita, en el d&iacute;a si porque descansa los ni&ntilde;os 
ah&iacute; y bueno nosotro tambi&eacute;n y la | en la noche ahorita salimos de 
aqu&iacute; vamos para la iglesia <br>
102. J: &iquest;Y ah&iacute; se quedan ustedes en la iglesia?<br>
103. G: &iexcl;No! Es que es una misa <br>
104. J: Ah:: okey:::-<br>
105. G: De ah&iacute; salimos y agarramos para all&aacute; a hacer una fila porque 
nos hacen registro, todo lo sacan <br>
106. J: Okey<br>
107. G: Lo sacan todo, todo ah&iacute; pue ||<br>
108. J: okey | &iquest;y usted que le recomendar&iacute;a a personas que quieren 
salir de su pa&iacute;s? | &iquest;Qu&eacute; se queden en su pa&iacute;s?<br>
109. G: Si porque esta feo esto aqu&iacute;. Ta feo a:: | <br>
110. J: Se sufre<br>
111. G: Si se esta sufriendo aqu&iacute; (creo) ya en la frontera ya para cruzar 
a estados unidos tambien ya esta, ha habido muchos fracaso <br>
112. J: Okey, solo me puede repetir su nombre<br>
113. G: p Gladis (Rondina) Sevilla Gomes <br>
114. Okey, bueno muchas gracias por compartirnos tu historia. Gracias<br>
<br />
<b>Fin.</b> 
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article> 
 </article> <article class="entrevista_4" id="entrevista4"> 
<h2>Entrevista realizada el d&iacute;a viernes, 8 de marzo de 2019.</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista04.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>8:43 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo femenino; De nombre Karina Isela Santos; 23 a&ntilde;os de edad; 
  Soltera; Originaria de Honduras; Secundaria concluida; Migra con su hermano 
  para llegar a Estados Unidos con su Madre (Residente de California); Es la segunda 
  vez que intenta migrar; No ha sufrido violencia en la frontera; La entrevista 
  es presencial, en el comedor del migrante (Pedro Infante) ubicado en Monterrey.</p>
<p>Sea (<b>J</b>) la entrevistadora (Estudiante de la UANL), (<b>K</b>) la migrante.</p>
<br />
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {}</p>
<p>Palabra ininteligible o dudosa: ()</p>
<p>Movimiento: m </p>
<p>1. J: Bueno, mi nombre es Jhoselin y vengo de la universidad para hablar | 
  hacerte una investigaci&oacute;n entrevista de c&oacute;mo es la violencia en 
  la frontera, okey, e| &iquest;Cu&aacute;l es tu nombre?<br>
  2. K: eh mi nombre es Karina Isela Santos<br>
  3. J: Muy bien, &iquest;Cu&aacute;ntos a&ntilde;os tienes?<br>
  4. K: tengo veintitr&eacute;s a&ntilde;os <br>
  5. J: veintitr&eacute;s, ah:: &iquest;De qu&eacute; pa&iacute;s vienes?<br>
  6. K: Honduras<br>
  7. J: De Honduras, &iquest;Cu&aacute;l fue tu &uacute;ltimo grado de estudios?<br>
  8. K: e:: Secundaria <br>
  9. J: De secundaria, Okey, e:: &iquest;Qu&eacute; trabajo desempe&ntilde;abas 
  ah&iacute; en tu pa&iacute;s?<br>
  10. K: eh pues teniamo un negocio <br>
  11. J: Okey :::-<br>
  12. K: de comida <br>
  13. J: Okey, &iquest;Tu estado civil?<br>
  14. K: Soltera<br>
  15. J: Soltera, muy bien, sobre tu familia &iquest;Tienes hijos?<br>
  16. K: No<br>
  17. J: Okey, eh &iquest;Viven tus padres?<br>
  18. K: Si <br>
  19. J: Todav&iacute;a<br>
  20. K: // Bueno solo mi mam&aacute; <br>
  21. J: Tu mam&aacute;, okey, &iquest;y tienes hermanos?<br>
  22. K: Si tambi&eacute;n <br>
  23. J: &iquest;Tu mam&aacute; vino contigo?<br>
  24. K: No<br>
  25. J: &iquest;Viniste sola?<br>
  26. K: Vengo con mi hermano<br>
  27. J: Con tu hermano, okey, este | &iquest;Qu&eacute; piensa tu mam&aacute;, 
  tu familia, de que ustedes se hayan salido de all&aacute;, de Honduras?<br>
  28. K: pues | &lt;risas&gt; la verdad mi mam&aacute; esta alegre porque ella 
  est&aacute; en california <br>
  29. J: /&iexcl;Ah tu mam&aacute; est&aacute; en California!/ <br>
  30. K: Nuestra meta es llegar hasta donde est&aacute; ella <br>
  31. J: Ah muy bien, y &iquest;ella all&aacute; con quien vive?<br>
  32. K: Ella vive con su esposo y un hermano m&aacute;s m&iacute;o<br>
  33. J: Okey, muy bien, entonces te diriges hacia Estados Unidos :::-<br>
  34. K: California<br>
  35. J: Porque ah&iacute; esta tu mam&aacute;, Muy bien am:: tu motivo aparte 
  de estar con tu mam&aacute; &iquest;Cu&aacute;l es?<br>
  36. K: || pues:: | El motivo porque quiero superarme m&aacute;s pero si, por 
  eso. <br>
  37. J: un buen trabajo all&aacute;<br>
  38. K: empleo, si<br>
  39. J: Okey, muy bien, e:: &iquest; y alg&uacute;n trabajo que tu digas de que 
  hay tipo me quiero ir para all&aacute; para trabajar en esto? &iquest;Un trabajo 
  que te gustar&iacute;a desempe&ntilde;arte en Estados Unidos?<br>
  40. K: pue la verdad me gustar&iacute;a terminar mis estudios para poder tener 
  un buen empleo<br>
  41. J: &iquest;Qu&eacute; quieres estudiar?<br>
  42. K: Derechos, Abogada<br>
  43. J: Ah muy bien, Okey, e:: &iquest;Cu&aacute;ntas veces has intentado migrar?<br>
  44. K: pues | con esta la segunda vez <br>
  45. J: La segunda vez, Muy bien, entonces &iquest;ya hab&iacute;as sido deportada 
  antes?<br>
  46. K: No, me regrese yo sola<br>
  47. J: Ah muy bien, e:: | &iquest;Tu migraci&oacute;n c&oacute;mo fue? &iquest;Qu&eacute; 
  medio de transporte utilizaste, Cu&aacute;ntos pa&iacute;ses cruzaste y cu&aacute;ntos 
  d&iacute;as tardaste aproximadamente?<br>
  48. K: pues | de Honduras tengo un mes de haber salido, de honduras, y me vine 
  en bus y tambi&eacute;n en tren. <br>
  49. J: Okey muy bien /&iquest;Tuviste dificultades al venir?/<br>
  50. K: La verdad que si, /ma en el tren/<br>
  51. J: p &iquest;Por qu&eacute;?<br>
  52. K: porque cuesta treparse a el y hay que correrlo para poder subirse, \no 
  es f&aacute;cil\<br>
  53. J: Muy bien, &iquest;y ahorita en M&eacute;xico actualmente a qu&eacute; 
  te dedicas? <br>
  54. K: pue por ahorita a nada<br>
  55. J: a nada<br>
  56. K: la verdad no<br>
  57. J: Muy bien, este, sobre el tema de la violencia &iquest;Qu&eacute; es lo 
  que opinas de ella?<br>
  58. K: mm || no pues que la verdad nosotros corremo mucho peligro al venir aca 
  porque esta la delincuencia, esta fea &lt;risas&gt; a mucha gente le ha pasado 
  que muchachas que las han violado a otro jovene lo han golepado o secuestros, 
  entonces pienso que tal vez hacemo mal de venirnos para ac&aacute; porque corremos 
  mucho peligro <br>
  59. J: p &iquest;a ti nunca te ha pasado nada?<br>
  60. K: No, gracias a Dios no <br>
  61. J: &iquest;y amistades tuyas cercanas?<br>
  62. K: pues solo amigos que me han contado que los han golpeado \nada m&aacute;s\<br>
  63. J: muy bien, este | ustedes, &iquest;En tu pa&iacute;s que es lo que haces 
  para , que es lo que hacen all&aacute; para evitar la violencia?<br>
  64. K: || &lt;tose&gt; pues la verda ma que todo nosotros, como lo puedo explicar, 
  tratamos de no salir mucho as&iacute; a lugares porque hay mucho peligro en 
  Honduras, tambi&eacute;n hay bastante peligro, lo de maras, que secuestro, asalto, 
  cosas as&iacute;<br>
  65. J: Muy bien, este, y sobre hablando de la violencia en la frontera &iquest;Tu 
  qu&eacute; m&aacute;s has escuchado? <br>
  66. K: Pues la verdad, solamente eso de que por ahorita bueno por ejemplo si 
  no vamo para Nuevo Laredo dicen que los zetas est&aacute;n secuestrando a la 
  personas, piden dinero por ellos y si no los pagan pues los matan y a las mujeres 
  las violan y todo eso. Eso es lo que he escuchado.<br>
  67. J: Muy bien, eh &iquest;Tu est&aacute;s consciente de las agresiones que 
  pudiste experimentar al venir ac&aacute; a la frontera?<br>
  68. K: eeeh &lt;risa&gt;<br>
  69. J: &iquest;Si estabas consciente de que corro peligro al irme para all&aacute;?<br>
  70. K: Si, la verdad si, corremo mucho peligro. Ma que todo la mujeres porque 
  como le digo podemos ser violadas o secuestradas mas que todo las mujeres<br>
  71. J: muy bien, &iquest;y tu consideras que vale la pena arriesgarse?<br>
  72. K: bueno jaja depende el motivo la verdad porque yo pienso que por ver a 
  mi mam&aacute; porque tengo tiempo de no verla si vale la pena porque es mi 
  madre | eh para mi si porque yo la quiero ver en realidad a ella <br>
  73. J: &iquest;Cu&aacute;nto tiempo tienes sin verla?<br>
  74. K: como unos quince a&ntilde;os, por ah&iacute;<br>
  75. J: y la vez pasada que migraste &iquest;Por qu&eacute; te regresaste?<br>
  76. K: es que mi mam&aacute; me mando traer con otra persona y la persona me 
  dejo botada entonces la verdad yo no quise seguir sola entonces mejor me regres&eacute; 
  porque | no quer&iacute;a correr peligro <br>
  77. J: &iquest;y para regresaste, para regresarte batallaste?<br>
  78. K: la verdad que para regresarse no es tan dif&iacute;cil porque uno se 
  va en bus solo se paga el pasaje ma que todo cuando no tenemos /o sea por ejemplo 
  / si tengo mi credencial puedo viajar en todo M&eacute;xico puedo andar pero 
  cuando no tenemos la credencial si nos cuesta porque por la migraci&oacute;n 
  y \ todo eso\<br>
  79. J: muy bien, este:: | sobre la violencia sexual &iquest;Qu&eacute; medidas 
  adoptan all&aacute; en tu pa&iacute;s? <br>
  80. K: || pue la verdad no sabr&iacute;a decirles porque <br>
  81. J: &iquest;No has sabido casos de esos?<br>
  82. K: No la verdad nunca he ecuchado as&iacute; <br>
  83. J: Muy bien / y tu de forma personal pudieras compartirnos que agresiones 
  te sucedieron o si es que tuviste en la frontera?<br>
  84. K: | pues la verdad no <br>
  85. J: No<br>
  86. K: Yo si a mi nadie nada que ver, gracias a Dios no me ha pasado nada, estoy 
  bien, nadie me ha agredido nada, no me ha pasado nada <br>
  87. J: muy bien | eh &iquest;Por qu&eacute; crees que exista esa violencia hacia 
  los migrantes en la frontera?<br>
  88. K: eh una parte porque | por ejemplo los zetas ellos quieren dinero entonces 
  saben que hay personas que tienen familia en los Estados Unidos entonces ellos 
  por eso los secuestran para poder obtener dinero y tambi&eacute;n he ecuchado 
  que a veces porque venden los &oacute;rganos de las personas y todo eso <br>
  89. J: Muy bien, ah:: | muy bien Qu&eacute; sugerencias les dar&iacute;as a 
  las personas que quieren salir de su pa&iacute;s por cualquier motivo que sea?<br>
  90. K: || pues la verdad que yo les dir&iacute;a que no salieran del pa&iacute;s 
  porque la verdad si es arriesgado y corremo mucho peligro y no es f&aacute;cil 
  llegar hasta aqu&iacute; la verdad que no<br>
  91. J: Muy bien| eh desde tu punto de vista &iquest;C&oacute;mo crees que el 
  problema de la violencia pueda solucionarse? &iquest;Qu&eacute; crees que haga 
  falta para solucionarse el problema de la violencia?<br>
  92. K: || pues dependiendo verdad, no s&eacute; en este pa&iacute;s como la 
  verdad no s&eacute; pero en mi pa&iacute;s ser&iacute;a no se, creo que ya no 
  hay remedio alguno, la verdad no hay remedio alguno por m&aacute;s que se quiera 
  hacer una cosa u otra ya no se puede, creo que la violencia siempre se va continuar<br>
  93. J: muy bien | ah y sobre el problema de la migraci&oacute;n &iquest;C&oacute;mo 
  crees que pueda solucionarse? &iquest;Qu&eacute; crees que tambi&eacute;n haga 
  falta para eso?<br>
  94. K: pues no se ah&iacute; si no sabr&iacute;a decirle que que har&iacute;a 
  falta <br>
  95. J: Muy bien, &iquest;si tuvieras la oportunidad de ayudar a otros migrantes 
  lo har&iacute;as?<br>
  96. La verdad si lo har&iacute;a, lo har&iacute;a porque como le digo a vece 
  hay personas que si tienen motivo pos en realidad que :::-<br>
  97. J: &iquest;Fuertes?<br>
  98. K: &iexcl;Si! Que sean fuertes y a veces hay personas que vienen aqu&iacute; 
  y tal vez solo por experimentar, tener experiencia o algo as&iacute; | pero 
  hay otro que no <br>
  99. J: Muy bien | eh &iquest;algo m&aacute;s que quieras decirnos para la entrevista?<br>
  100. K: no pue nada m&aacute;s es lo &uacute;nico que tengo que decir <br>
  101. J: Bueno muy bien, &iexcl;muchas gracias!<br>
  <br />
  <b>Fin.</b> </p>
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article>  <article class="entrevista_5" id="entrevista5"> 
<h2>Entrevista realizada el d&iacute;a viernes, 8 de marzo de 2019.</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista05.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>07:39 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo masculino; procedente de honduras; soltero; sin hijos radica 
  en monterrey.</p>
<p>El lugar de la entrevista es una iglesia que da asilo a personas migrantes, 
  se encuentran la entrevistada (<b>E</b>) y el entrevistador (<b>C</b>).</p>
<br />
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {}</p>
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m/p> 
<p>1. C: Hola buenas tardes estamos aqu&iacute; reunidos con el se&ntilde;or/<br>
  2. E: Edgar Antonio V&aacute;zquez molina<br>
  3. C: okey mi nombre es ciro picardo vamos a realizar unas cuentas preguntas 
  sobre la situaci&oacute;n migratoria aqu&iacute; en M&eacute;xico estem esta 
  &iquest;bien para ti que grabe la entrevista para fines educacionales?<br>
  4. E: bueno si quieres este bien<br>
  5. C: Entonces mira &iquest; cu&aacute;ntos a&ntilde;os tienes?<br>
  6. E: 22 a&ntilde;os<br>
  7. C: 22 a&ntilde;os muy bien eh &iquest;tu vienes de donde me comentabas que 
  venias?<br>
  8. E: vengo de honduras Ecatepec<br>
  9. C: muy bien | &iquest;y cual fue tu ultimo grado de estudios all&aacute;?<br>
  10. E: mmm secundaria <br>
  11. C: mm secundaria ok &iquest;y te dedicabas o ten&iacute;as alg&uacute;n 
  trabajo en honduras?<br>
  12. E: no motivos de trabajo no andamos bien por eso me vine para ac&aacute; 
  dije yo tal vez encuentro uno por eso es lo que uno viaja ac&aacute; vi&eacute;ndolo 
  bien casi nada<br>
  13. C: es parte de verdad<br>
  14. E: si<br>
  15. C: &iquest;y estas casado tienes familia?<br>
  16. E: No, soltero<br>
  17. C: Ok &iquest;viniste solo?<br>
  18. E:si solo<br>
  19. C: este cuantos tienes alla tu papa tus amigos tienes todos all&aacute;<br>
  20. E: si todos est&aacute;n en honduras solo yo y mi hermana vinimos para ac&aacute;<br>
  21. C: Viniste con el entonces<br>
  22. E:si<br>
  23. C:este cual fue tu camino por donde llegaste cual fue tu historia para llegar 
  a M&eacute;xico<br>
  24. E: no pues el camino que agarre fue el de ceipo que dicen a tenochtitle 
  me he venido en tren casi 21 d&iacute;as que venimos en tren, pero es bastante 
  dif&iacute;cil l pero vi&eacute;ndolo bien pidi&eacute;ndole a dios que lo traiga 
  uno llega uno a donde quiere y con suerte puede seguir uno mas adelante solo 
  si dios lo concede<br>
  25. C: claro solo lo que dios permite estem que m&aacute;s te iba a comentar 
  &iquest; y te diriges alg&uacute;n lugar o piensas quedarte aqu&iacute; en monterrey<br>
  26. E:no pues pienso quedarme a buscar alguna oportunidad <br>
  27. C: ok perfecto comoquiera monterrey tiene muchas oportunidades yo creo que 
  si vas a encontrar algo y que m&aacute;s te quer&iacute;a preguntar &iquest;entonces 
  el motivo de tu migraci&oacute;n es para buscar una mejor calidad de vida.<br>
  28. E: si una mejor calidad de vida<br>
  29. C: okey y tienes alguna idea de alg&uacute;n trabajo que quieras hacer a 
  lo mejor alg&uacute;n amigo te comento de alg&uacute;n trabajo o alg&uacute;n 
  oficio que puedas realizar aqu&iacute;<br>
  30. E: no aqu&iacute; no tengo amigos me vine solo as&iacute; nomas veo que 
  esta dif&iacute;cil si uno no tiene alguien as&iacute; que le ayude es bien 
  dif&iacute;cil encontrar un trabajo.<br>
  31. C:ok te quer&iacute;a preguntar tambi&eacute;n &iquest; como es el acceso 
  a la educaci&oacute;n alla en tu pa&iacute;s ya sea para hombres o para mujeres?<br>
  32. E:&iquest;c&oacute;mo as&iacute;?<br>
  33. C:Es f&aacute;cil estudiar o dif&iacute;cil o caro<br>
  34. E: es bastante dif&iacute;cil hay que tener bastante dinero y es complicado 
  tambi&eacute;n.<br>
  35. C: en cuanto tema de violencias te ha tocado ver o que tal est&aacute; el 
  tema de violencia all&aacute; en honduras &iquest;como esta?<br>
  36. E: depende en los lugares que uno vive as&iacute; va la violencia porque 
  digamos que uno vive en ranchos, aldeas caser&iacute;os la violencia es bastante 
  no hay tanta violencia, pero ya en las ciudades grandes se encuentra bastante 
  violencia<br>
  37. C: y en el tema de paso de honduras para ac&aacute; no te paso algo con 
  temas de violencia o<br>
  38. E: es que aqu&iacute; este camino es as&iacute; en cualquier frontera lo 
  discriminan te roban todo porque viniendo de honduras para ac&aacute; en honduras 
  y Guatemala nos quitaron todo el dinero<br>
  39. C: En serio <br>
  40. E:si nos quitaron el dinero m&aacute;s bien casi como traibamos 2000 en 
  lempiras lo que es all&aacute; el dinero que circula all&aacute; lo cambiamos 
  ah&iacute; y ah&iacute; nos quitaron todo el dinero y solo para cruzar Guatemala 
  pidiendo dinero y a veces que uno se junta le van regalando asi uno puede llegar 
  a ac&aacute; o no se le puede pedir a alguien, pero es bien dif&iacute;cil <br>
  41. C: ok tu crees que vali&oacute; la pena venir y pasar lo que pasaste &iquest;cu&aacute;nto 
  tiempo tienes aqu&iacute;?<br>
  42. Nom&aacute;s tengo un d&iacute;a<br>
  43. C: a entonces no sabes si ha valido la pena o no esperemos que si verdad<br>
  44. E: me imagino le voy a pedir a dios una oportunidad y no se ojal&aacute; 
  que un amigo ah&iacute; se compadezca de uno porque uno no viene solo por venir.<br>
  45. C: si por la necesidad m&aacute;s que nada y te quer&iacute;a preguntar 
  tambi&eacute;n tienes alg&uacute;n amigo o amiga o conocido o algo que tuviste 
  en temas de violencia all&aacute; en el camino o sea que alguna mujer le haya 
  pasado algo o le hayan dicho algo tal vez.<br>
  46. E: no por el momento a nadie ayer ven&iacute;amos con mujeres ven&iacute;an 
  con su compa&ntilde;ero y m&aacute;s gente y no les paso nada<br>
  47. C:Ah perfecto &iquest;Qu&eacute; sugerencias les dar&iacute;as a las personas 
  que quiere salir de su pa&iacute;s por cualquier motivo tu que ya lo viviste 
  hasta ahora tu que ya viviste la experiencia que les dirias a tus amigos que 
  se quieren venir para ac&aacute;<br>
  48. E: no pues que ahorita est&aacute; bien dif&iacute;cil el camino no es f&aacute;cil 
  venir no hay migraci&oacute;n y todo eso pero al venir aqu&iacute; uno se desajusta 
  pues es bien complicado estar ac&aacute; y no tener alguien<br>
  49. C:ok perfecto &iquest;c&oacute;mo crees que puedas solucionar este problema 
  de migraci&oacute;n como tu crees puedas solucionarlo<br>
  50. E: no pues me imagino que una viene desde el gobierno no hay empleo el dice 
  que si pero es mentira todo lo que el dice es mentira si as&iacute; fuera nadie 
  saldr&iacute;a del pa&iacute;s pero si hay montones de gente que aparecen cada 
  dia nose.<br>
  51. C: buen en general lo que has visto de M&eacute;xico te est&aacute; gustando 
  ves cosas bonitas cosas diferentes<br>
  52. E: si hay cosas bonitas si hay cosas diferentes <br>
  53. C: que es lo que mas te gusto que has visto hasta ahorita<br>
  54. E: las ciudades nada mas las ciudades que tienen me gustan mucho y hay bastante 
  maldad asi tambi&eacute;n.<br>
  55. E: si verdad como toda metr&oacute;poli bueno de mi parte seria todo much&iacute;simas 
  gracias para ayudarme con esta entrevista le deseo las mejores de las suertes 
  y puedas encontrar las oportunidades que buscas<br>
  56. C: esta bien<br>
  <br>
  <br />
  <b>Fin.</b> </p>
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article>
<article class="entrevista_6" id="entrevista6"> 
<h2>Conversaci&oacute;n realizada el 12 de Marzo a las 4:00 pm</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista06.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>6:07 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p>Sujeto de sexo femenino, 31 a&ntilde;os, procedente de Honduras, soltera, con 
  2 hijos, su ultimo grado de estudios fue Segundo a&ntilde;o de bachillerato 
  y su ocupaci&oacute;n era como ama de casa.<br>
  El motivo de la migraci&oacute;n se debi&oacute; porque sufrieron una masacre 
  donde estuvo con uno de sus hijos en un asesinato<br>
  <br>
  El lugar de la entrevista es en el &#8220;Comedor del Padre Infante&#8221; donde 
  se encuentran la entrevistada (Michelle), la entrevistadora (Joselyn), el ni&ntilde;o 
  (Hijo de la se&ntilde;ora) y otra persona m&aacute;s. <br>
</p>
<br />
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte, dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {} 
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m </p>
<p> 
<p>1 Ni&ntilde;o: &iquest;Quiere ver mi pescado?<br>
  2 Joselyn: A ver ens&eacute;&ntilde;amelos. Mi nombre es Joselyn {risas}<br>
  3 Ni&ntilde;o: Le doy un secreto cierre los ojos todita <br>
  4 Michelle: &iexcl;Ay Dios m&iacute;o! deja el misterio ap&uacute;rate que ya 
  me voy / (se dirige al ni&ntilde;o esto &uacute;ltimo)<br>
  5 Joselyn: Bueno, mira d&eacute;jame hacer la entrevista a tu mami y ahorita 
  me los ense&ntilde;a s&iacute;? (Esto se dirige al ni&ntilde;o) <br>
  (El Ni&ntilde;o se los ense&ntilde;a)<br>
  6 Joselyn: &iexcl;Ay! Mira que bonitos\, &iquest;T&uacute; los pintaste? (Esto 
  se dirige al ni&ntilde;o) <br>
  7 Ni&ntilde;o: &iexcl;Si!<br>
  8 Joselyn: Est&aacute;n muy bonitos. A m&iacute; me gustan los pescados tambi&eacute;n. 
  Dirigi&eacute;ndose al ni&ntilde;o <br>
  9 Michelle: Vaya, ya mi amor. (Dirigi&eacute;ndose al ni&ntilde;o)<br>
  10 Joselyn: Bueno, he &#8230;/ me podr&iacute;a dar su nombre <br>
  11 Michelle: Michelle <br>
  12 Joselyn: Michelle<br>
  13 Ni&ntilde;o: Michelle/<br>
  14 Joselyn: &iquest;Cu&aacute;l es tu edad Michelle?<br>
  15 Michelle: Treinta y uno {risas]<br>
  16 Ni&ntilde;o: Usted no se llama Michelle, ma <br>
  17 Michelle: Si me llamo Michelle <br>
  18 Joselyn: &iquest;Cu&aacute;l es tu pa&iacute;s de procedencia?<br>
  19 Michelle: Honduras <br>
  20 Joselyn: Honduras &iquest;Cu&aacute;l es tu &uacute;ltimo grado de estudios? 
  <br>
  21 Michelle: Es segundo de bachillerato <br>
  22 Joselyn: Muy bien, &iquest;Cu&aacute;l era tu ocupaci&oacute;n all&aacute;? 
  <br>
  23 Michelle: Madre, ama de casa <br>
  24 Joselyn: &iexcl;Ok!, muy bien / &iquest;T&uacute; estado civil?<br>
  25 Michelle: Soltera<br>
  26 Joselyn: &iexcl;Ok!, sobre tu familia &iquest;Cu&aacute;ntos hijos tienes?<br>
  27 Michelle: Dos <br>
  28 Joselyn: Dos. He /, a&uacute;n viven tus padres? <br>
  29 Michelle: No<br>
  30 Joselyn: &iquest;Tienes hermanos? <br>
  31 Michelle: Si <br>
  32 Joselyn: &iquest;Cuantos tienes?<br>
  33 Michelle: Tres<br>
  34 Joselyn: &iquest;Y est&aacute;n aqu&iacute; contigo tambi&eacute;n? O... 
  /<br>
  35 Michelle: No, est&aacute;n en honduras los tres <br>
  36 Joselyn: Los tres andan en honduras, &iexcl;Ok! &iquest;Qu&eacute; piensa 
  tu familia de que te hayas salido de all&aacute; de tu pa&iacute;s?<br>
  37 Michelle: Que era lo mejor que puede haber hecho <br>
  38 Joselyn: &iexcl;Enserio! &iquest;Y hacia donde te diriges?<br>
  39 Michelle: Hacia Estados Unidos <br>
  40 Joselyn: &iexcl;Muy bien! / &iquest;Y cu&aacute;l es tu motivo de la migraci&oacute;n?<br>
  41 Michelle: pues...|| sufrimos una ||, mm como se puede decir ||<br>
  Estuvimos con mi hijo en un asesinato y, || c&oacute;mo es que se le llama...<br>
  (Lo piensa) en una a masacre <br>
  42 Joselyn: okey <br>
  43 Michelle: ----&gt;con mi hijo... || y mi hijo vio todo... ||y resulta que 
  las personas que vimos, y resulta que las personas que vimos &eacute;l las conoce 
  y por eso tuvimos que salir del pa&iacute;s.../ porque El Ni&ntilde;o las conoce 
  <br>
  44 Joselyn: Muy bien, &iquest;Tienes alg&uacute;n familiar o amistad all&aacute; 
  donde t&uacute; quieres irte?<br>
  45 Michelle: &iexcl;Si!<br>
  46 Joselyn: Si, ok, &iquest;Y qu&eacute; trabajo desempe&ntilde;ar&iacute;as 
  all&aacute;?<br>
  47 Michelle: Estilista <br>
  48 Joselyn: Estilista, muy bien.../ y, &iquest;Cu&aacute;ntas veces has intentado 
  migrar? <br>
  49 Michelle: Ahhhh&#8230; / primera vez <br>
  50 Joselyn: Es la primera vez, muy bien, ah/ c&oacute;mo te comentaba ahorita, 
  sobre tu migraci&oacute;n, &iquest;Qu&eacute; transporte usaste? <br>
  51 Michelle: He /autob&uacute;s <br>
  52 Joselyn: Puro autob&uacute;s || y/, &iquest;Qu&eacute; pa&iacute;ses cruzaste?<br>
  53 Michelle: Guatemala y... || M&eacute;xico <br>
  54 Joselyn: &iquest;Y aproximadamente en d&iacute;as cu&aacute;nto te tardaste 
  o meses para llegar aqu&iacute;?<br>
  55 Michelle: 4 d&iacute;as <br>
  56 Joselyn: Y, ahorita actualmente aqu&iacute; en M&eacute;xico, &iquest;Te 
  dedicas a algo? <br>
  57 Michelle: No<br>
  58 Joselyn: Muy bien, he... / Sobre el tema de la violencia, &iquest;Qu&eacute; 
  nos pudieras decir todav&iacute;a de tu pa&iacute;s?<br>
  59 Michelle: Ja, est&aacute; exageradamente &iexcl;fea!<br>
  60 Joselyn: &iquest;Fea?<br>
  61 Michelle: (afirma) &iexcl;Si!<br>
  62 Joselyn: &iquest;En tu pa&iacute;s que es lo que se hace para poder evitarla?<br>
  63 Michelle: Vivir en los pueblos, &iexcl;aislados! Porque el casamiento se 
  da en las ciudades grandes, entonces / vivir en los pueblos que es m&aacute;s 
  tranquilo, todo mundo se conoce y ah&iacute; no hay roces de ning&uacute;n tipo 
  \<br>
  64 Joselyn: &iexcl;Ok, muy bien!, sobre hablando de la violencia en la frontera 
  &iquest;Qu&eacute; es lo que has escuchado de otras personas?<br>
  65 Michelle: Bueno... de otras personas sobre m&iacute;, secuestro ||, maltrato 
  / amenazas / y || violencia, maltrato... \<br>
  66 Joselyn: &iquest;Es todo?, Ok.../ Ah / &iquest;T&uacute; estabas consciente 
  de las agresiones que pod&iacute;as vivir aqu&iacute; si te ven&iacute;as para 
  ac&aacute;? &iquest;Para la frontera?...<br>
  67 Michelle: No.&#8230;|| no <br>
  68 Joselyn: No(afirmando)... muy bien, &iquest;T&uacute; crees que vale la pena 
  arriesgarse salir de tu pa&iacute;s para venirse para ac&aacute;?<br>
  69 Michelle: Yo, en mi caso si <br>
  70 Joselyn: Si(afirmando)...<br>
  71 Michelle: Si (afirmando nuevamente) <br>
  72 Joselyn: Si(afirmando), yo creo que ya es dependiendo de la persona &iquest;no?, 
  el cual es su motivo...<br>
  73 Michelle: Si... / &iexcl;claro!<br>
  74 Joselyn: &iexcl;Ok!, ahhh... / de la violencia sexual, &iquest;que nos pudieras 
  contar? <br>
  75 Michelle: Pues.../ hasta ah&iacute; no s&eacute;, porque en mi caso no es 
  que haigan abusado de alguien de uno, Nada.<br>
  76 Joselyn: Ok. He.&#8230;/ &iquest;porque crees que exista la violencia hacia 
  los migrantes?<br>
  77 Michelle: Mmm&#8230;||, ser&aacute; porque algunos / dan motivo, no lo s&eacute;.../<br>
  78 Joselyn: Ok(afirmando). &iquest;qu&eacute; sugerencia le dar&iacute;as a 
  las personas que quieren salir de su pa&iacute;s, por cualquier motivo que sea?<br>
  79 Michelle: La humildad hacia / la persona. Ser humilde y decentes, nada de 
  andar con locuras en la calle, siendo que sabemos que no es nuestro caso, las 
  locuras para nuestra casa / en casa ajena pues... / uno tiene que respetar el 
  protocolo de la vida ajena.../<br>
  80 Joselyn: &iexcl;Ok!<br>
  81 Michelle: Para m&iacute; eso es todo... || e ir con paz.<br>
  82 Joselyn: &iexcl;Ok, muy bien!, eh... y desde tu punto de vista, &iquest;c&oacute;mo 
  crees que el problema de la violencia pueda solucionarse?<br>
  83 Michelle : siendo humildes todos, si venimos por un motivo hacia inmigrar 
  hacia Estados Unidos... pues venir con humildad y con Dios, nada de venir / 
  porque soy as&iacute; en mi pa&iacute;s y voy a ser as&iacute; ac&aacute; y 
  da igual (f), entonces no. Ser humildes para m&iacute;.<br>
  84 Joselyn: &iexcl;Muy bien!, y sobre el tema de la migraci&oacute;n, &iquest;alguna 
  soluci&oacute;n que puedas t&uacute; dar para <br>
  85 Michelle: Bueno, &iexcl;de nuestro pa&iacute;s la verdad es que todo mundo 
  est&aacute; loco!, all&aacute; nadie quiere estar aguantando a los delincuentes, 
  los maderos y cosas de esas, entonces todo el mundo inmigra por eso me imagino 
  m&aacute;s que todo.<br>
  86 Joselyn: si tienes la oportunidad t&uacute; de ayudar a otros migrantes &iquest;lo 
  har&iacute;as?<br>
  87 Michelle: &iexcl;Si!<br>
  88 Joselyn: Si(afirmando) &iquest;Y.&#8230;/ algo m&aacute;s que quisieras decir 
  en la entrevista? <br>
  89 Michelle: Pues.../ &iquest;c&oacute;mo qu&eacute;?<br>
  90 Joselyn: Pues no s&eacute; c&oacute;mo /, algo que quieras declarar...<br>
  91 M3: Sobre la migraci&oacute;n...<br>
  92 Michelle: Bueno, que en nuestro pa&iacute;s nuestra situaci&oacute;n es bastante 
  fea... Y no todo el mundo inmigra por los mismos motivos, porque por ejemplo 
  yo no inmigro buscando una mejor vida porque en mi pa&iacute;s la ten&iacute;a, 
  pero el motivo que me hace inmigrar pues es diferente porque ya amenazan mis 
  dos hijos, mi vida y no lo voy a permitir, entonces para evitar que le pase 
  algo a mis hijos, mejor inmigro que yo s&eacute; qu&eacute; tal vez ac&aacute; 
  no me pase lo qu&eacute; tal all&aacute; est&aacute; pensado pasarme(ff).<br>
  93 Joselyn: Muy bien, perfecto, &iexcl;muchas gracias! <br>
  94 M3: &iexcl;Muchas gracias!<br>
  <br>
  <br>
  <br />
  <b>Fin.</b> </p>
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article> 
 <article class="entrevista_7" id="entrevista7"> 
<h2>Conversaci�n realizada el 12 de Marzo a las 5:00 pm</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista07.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>5:04 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p> .<br>
  Sujeto de sexo femenino, 36 a&ntilde;os, procedente de Honduras, soltera, no 
  tiene hijos, su ultimo grado de estudios fue primaria y trabajaba como ama de 
  casa.<br>
  El motivo de la migraci&oacute;n se debi&oacute; porque no hay trabajo y hay 
  mucha delincuencia.<br>
  El lugar de la entrevista es en la calle donde se encuentran la entrevistada 
  (Reyna) y la entrevistadora (Joselyn) adem&aacute;s de otras personas m&aacute;s.<br>
</p>
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {} 
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m </p>
<p>1 Joselyn: Ya \ Bueno mi nombre es Joselyn y vengo de la universidad aut&oacute;noma 
  de nuevo le&oacute;n y esto es para / saber c&oacute;mo se vive la violencia 
  la frontera. &iquest;Me podr&iacute;a decir su nombre?<br>
  2 Reyna: Reyna<br>
  3 Joselyn: Reyna<br>
  4 Reyna: Reyna Alvarez<br>
  5 Joselyn: &iquest;Muy bien, su edad?<br>
  6 Reyna: Eh&#8230; / Treinta y seis<br>
  7 Joselyn: Treinta y seis, muy bien y /&iquest;Cu&aacute;l es su pa&iacute;s 
  de procedencia?<br>
  8 Reyna: Eh&#8230; Honduras <br>
  9 Joselyn: Honduras, muy bien.<br>
  10 Reyna: Si<br>
  11 Joselyn: Su &uacute;ltimo grado de estudios.<br>
  12 Reyna: Eh... / Sexto<br>
  13 Joselyn: &iexcl;Perd&oacute;n!<br>
  14 Reyna: Primaria pues <br>
  15 Joselyn: Primaria, &iexcl;ok! Eh&#8230;|| &iquest;Que trabajo desempe&ntilde;aba 
  en su pa&iacute;s?<br>
  16 Reyna: Mmm&#8230;/ Ama de casa <br>
  17 Joselyn: Ama de casa, <br>
  18 Reyna: Mmm<br>
  19 Joselyn: &iquest;Su estado civil.?<br>
  20 Reyna: Ah&#8230; / Soltera <br>
  21 Joselyn: Y/ bueno sobre su familia, tiene hijos<br>
  22 Reyna: No <br>
  23 Joselyn: No tiene hijos /<br>
  24 Reyna: No<br>
  25 Joselyn: &iexcl;Ok! Eh&#8230;. / &iquest;Hacia d&oacute;nde se dirige usted?.<br>
  26 Reyna: &iquest;C&oacute;mo se?<br>
  27 Joselyn: O sea hasta a d&oacute;nde quiere.<br>
  28 Reyna: A quedarme ac&aacute; <br>
  29 Joselyn: Aqu&iacute; se quiere quedar as&iacute; ok &iexcl;muy bien! <br>
  30 Reyna. Eh / si<br>
  31 Joselyn: &iquest;Cu&aacute;l fue su motivo de la migraci&oacute;n?<br>
  32 Reyna: Ah&#8230; || De migraci&oacute;n que yo haya salido de mi pa&iacute;s 
  / no hay trabajo y &lt;8 seg.&gt;mucha delincuencia<br>
  33 Joselyn: &iexcl;Ok!, muy bien ehh / Tiene alg&uacute;n familiar o alg&uacute;n 
  amigo que viva aqu&iacute;<br>
  34 Reyna: Eh / amigas mexicanas <br>
  35 Joselyn: amigas mexicanas <br>
  36 Reyna: Si<br>
  37 Joselyn: &iquest;Aqu&iacute; est&aacute;n?<br>
  38 Reyna: s&iacute; <br>
  39 Joselyn: aqu&iacute; en monterrey <br>
  40 Reyna: Si<br>
  41 Joselyn: o en otro <br>
  42 Reyna: una aqu&iacute; y otra en Tamaulipas<br>
  43 Joselyn: En Tamaulipas, <br>
  44 Reyna: Si <br>
  45 Joselyn: ok muy bien Ah... / Usted. &iquest;Qu&eacute;, qu&eacute; trabajo 
  es el que viene buscando aqu&iacute;?<br>
  46 Reyna: mm&#8230;|| Bueno / lo que sea <br>
  47 Joselyn: Lo que sea &iexcl;Ok!<br>
  48 Reyna: Si<br>
  49 Joselyn: &iquest;Y cu&aacute;ntas veces ha intentado migrar, es la primera 
  vez?<br>
  50 Reyna: Primera vez <br>
  51 Joselyn: Es la primera vez, entonces nunca ha sido deportada<br>
  52 Reyna: No<br>
  53 Joselyn:&iexcl;Ok! Ah ||Muy bien me podr&iacute;a platicar c&oacute;mo fue 
  su migraci&oacute;n, o sea qu&eacute; medio de transporte uso, que pa&iacute;ses 
  cruzo y cuantos d&iacute;as tardo en hacerlo.<br>
  54 Reyna: Mmm /<br>
  55 M3: &iquest;Que dificultades tuvo en su camino?<br>
  56 Joselyn: Aja.<br>
  57 Reyna: No, pues nada solo aguant&eacute; hambre / he sue&ntilde;o frio / 
  pues no de violencia nada emmm&#8230; || llegue bien entre bien primero por 
  Guatemala, ehh&#8230; / entre por la frontera de Saib&oacute; / luego Tenosique 
  y ah&iacute; hice mi tramite <br>
  58 Joselyn: Ok! Y cu&aacute;ntos d&iacute;as aproximadamente o cuanto tiempo 
  tardo <br>
  59 Reyna: Eh&#8230; / tres meses <br>
  60 Joselyn: Tres meses <br>
  61 Reyna: Eh si <br>
  62 Joselyn: Muy bien. Este &lt; 15 seg.&gt; Qu&eacute; tipo de violencias conoce 
  usted o sea bueno que haya en su pa&iacute;s <br>
  64 Reyna: Bueno / dependiendo cada quien tiene su&#8230;|| su historia <br>
  65 Joselyn: Aj&aacute; <br>
  66 Reyna: Si, para m&iacute; pues fue una amiga que no hizo algo / pero no puedo 
  decir<br>
  67 Joselyn: Ok muy bien no hay problema<br>
  68 Reyna: Si<br>
  69 Joselyn: Hablando de la violencia en la frontera, ha escuchado usted que 
  haya en otras partes o que tipo de violencia les hacen en la frontera.<br>
  70 Reyna: S&iacute; escuchado que hay mucha violencia / matan, secuestran.<br>
  71 Joselyn: En la frontera.<br>
  72 Reyna: En la frontera.<br>
  73 Joselyn: Ok! Muy bien. Ah&#8230;. / Usted est&aacute;, al momento que usted 
  decidi&oacute; venir para ac&aacute; est&aacute; consciente de las || agresiones 
  que pod&iacute;a usted pasar.<br>
  74 Reyna: En los que saliera por delante pero no, tranquilamente llegue<br>
  75 Joselyn: Qu&eacute; bueno muy bien<br>
  76 Reyna: Si<br>
  77 Joselyn: Este / y usted considera que vali&oacute; o vale la pena arriesgarse 
  <br>
  78 Reyna: S&iacute;<br>
  79 Joselyn: Si<br>
  80 Reyna: Si y uno solo si vale la pena <br>
  81 Joselyn: Muy bien {risas}<br>
  82 Reyna: S&iacute; {risas]<br>
  83 Joselyn: Eh / &iquest;Usted qu&eacute; medidas tomo para prevenir las agresiones 
  en la frontera?<br>
  84 Reyna: &iquest;C&oacute;mo que medidas?<br>
  85 Joselyn: Mmm || &lt;5 seg.&gt;Como se lo puedo explicar<br>
  86 M3: Como intento, como hizo para evitar que la trataran mal <br>
  87 Joselyn: Aja<br>
  88 M3: O que le hicieran algo malo<br>
  89 Reyna: Oh! O como, as&iacute; como tipo migraci&oacute;n algo as&iacute; 
  no<br>
  90 Joselyn: Aja<br>
  91 Reyna: No pues yo presente mi pasaporte<br>
  92 Joselyn: Ok!<br>
  93 Reyna: Solo en la de Guatemala namas e fui recibida ya de entrada en Guatemala 
  &#8211; M&eacute;xico fui rechazada pero igual me les di vuelta me tir&eacute; 
  por el monte yo sola y sali adelante<br>
  94 Joselyn: &iexcl;Ok! {risas}<br>
  95 Reyna: {risas} Si<br>
  96 Joselyn: Pero nunca le hicieron nada <br>
  97 Reyna: No (ac) no (ac) no (ac) no (ac) f<br>
  98 Joselyn: Los polic&iacute;as a usted de que la agarraran<br>
  99 Reyna: No (ac) no (ac) no (ac) no (ac) f nada tranquilamente<br>
  100 Joselyn: Que bueno muy bien, eh&#8230;. Muy bien bueno pues eso || es que 
  aqu&iacute; viene una pregunta que dice que, si nos pudiera compartir que agresiones 
  le sucedieron, pero nos comenta que no tuvo ninguna<br>
  101 Reyna: No<br>
  102 Joselyn: Ok, muy bien eh.. / &iquest;Y usted por qu&eacute; cree que exista 
  la violencia en la frontera hacia los migrantes?<br>
  103 Reyna: Pues || ni idea || como a m&iacute; no me paso nada pues no se todav&iacute;a.<br>
  104 Joselyn: Ok<br>
  105 Reyna: Si<br>
  106 Joselyn: &iquest;Usted que sugerencia dar&iacute;a a las personas que quieren 
  salir de su pa&iacute;s eh.. por cualquier motivo que sea?<br>
  107 Reyna: Que&#8230;que yo quiero decirles a ellos<br>
  108 Joselyn: Aja<br>
  109 Reyna: No, cada quien sabe || sus decisiones<br>
  110 Joselyn: Muy bien<br>
  111 Reyna: Mmmhh<br>
  112 Joselyn: Eh || &iquest;Y usted cree que el problema de la violencia pueda 
  solucionarse?<br>
  113 Reyna: Si, si puede<br>
  114 Joselyn: Si, si puede<br>
  115 Reyna: si<br>
  116 Joselyn: Aja, como piensa usted<br>
  117 Reyna: Yo pienso que&#8230; / que hace falta m&aacute;s eh&#8230;.mmm || 
  m&aacute;s este refuerzo policial / m&aacute;s autoridad / m&aacute;s respeto 
  pienso yo<br>
  118 Joselyn: Ok, muy bien. Este || &iquest;Y usted cree que el problema de la 
  migraci&oacute;n pueda solucionarse tambi&eacute;n?<br>
  119 Reyna: Eso no se<br>
  120 Joselyn: Eso lo ve m&aacute;s dif&iacute;cil {risas}<br>
  121 Reyna: Si {risas}<br>
  122 Joselyn: Muy bien / &iquest;Y si tuviera la oportunidad de ayudar otros 
  migrantes usted lo har&iacute;a?<br>
  123 Reyna: Mmm&#8230; / si lo har&iacute;a<br>
  124 Joselyn: Si lo har&iacute;a<br>
  125 Reyna: Si<br>
  126 Joselyn: Muy bien. Y algo m&aacute;s que quiera decir para la entrevista<br>
  127 Reyna: No / solamente<br>
  128 Joselyn: Solamente es todo<br>
  129 Reyna: Si<br>
  130 Joselyn: Ok, muy bien. &iexcl;Muchas gracias!<br>
  <br>
  <br />
  <b>Fin.</b> 
<p><b>Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article> 
<article class="entrevista_8" id="entrevista8"> 
<h2>Conversaci&oacute;n realizada el 12 de Marzo a las 6:00pm</h2>
<div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <audio controls controlsList="nodownload"> 
    <!-- poster="../../img/Log.jpg"-->
    <source src="../../aud/VF_Entrevista08.mp3" type="audio/mp3"> </audio> </div>
</div>
<p><b>Tiempo total de la entrevista: </b>14:13 minutos</p>
<p><b>Ficha t�cnica: </b></p>
<p> Sujeto de sexo masculino, no menciona su edad, procedente de Estados Unidos 
  y nacido en Reynosa, Tamaulipas, estado civil no descrito, pero tiene hijos 
  y no menciona cantidad ni sexo, no comenta su ultimo grado de estudios y no 
  dice un trabajo en espec&iacute;fico solo menciona que ayudaba bajando el mandado 
  de los camiones.<br>
  El motivo de la migraci&oacute;n se debi&oacute; a falta de papeles de Estados 
  Unidos a Monterrey.<br>
  El lugar de la entrevista es en el &#8220;Comedor del Padre Infante&#8221; donde 
  se encuentran el entrevistado identificado como Robanivan (Se&ntilde;or) la 
  entrevistadora (Joselyn) y otra persona m&aacute;s (M3).<br>
</p>
<p><b>Simbolog�a que se utiliza en la transliteraci�n: </b></p>
<p>Amparo Tus�n (1997: 146 - 148), en su libro "An�lisis de la conversaci�n" presenta 
  una lista de simbolog�a que permite realizar una transliteraci�n m�s flexible 
  basada en la de Pairat�, de la cual se extraen para esta entrevista, los siguientes 
  s�mbolos</p>
<br />
<p>Nasalizaci�n: e</p>
<p>Abertura: h</p>
<p>Ritmo acelerado: ac</p>
<p>Ritmo lento: le</p>
<p>Interrogaci�n, pregunta: �?</p>
<p>Entonaci�n exclamativa: �!</p>
<p>Tono ascendente: /</p>
<p>Tono descendente: \</p>
<p>Corte abrupto en medio de una palabra: :::-</p>
<p>Pausa breve: |</p>
<p>Pausa mediana: ||</p>
<p>Pausa larga indicando segundos: "n�m. de segs."</p>
<p>�nfasis: subr</p>
<p>Mayor �nfasis: MAY�S</p>
<p>Alargamiento de un sonido: ::</p>
<p>Piano, dicho en voz baja: p</p>
<p>Pian�simo, dicho en voz muy baja: pp</p>
<p>corte dicho en voz alta: f</p>
<p>Fort�simo, dicho en voz m�s alta: ff</p>
<p>Solapamiento de un turno: ==</p>
<p>Intervenci�n de turnos: A- o B-</p>
<p>Fen�menos no l�xicos: [ ]</p>
<p>Marcador de fronteras en las que se produce alg�n fen�meno: {} 
<p>Palabra ininteligible o dudosa: ()</p>
<p>Para se�alar algo importante para el an�lisis: �></p>
<p>Movimiento: m </p>
<p>1 Se&ntilde;or: Yo trabaje aqu&iacute; hace como unos cinco o seis a&ntilde;os<br>
  2 Joselyn: Aqu&iacute; en M&eacute;xico<br>
  3 Se&ntilde;or: Si aqu&iacute;<br>
  4 Joselyn: &iquest;O aqu&iacute; en Monterrey?<br>
  5 Se&ntilde;or: Si aqu&iacute;<br>
  6 Joselyn Aja <br>
  7 Se&ntilde;or: Y aqu&iacute; llega una comida que viene de las iglesias <br>
  8 Joselyn: Aja<br>
  9 Se&ntilde;or: Y || de las c&oacute;mo se llama /bde las escuelas<br>
  10 Joselyn: Aja<br>
  11 Se&ntilde;or: &iexcl;Ay! B&oacute;rralo \ b&oacute;rralo! <br>
  12 Joselyn: &iquest;Porque?<br>
  13 Se&ntilde;or: Porque es cierto / llega de las escuelas y eso dan de comer 
  donde ta&acute; donde esta lo que uno trae lo que uno brinda<br>
  14 Joselyn: Si<br>
  15 Se&ntilde;or: A ver donde esta, es mentira nunca ha habido ni te dice, cuando 
  yo estaba avisado<br>
  16 Joselyn: F&iacute;jese que nosotros en las escuelas / o a veces en los trabajos<br>
  17 Se&ntilde;or: NO, NO, NO, NO, (f) no si a escuelas no lastima no me acuerdo 
  y voy yo a las escuelas y traemos bastante comida &oacute;sea por vaporeras 
  llenas y todo y es lo que se les da a la gente<br>
  18 Joselyn: &Oacute;sea si se les da la comida<br>
  19 Se&ntilde;or: Si de las escuelas, pero no la que donde esta lo que llega 
  o todo lo que tu traes<br>
  20 Joselyn: Si es lo que le iba comentar muchas veces en los trabajos / o en 
  las escuelas nos dicen de que/<br>
  21 Se&ntilde;or: No es verdad yo trabaje tantos a&ntilde;os / y nunca me pagaron 
  ni un peso eso si ni un peso nada<br>
  22 Joselyn: Bueno <br>
  23 Se&ntilde;or: Pero no no no yo se que me van a <br>
  24 Joselyn: &iexcl;Nombre no diga eso! <br>
  25 Se&ntilde;or: Si yo se que el padre/ puede decir el padre dice cosas iguales<br>
  26 Joselyn: Aqu&iacute; <br>
  27 Se&ntilde;or: Si, &eacute;l dice igual que tu igual que yo<br>
  28 Joselyn: Bueno / ya puedo empezar con la entrevista<br>
  29 Se&ntilde;or: A no todav&iacute;a no {risas}<br>
  30 Joselyn: No {risas} Es unas preguntas que yo le voy hacer y ya usted me las 
  responde<br>
  31 Se&ntilde;or: Bueno pos<br>
  31 Joselyn: Nombre es que no , nadamas (f)<br>
  31 Se&ntilde;or: No es que <br>
  32 Joselyn: No lo van a ver es su pura voz es el audio no lo estamos grabando 
  su cara ni nada es el puro audio (f) si quiera ahorita se la ense&ntilde;amos 
  para que vea, muy bien &iquest;Cu&aacute;l es su nombre?<br>
  33 Se&ntilde;or: Robanivan<br>
  34 Joselyn: &iquest;Cu&aacute;l es su nombre?<br>
  35 Se&ntilde;or: Roban<br>
  36 Joselyn: {risas}<br>
  37 Se&ntilde;or: Ira yo he bajado camionetas de donde llega mandado yo yo yo 
  yo hace a&ntilde;os yo bajo camionetas yo nunca y yo lo hac&iacute;a porque 
  pensaba que era ||<br>
  38 Joselyn: Pensaba que era para ustedes<br>
  39 Se&ntilde;or: Si<br>
  40 Joselyn: Bueno<br>
  41 Se&ntilde;or: Cuando me di cuenta || es mas yo hasta estoy integrado a ir 
  al pan y todo a mi me dan de cr&eacute;dito y todo yo voy / pero no eso no me 
  gusta yo no soy apto para eso / NO, NO, NO, no deber&aacute;s de ah&iacute; 
  mi yo brindaba mi apoyo porque era voluntario venia de Estados Unidos / yo si 
  cre&iacute;a para ayudar a mis amigos pero ya cuando vi mira es mentira donde 
  esta mira nadamas f&iacute;jate lo que dan de comer <br>
  42 Joselyn: A ver d&iacute;game <br>
  43 Se&ntilde;or: &iquest;Quiere grabarla usted la comida? Valla venga a medio 
  d&iacute;a la comida es la que dan en las escuelas que regalan y toda bien fr&iacute;a 
  y toda<br>
  44 Joselyn: Toda fea<br>
  45 Se&ntilde;or: Verdad cierto te dan y otra los panes m&aacute;s horribles 
  que est&aacute;n bien viejos\<br>
  46 Joselyn: Ya todos duros<br>
  47 Se&ntilde;or: Estoy diciendo verdad<br>
  48 Joselyn: No si, si le creo<br>
  49 Se&ntilde;or: Tiene negocio a parte y me van a partir {risas} si yo hablo 
  no no / no si yo tengo a&ntilde;os yo conozco como<br>
  50 Joselyn: Bueno &iquest;Usted hacia donde se dirige?<br>
  51 Se&ntilde;or: Hacia Estados Unidos<br>
  52 Joselyn: A Estados Unidos &iquest;Y cu&aacute;l es su motivo de la migraci&oacute;n?<br>
  53 Se&ntilde;or: Papeleo namas / no pude pasar || y todo<br>
  54 Joselyn: No, Pero usted &iquest;por qu&eacute; se quiere ir a Estados Unidos?<br>
  55 Se&ntilde;or: A no yo siempre he&#8230;/ estado toda mi vida halla<br>
  56 Joselyn: Ah usted estaba halla<br>
  57 Se&ntilde;or: Toda mi vida <br>
  58 Joselyn: Y lo regresaron, Ok<br>
  59 M3: por falta de papeles<br>
  60 Joselyn: Por falta de papeles<br>
  61 Se&ntilde;or: Toda mi vida yo nac&iacute; en Reynosa, Tamaulipas<br>
  62 Joselyn: &iexcl;Ah&#8230; /! usted es de Reynosa &iexcl;Muy bien! &iquest;Y 
  tiene alguna / alg&uacute;n familiar?<br>
  63 Se&ntilde;or: Aqu&iacute; no<br>
  64 Joselyn: &iquest;O alg&uacute;n amigo que viva en Estados Unidos?<br>
  65 Se&ntilde;or: Yo toda mi familia<br>
  66 Joselyn: Ah&#8230;/ tiene a toda su familia usted all&aacute; nada m&aacute;s 
  a usted lo regresaron<br>
  67 Se&ntilde;or: No saben que estoy aqu&iacute;<br>
  68 Joselyn: &iexcl;Ah&#8230;/! ellos no saben<br>
  69 Se&ntilde;or: No<br>
  70 M3: Ellos donde creen que esta<br>
  71 Se&ntilde;or: ?Muerto<br>
  72 Joselyn: Y &#8230;.&iexcl;ay no!{expresi&oacute;n de impacto}<br>
  73 Se&ntilde;or: Si, porque halla hay clikas muy grandes &oacute;sea y tambi&eacute;n 
  soy grande soy una persona ya grande y soy respetuoso yo yo ordeno<br>
  74 Joselyn: Muy bien / &iquest;Y&#8230;. / cuantas veces ha sido deportado usted?<br>
  75 Se&ntilde;or: Nunca, primera<br>
  76 Joselyn: Nunca ha sido la primera vez &iquest;Y cuantos a&ntilde;os ten&iacute;a 
  ah&iacute; viviendo en Estados Unidos/ aproximadamente?<br>
  77 Se&ntilde;or: 30<br>
  78 Joselyn: 30 a&ntilde;os &iexcl;Ya ten&iacute;a mucho! Ah&#8230;/<br>
  79 Se&ntilde;or: Toda mi vida<br>
  80 Joselyn: Muy bien / A ver <br>
  81 Se&ntilde;or: Por eso no conozco aqu&iacute; el respeto mexicano || no conozco 
  / no conozco<br>
  82 Joselyn: Usted que sugerencia les dar&iacute;a a las personas que quieren 
  salir de su pa&iacute;s || este&#8230;/<br>
  83 Se&ntilde;or: Que no lo hagan<br>
  84 Joselyn: Que no lo hagan / me dice / que no vale la pena arriesgarse ||<br>
  85 Se&ntilde;or: Lo que tu ganas all&aacute; y aqu&iacute; es lo mismo || es 
  un peso es dinero / horrible te denigran y<br>
  86 Joselyn: Ok / ehh&#8230;. /<br>
  87 Se&ntilde;or: No yo digo enserio<br>
  88 Joselyn: No, no, no si<br>
  89 Se&ntilde;or: Bueno yo digo<br>
  90 Joselyn: Si usted tuviera la oportunidad de ayudar otros migrantes &iquest;Usted 
  lo har&iacute;a?<br>
  91 Se&ntilde;or: &iexcl;Ah&#8230;/! toda mi vida les he dado mi vida yo ten&iacute;a 
  rancho<br>
  92 Joselyn: &iexcl;Ah&#8230;! Usted ten&iacute;a rancho<br>
  93 Se&ntilde;or: Tengo rancho<br>
  94 Joselyn: Ok, / &iquest;Y algo m&aacute;s que quiera decir?<br>
  95 Se&ntilde;or: Los amo a todos || &iexcl;Mexicanos(f)! o &iexcl;Ameri&#8230;.! 
  lo que sea<br>
  96 Joselyn: Americanos {risas}<br>
  97 Se&ntilde;or: Lo que sea ayudo siempre ayudar mi madre<br>
  98 Joselyn: Ok<br>
  99 Se&ntilde;or: Bueno tenemos || yo tengo como unos veintitantos mi padre tiene 
  como unos sesentaintos<br>
  100 Joselyn: Ok, muy bien. &iexcl;Muchas gracias!<br>
  101 Se&ntilde;or: No no no no (f)&#8230; {llorando}<br>
  102 Joselyn: No llore<br>
  103 Se&ntilde;or: Todos mis hijos \ || {llorando} crees que no llorar<br>
  104 Joselyn: Si<br>
  105 Se&ntilde;or: Tu serias mi hija y sabes lo que duele<br>
  106 Joselyn: Si<br>
  107 Se&ntilde;or: Abandonarte, as&iacute; como eres &lt; 20 seg&gt; yo soy persona 
  honesta<br>
  108 Joselyn: Si /, si se ve<br>
  109 Se&ntilde;or: &iexcl;NO, NO, &iexcl;NO! soy persona honesta nunca jam&aacute;s 
  he robado || toda mi vida como visto no robo<br>
  110 Joselyn: &iexcl;Que buen!<br>
  111 Se&ntilde;or: Y darle gracias a dios que as&iacute; vive as&iacute; vives 
  trabajas || vale mucho honradamente tener todo el poder o halla no tienes poder 
  si no tienes una camioneta || haya tienes que mover siempre esta todo el gobierno 
  adentro es mentira aquel que dice vivo y soy rico no es cierto todo el tiempo 
  estas bien embroncado con el gobierno perdonar disculpar todo pero yo soy un 
  buen mexicano tengo buenas cosas de hecho tengo negocio pero no lo hago no me 
  deja el gobierno americano yo soy d&iacute;selo la verdad dile a que no el que 
  el sue&ntilde;o americano y todo que van a creer que van a llegar puros verde 
  no es mentira <br>
  112 Joselyn: No es as&iacute;<br>
  113 Se&ntilde;or: No reyna , no, no no es mentira || es mentira / es mentira 
  todos esos pesos bueno yo quiero que sepa usted tiene halla familia y que le 
  platique lo que es un ciudadano como esta bien {risas} a todo lo que <br>
  114 Joselyn: Bueno<br>
  115 Se&ntilde;or: No puedo decir / no voy a decir m&aacute;s<br>
  116 Joselyn: NO,NO, no importa lo que usted quiera decir est&aacute; bien<br>
  117 Se&ntilde;or: No es que es verdad / para que van con el sue&ntilde;o americano 
  el sue&ntilde;o americano<br>
  118 Joselyn: Literal es un sue&ntilde;o {risas}<br>
  119 Se&ntilde;or: Yo la vida y yo/ yo soy de Reynosa, Tamaulipas<br>
  120 Joselyn: Si<br>
  121 Se&ntilde;or: Y yo he vivido ah&iacute; he vivido lo que es una mierda / 
  lo que son || y eso que no tomo tanto como otros y si a veces toman || pero 
  los que toman son literal los que toman son por hacen otro ganan su m&aacute;s 
  dinero<br>
  122 Joselyn: Bueno<br>
  123 Se&ntilde;or: No puedo dec&iacute;rtelo equis cosa<br>
  124 Joselyn: No, no importa || Muy bien, bueno vamos a seguir con las entrevistas<br>
  125 Se&ntilde;or: NO, NO, NO, no sue&ntilde;es con eso<br>
  126 Joselyn: No, no yo no<br>
  127 Se&ntilde;or: Ni le digas nada no porque todos sue&ntilde;an / ira vienen 
  de tan lejos y|| si yo les digo lo que pasa / mueren || pero d&eacute;jalos 
  que vivan <br>
  128 Joselyn: &iexcl;Pues si!<br>
  129 Se&ntilde;or: Que vivan lo que es una denigraci&oacute;n sabes que || &iexcl;Usted 
  es bien bonita mexicana! Hay otras || que son m&aacute;s o menos / mexicoamericanas 
  / y tan m&aacute;s bonitas y esas te mandan a la jodida<br>
  130 Joselyn: {risas} Si<br>
  131 Se&ntilde;or: &iexcl;No!<br>
  132 Joselyn: si {risas}<br>
  133 Se&ntilde;or: &iexcl;En verdad!<br>
  134 Joselyn: No si, yo se<br>
  135 Se&ntilde;or: Por tener un novio nomas as&iacute; eh&#8230;<br>
  136 Joselyn: Ya se creen la gran cosa<br>
  137 Se&ntilde;or: Ellas son americanas, || no pero tu traes la sangre bonita 
  / y, y como le vas a representar ella es m&aacute;s bonita mira / es blanca 
  <br>
  138 Joselyn: {risas}<br>
  139 Se&ntilde;or: No de verdad / ella si gana<br>
  140 Joselyn: Si gana {risas}<br>
  141 Se&ntilde;or: Si no, no si de verdad ella denigra a nosotros<br>
  142 Joselyn: Si, no nos quieren {risas}<br>
  143 Se&ntilde;or: Ella denigra a nosotros ||por ser de color<br>
  144 Joselyn: Ni modo<br>
  145 Se&ntilde;or: Ni a ella mira, ella es aperlada es hermosa <br>
  146 Joselyn: {risas}<br>
  147 Se&ntilde;or: No, no, no, no si de verdad por dios en los bares los pase 
  uno paga uno / yo soy mexicano y me gusta mucho la gente /mi gente / voy veo 
  y ellos me hablan bien / pero no / no hablo bien / con / pero debo de permitir 
  primero hablar con las g&uuml;eritas / tengo que pasar por ella / no eh&#8230;/<br>
  148 Joselyn: {risas}<br>
  149 Se&ntilde;or: Con usted no<br>
  150 Joselyn: &iquest;Conmigo no?<br>
  151 Se&ntilde;or: No, no, no, no (f)<br>
  152 Joselyn: Porque soy negra {risas}<br>
  153 Se&ntilde;or: No, no, no, no (f) no porque eres negra<br>
  154 Joselyn: {risas} (ff)<br>
  155 Se&ntilde;or: Usted d&iacute;gales ah&iacute; a ver si es cierto, no yo 
  / yo soy un / mira ahora que me vine todav&iacute;a le dije / mi hermana es 
  Dra. <br>
  156 Joselyn: &iexcl;Ah ok!<br>
  157 Se&ntilde;or: Mi hermana<br>
  158 Joselyn: &iquest;Y vive all&aacute;? O vive aquie<br>
  159 Se&ntilde;or: Si, en San Antonio<br>
  160 Joselyn: En San Antonio<br>
  161 Se&ntilde;or: Mi hermana me curo / y todo me trajo medicamento <br>
  162 Joselyn: &iexcl;Ah ok!<br>
  163 Se&ntilde;or: Mi hermana me dec&iacute;a || t&uacute; no puedes / t&uacute; 
  no puedes, t&uacute; no puedes (f) a ti no te van a llevar te vas a quedar, 
  pero es cierto / no es cierto no te vas a quedar/ namas te dan el alma te dicen 
  || como se llama pa&acute; que no te mueras || mira la g&uuml;erita / ella si 
  puede vivir all&aacute;<br>
  164 Joselyn: Si verdad <br>
  165 Se&ntilde;or: &iexcl;Oiga! /se puede ir usted a Estados Unidos<br>
  166 Joselyn: {risas}<br>
  167 M3: Si paso <br>
  168 Se&ntilde;or: Eh&#8230; / &iexcl;No en verdad! (f) es cierto/ y m&aacute;s 
  si masticas bien el ingles ||m&aacute;s que nada<br>
  169 Joselyn: Nada nada ni poquito<br>
  170 Se&ntilde;or: Ella si<br>
  171 Joselyn: Ella tambi&eacute;n<br>
  172 Se&ntilde;or: &iexcl;Si! bueno t&uacute; no<br>
  173 Joselyn: {risas} nimodo aqu&iacute; me quedo (f)<br>
  174 Se&ntilde;or: No, es que tu tienes otro || como yo / yo / yo soy de Guatemala 
  &iquest;De donde es usted?<br>
  175 Joselyn: &iexcl;De Guatemala! No digo que de Reynosa (f)<br>
  176 Se&ntilde;or: No, pero usted parece<br>
  177 Joselyn: &iexcl;Ah yo! No yo soy de aqu&iacute;<br>
  178 Se&ntilde;or: Pero dile que aceptarte all&aacute;<br>
  179 Joselyn: {risas} (f)<br>
  180 Se&ntilde;or: Dile que aceptarte<br>
  181 Joselyn: A ver no, no me aceptan<br>
  182 Se&ntilde;or: No, no, no, no, no gringos si te denigran / te denigran<br>
  183 Joselyn: Los peores, bueno<br>
  184 Se&ntilde;or: Mira ella es linda, ella es m&aacute;s, / ella pasa<br>
  185 Joselyn: {risas}<br>
  186 Se&ntilde;or: No si
<p><b>Fin.</b> </p>
<p><b> Referencias de la simbolog�a: </b></p>
<p>Tus�n Valls, A. (1997). An�lisis de la conversaci�n. Editorial Ariel.</p>
<br />
</article> </section> <footer> 
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