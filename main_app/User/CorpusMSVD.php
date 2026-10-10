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
			<h1>CORPUS MSVD (Mujeres Sobrevivientes de Violencia Doméstica)</h1>
		</article>

		<article class="MSVD">
			<hr class="division" size="4" color="#6914OF" />
			<p class="pad-top">Dentro del corpus “Mujeres sobrevivientes de violencia doméstica (MSVD)” se localizan conversaciones con mujeres que experimentaron diversos tipos de violencia y debido a lo anterior decidieron separarse de su pareja.</p>
			<p>Hasta el momento se cuenta con un número de dos entrevistas donde: </p>
			<li>El rango de edad de las participantes es de 45 a 54 años de edad.</li>
			<li>Dentro de los relatos predomina la violencia física.</li>
			<li>La realización de las mismas fue durante el mes de Enero del 2017.</li>
			<p class="pad-buttom">Las conversaciones (audios) han sido transcritas y marcadas con simbología que propone Amparo Tusón Valls (1997), y puede ser localizada dentro de este mismo vínculo. En cada una de las transliteraciones se brinda una explicación más extensa.</p>
			<hr class="division" size="4" color="#6914OF" />
		</article>	

		<article class="acceso_rapido">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<a href="#entrevista1"><span class="icon-sound">Ir a Entrevista 1</span></a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<a href="#entrevista2"><span class="icon-sound">Ir a Entrevista 2</span></a>
				</div>
			</div>
		</article>

		<article class="entrevista_1" id="entrevista1">
			<h2>Conversación 01 realizada el 22 de Enero del 2017 a las 6.00 pm</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/MSVD_Entrevista01.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>18:47 minutos</p><br />
			<p>Entrevista realizada por Esther Anahí Piña Ramirez</p>
			<p>Licenciada en psicología</p><br />
			<p>Deacuerdo a la ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio.</p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino; 45 años de edad; reside en el municipio de Salinas Victoria, del Estado de Nuevo León México; trabaja en una fábrica de focos; duró 17 años de casada y decidió separarse por violencia; tiene 13 años de separación; es madre de tres hijos mayores de edad; afirma haber sido alcohólica y encontrarse actualmente bajo tratamiento en AA.; mientras vivió con su pareja no trabajó fuera del hogar; en su relato expresa haber experimentado violencia física.</p>
			<p>Para proteger la identidad de la víctima se ha omitido su nombre y se ha designado en la transcripción como <b>M7</b>, también se omiten nombres de su hijo designado como <b>H1</b> y el de su nuera como <b>N1</b>.</p>
			<p>El lugar de la entrevista es una sala de un domicilio particular donde solo se encuentran la entrevistada (<b>M7</b>) y la entrevistadora (<b>E</b>).</p><br />
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
			
			<p><b>1 </b>E: Bueno iniciamos con el cuestionario de // para víctimas de violencia e:: // aquí donde está viviendo ¿qué municipio es?</p>
			<p><b>2 </b>M7: Es // pertenece a Salinas Victoria</p>
			<p><b>3 </b>E: Ok  ¿Qué edad tiene?</p>
			<p><b>4 </b>M7: cuarenta y cinco años</p>
			<p><b>5 </b>E: Y ¿Cuál es su profesión?</p>
			<p><b>6 </b>M7: Pues ahorita estoy trabajando en una fábrica llamada Osmar viene siendo como de fotos</p>
			<p><b>7 </b>E: Ok e:: // ¿es usted casada?</p>
			<p><b>8 </b>M7: Casada emm:: // sí y o sea casada estoy separada ya tengo como muchos años separada</p>
			<p><b>9 </b>E: OK ¿Cuánto tiempo llevó con la relación / de casada?</p>
			<p><b>10 </b>M7: diecisiete años</p>
			<p><b>11 </b>E: y ¿separada cuánto tiempo tiene?</p>
			<p><b>12 </b>M7: Pues serán <"9 segs."> si como trece años ya</p>
			<p><b>13 </b>E: ¿cuántos hijos tienen?</p>
			<p><b>14 </b>M7: tres // tres hombres</p> 
			<p><b>15 </b>E: ¿De qué edad son?</p>
			<p><b>16 </b>M7: vienen siendo de treinta I de veintiséis y de veinticuatro</p> 
			<p><b>17 </b>E: ¿y sus tres hijos son casados?</p>
			<p><b>18 </b>M7: Los tres sí</p>
			<p><b>19 </b>E: Ok, ¿Cómo fue? // no sé si usted recuerde su infancia.</p>
			<p><b>20 </b>M7: Pues mi infancia fue un poco así como que amm:: <"3 segs."> como yo era muy // este // rebelde verdad con mis papás y si entonces el trato no fue como muy bien que digamos o sea | les daba motivos para que me dieran de repente manasos que mi mamá en la cocina estando me aventaba con lo que fuera porque en el momento ese pues yo le hacía a mi mamá travesuras o así verdad ya hasta cuando acordaba me aventaba hasta con el palo de las tortillas</p>
			<p><b>21 </b>E: [risa] ok y ¿Usted recuerda cómo era el matrimonio de sus papás?</p>
			<p><b>22 </b>M7: Sí // pues también fue un matrimonio que también hubo así pleitos veda pero o así pleitos por así decir como leves nono así como lo de uno veda.</p>
			<p><b>23 </b>E: Ok ¿Nunca vio a lo mejor golpes o algo entre sus padres?</p>
			<p><b>24 </b>M7: ¡Sí una ocasión! nada más</p>
			<p><b>25 </b>E: ¿Qué fue lo que usted hizo?</p>
			<p><b>26 </b>M7: Pues yo oí // ee:: // yo oí y este // me levanté porque me acuerdo que yo estaba acostada tenía si me acuerdo que si yo tenía como unos nueve años y yo estaba acostada y me levanté oí como que se estaban como que peleando y me asomé y eran mis papás y ya para cuando me asomé -no pues que nada-  y así pero luego vi que había ahí como una como una este que mi papá había agarrado una cortina o sea el palo del de la cortina estaba doblado caída la cortina esa y no se si no se cómo fue que estaba caída doblada si mi papá la jaló o mi mamá por querer agarrarse de ahí quien sabe la verdad</p>
			<p><b>27 </b>ee:: ok e // ¿usted recuerda si sus padres le inculcaron alguna educación o le brindaron algo con respecto a cómo elegir a una pareja?</p>
			<p><b>28 </b>M7: ¡No! no nunca</p>
			<p><b>29 </b>E: Y ¿Qué educación le dieron con respecto al rol de cómo debe desempeñar una mujer en la sociedad?</p>
			<p><b>30 </b>M7: ¿Cómo?</p>
			<p><b>31 </b>E: o sea sí que tiene que ser por ejemplo ama de casa o hacerle caso al esposo o sea ¿Cómo le enseñaron esa educación sus papás a usted? / si tiene que trabajar / o cómo tiene que tratar usted a su esposo</p>
			<p><b>32 </b>M7: No de hecho yo nunca trabajé si / de muchacha nunca trabajé verdad / pero este mi papá pues no mi papá no era así que se metiera así con uno a decirnos nada la que si era mi mamá que pues cuando yo me iba a casar que pues que me iba a casar y que me iba a tomar y que pues tenía que que atender al hombre estar en la casa al pendiente que cuando los niños que todo eso verdad</p>
			<p><b>33 </b>E: Ok y ¿usted les transmitió esa enseñanza a sus hijos? O ¿no les guio alguna enseñanza?</p>
			<p><b>34 </b>M7: No Tampoco yo nada más les decía que el día que se casaran ellos que hicieran sus vidas quería que se buscaran a una mujer así verdad este pues con la que se llevaran bien y todo pero pues no</p>
			<p><b>35 </b>E: Y ¿usted ha visto mejoras en cuanto a eso que sus hijos le hicieron caso en encontrar a una mujer adecuada?</p>
			<p><b>36 </b>M7: Si pues de hecho si pero ya vez que como quiera vino un fracaso de uno de mis hijos el divorcio de H1 mi hijo este y con n1</p>
			<p><b>37 </b>E: Ok. Y ¿Qué piensa usted sobre el divorcio?</p>
			<p><b>38 </b>M7: Pues no que pues uno se casa pensando que pues todo el tiempo va a ser para siempre veda pero desgraciada mente nono es así</p>
			<p><b>39 </b>E: Ok. ¿Qué piensa de las mujeres divorciadas o las madres solteras?</p>
			<p><b>40 </b>M7: ¿Qué pienso de las madres solteras? Pues no que pues de las divorciadas este pues pienso que es que como ahí en el trabajo has de cuenta que la mayoría todas somos separadas o divorciadas veda y todas pues casi la mayoría por los mismos motivos por ínter // ¿cómo se dice? ¿familiar? ¿cómo se dice?</p>
			<p><b>41 </b>E: Como conflictos por problemas de violencia</p>
			<p><b>42 </b>M7: Sí igual o sea que -no ¿por qué estás divorciada tú? ¿Por qué te divorciaste? no pues porque mi esposo era esto que si lo otro problemas así como te dije familiares / así intrafamiliar así / todo de golpes</p>
			<p><b>43 </b>E: Ok / bueno y ya con su opinión dígame ¿cuál considera usted que sería una causa que provoque un divorcio / o la separación de relación de pareja?</p>
			<p><b>44 </b>M7: Los maltratos / los maltratos hacia uno</p>
			<p><b>45 </b>E: Ok / y ¿usted qué piensa de la violencia?</p>
			<p><b>46 </b>M7: pues que no / o sea / como por decir yo he estado en ocasiones así verdad de violencia y o sea que no es buena porque esa ya no es vida estar así verdad / una pareja por decir estar viviendo con golpes todo el tiempo / pues no es vida</p>
			<p><b>47 </b>E: Ok y ¿considera que es correcto que su pareja le grite o le pegue por cualquier cosa?</p>
			<p><b>48 </b>M7: No / por nada / de hecho no debe de pegarle la pareja a uno por ningún motivo, lo ideal es hablarlo verdad, pero pues no</p>
			<p><b>49 </b>E: Ok y ¿usted cómo lo hablaría o antes cuando vivió esto de la violencia lo habló con su esposo o nada más trató de que él no la golpeara?</p>
			<p><b>50 </b>M7: Sí / no / nunca lo hablaba o sea siempre él / sus reacciones eran así los golpes y hasta ahí nada más</p>
			<p><b>51 </b>E: Ok ¿cree que una mujer pueda darse cuenta de que es víctima de violencia por parte de su pareja?</p>
			<p><b>52 </b>M7: claro que sí</p>
			<p><b>53 </b>E: Ok ¿Por qué?</p>
			<p><b>54 </b>M7: Pues porque / desde que en un  principio uno deja que el hombre te pegue haz de cuenta que así vas a estar que no le pones un alto / verdad a esa primera agresión / entonces esos ya no como dicen / ya no / como que se enmañan y te quieren estar golpeando todo el tiempo</p>
			<p><b>55 </b>E: Ok y ¿qué opina de aquellas mujeres que dejan que su pareja las lastime de cualquier forma?</p>
			<p><b>56 </b>M7: No pues yo personas que conozco este yo les digo les platico mi experiencia les platico como viví toda mi vida todo ese tiempo golpeada por todo y por nada este que pues también desgraciadamente eso este // me llevo pues también a lo del alcohol verdad al alcoholismo este yo les digo a ellas que a estas horas del partido ¡y les digo a estas alturas del partido uno ya no se debe dejar golpear! Que eso no pues que no es que mis hijos y que por mis hijos eso es una vil mentira por los hijos no se puede estar dejando golpear uno</p>
			<p><b>57 </b>E: Ok / y con respecto al alcoholismo ahorita aún no está aplicando o ya lo dejo</p>
			<p><b>58 </b>M7: No / yo todavía estoy / yo pertenezco a un grupo de alcohólicos anónimos / porque después de mi separación yo me / me quise / me // me enfoqué en eso verdad en las bebidas / a me estaba hasta que toqué fondo / entonces vi que ahí yo también tenía ya otro problema verdad / entonces busqué la ayuda / y se me dió hasta la fecha ya tengo dos años en doble A</p>
			<p><b>59 </b>E: Ok ç/ y ¿cree que hay muchas mujeres que viven violencia en sus hogares?</p>
			<p><b>60 </b>M7: Si</p>
			<p><b>61 </b>E: ¿conoce a diferentes personas que le han contado respecto a lo que viven?</p>
			<p><b>62 </b>M7: SI / conozco a barias de mi anterior trabajo / había una muchacha que llegaba moretoniada y pues no faltaba que le preguntara y yo le decía -¿Qué te pasó? / no es que me caí / no es que / y yo ¡ay! Le digo esa yo la tengo o sea  puras mentiras / no es cierto / tu esposo te pegó / verdad ¿por qué dejas que te golpee? A ver ¿por qué dejas que te golpee si ya no debe de permitirse eso? O sea nunca se ha de permitido verdad / pero yo ya vi todo eso / entonces yo le digo por qué dejas que te golpee / si tú trabajas / si tú le ayudas en esto / en lo otro / ¿por qué? / nada más porque llegaste tarde / no es que llegue tarde porque esto y que el otro y ya venían los golpes y todo eso</p>
			<p><b>63 </b>E: Y ¿usted porque permitía que su esposo la golpeara?</p>
			<p><b>64 </b>M7: o sea no lo permitía / yo también a veces trataba de evitarlo / de evitar los golpes / pero él cómo era / también tenía problemas de lo del alcoholismo / no entendía razones / él no quería escucharte / no quería hablar nada / él nada más se iba sobre los golpes y ya</p>
			<p><b>65 </b>E: Ok ¿Y usted cree que hay algo que le haya impactado o marcado en su relación de pareja o de las relaciones de pareja de sus amigas? algo que le impactó respecto a la violencia</p>
			<p><b>66 </b>M7: Pues puedo decir / por ejemplo a mi pues cuando dormí en dos ocasiones con mi esposo / por el pleito que tuvimos que me agarró a golpes / y yo me quería salir de la casa y no me dejaba / entonces él agarraba los cuchillos y me acostaba con él a un lado / o sea él me decía que me acostara con él en un lado de la cama y haz de cuenta que unos cuchillos a un lado / si yo trataba de moverme / de salir me ahí me iba él a querer herir verdad / yo le creía porque si de golpes y patadas me trataba entonces yo dije me va a querer picar un día así y enojado verdad</p>
			<p><b>67 </b>E: Ok y ¿cuál es su opinión de tener una relación o no?</p>
			<p><b>68 </b>M7: ¿de tener? ¿Una relación? Pues yo a las relaciones que he tenido después de ya los años que tengo de separada siempre han sido porque / con las personas que yo empiezo a relacionarme como pareja porque me gusta cómo me tratan / pero por lo mismo / porque uno está a falta de cariño verdad / entonces te vas por ese lado</p>
			<p><b>69 </b>E: y antes de tener la relación con su esposo ¿cómo imaginaba que iba a ser su vida?</p>
			<p><b>70 </b>M7: pues me imaginaba que iba a ser todo el tiempo así bien / pues que talvez no todo de color de rosa pero si como siempre verdad / en los matrimonios siempre altas y bajas pero no como lo que yo viví</p>
			<p><b>71 </b>E: Ok bueno ya de casarse / ya que se casó e // cuando usted pensó que la relación que tenía es la que esperaba</p>
			<p><b>72 </b>M7: No / nunca pensé que fuera</p>
			<p><b>73 </b>E: una vez que se casaron ¿luego luego comenzaron los golpes? O sea o ¿cuánto tiempo pasó?</p>
			<p><b>74 </b>M7: No / ya eso fue después de unos tres / cuatro años</p>
			<p><b>75 </b>E: Ok / y a usted ¿le gustaría que sus hijos tuvieran una relación así como la  que tuvo usted?</p>
			<p><b>76 </b>M7: No / claro que no</p>
			<p><b>77 </b>E: ¿Qué aría usted para que ellos no pasaran por lo mismo?</p>
			<p><b>78 </b>M7: Pues es que uno de mis hijos es el que siempre también he sabido que viven así verdad peleando y yo le digo entiende mira / acuérdate pues cuando tu papá me maltrataba no sé porque tienes o sea que / como que si fueron a la misma escuela verdad / o sea a lo que él vio / es a lo mismo que él quiere hacer y quiere entonces este por eso el problema ahorita es la separación también de él / entonces yo le digo a mi  nuera también cuando yo veía que el la maltrataba pues yo me ponía / cómo puede ser posible pues que ella también este esperando / no sé esperando a que también la hiera así con un arma blanca / no sé hasta cuándo porque así están todavía /</p>
			<p><b>79 </b>E: Ok / y ¿usted ha hecho algo? O sea respecto al tema como hablar con ellos como hablar con ellos sobre lo que  usted pasó para que ellos no pasen por lo mismo</p>
			<p><b>80 </b>M7: Si yo he hablado con ellos y también les he dicho que no deben tratarse así porque este en un rato de arranque de enojo verdad / suelen pasar muchas cosas y este // y le digo yo que este / mira este que yo pienso que lo ideal es una separación bien / si ya no están bien / si ya no quieren estar así / la separación porque te digo / si yo aún estuviera con mi esposo a lo mejor ahorita lo estoy platicando verdad / pero si no me salgo de ese bache de donde estaba a lo mejor ya no estuviera viva para contarlo</p>
			<p><b>81 </b>E: Y ¿usted por qué decidió // cuál fue el motivo porque decidió separarse de él?</p>
			<p><b>82 </b>M7: pues una última golpiza que me dio que me mando al hospital con la cabeza abierta / porque él me pegó con una caguama en la cabeza / con la cual me hizo una herida grande / me cocieron en el hospital / entonces ya de ahí dije / no ya no vuelvo / fue cuando me fui a vivir a casa de mi mamá / este allá me estuve un tiempo / porque siempre eran así golpes / me iba un día o dos y ya estaba de vuelta y pues no</p>
			<p><b>83 </b>E: ¿y la herida fue donde, en la cabeza? ¿Cuántos puntos le hicieron?</p>
			<p><b>84 </b>M7: en la cabeza / como seis - siete puntos</p>
			<p><b>85 </b>E: Fue el último golpe que recibió de él Cuando usted decide separarse ¿Cuál fue la reacción de él? ¿Qué fue lo que hizo?</p>
			<p><b>86 </b>M7:o sea iba a buscarme a decirme que lo perdonara que no sabía que había hecho que porque estaba alcoholizado / cosas así verdad / pero yo le dije que ya no y antes si se le hacía que regresaba yo que por mis hijos / que como iba a hacer yo sola por allá y con mis hijos todavía chiquitos / pero después de que tuve esa golpiza que me abrió mi cabeza / dije yo no ya o sea hasta aquí porque pues ahorita yo puedo ver por mis hijos verdad / todavía si me voy allá a deja ya hasta que me vaya a matar / quien iba a ver a mis hijos</p>
			<p><b>87 </b>E: Cuando ustedes pasaban por el ramo de la violencia / ¿sus hijos donde estaban / los veían pelear / veían lo que estaba pasando?</p>
			<p><b>88 </b>M7: Si 7/ ellos a veces tocaba que estaban los niños y me golpeaba  de echo los niños ya la última golpiza ya no estaba con él  o sea estábamos separados pero él fue a la caza a buscar a los niños / luego después estaban dos de ellos y luego él le dijo al más chiquillo ¿dónde está tú mamá? anda trabajando ¿anda trabajando? Pues que sí Entonces como que eso no le gustó a él pues supuestamente para él era tarde no sabía ni los horarios que yo traía entonces después llegué yo y ahí estaba y me empezó a discutir y cuanto y me empezó a agredir Entonces haz de cuenta que de ahí me salí ya no volví yo a la casa en donde estábamos viviendo entonces porque me golpeo y los niños vieron todo eso de hecho mi niño el mediano golpeó a mi esposo ese día, mi hijo más mediano le digo le dio un puñetazo a mi esposo en la cara y hasta le aflojo un diente pero era por lo mismo porque él veía que me traían así a golpes pues entonces el también así por defenderme</p>
			<p><b>89 </b>E: Ok Perfecto y ¿cuando usted era soltera como era su hombre ideal?</p>
			<p><b>90 </b>M7: Pues era si de que fuera una persona que me quisiera mucho y vivir todo el tiempo con él o sea nunca pensé que iba a vivir todo ese tipo de golpes</p>
			<p><b>91 </b>E: Ok ¿Qué tipo de pareja le recomienda elegir a aquellas mujeres que aún no están casadas?</p>
			<p><b>92 </b>M7: ¿Que aún no están casadas? Pues que se fijen bien en los sentimientos de ellos si yo siempre les digo que hay pues si tú te buscas a una persona no pues fíjate primero que no tenga ese problema de las borracheras es lo que siempre yo he dicho o sea eso fue a causa de // lo mío fue a causa de la borrachera porque yo también tomaba con mi esposo si los dos comenzábamos a tomar y luego ya después ya me di cuenta que yo también tenía ese problema desde que estaba con él de alcoholismo porque yo aunque no estuviera el yo tomaba y luego llegaba él y tomábamos los dos y luego teníamos el pleito verdad bajo la influencia del alcohol</p>
			<p><b>93 </b>E: ¿entonces qué características debe tener un hombre para casarse con él?</p>
			<p><b>94 </b>M7: las características pues como te digo a mí me gustaría un hombre que en verdad me quiera me haga sentirme bien que no me dé un golpe o así porque cuando yo veo así como por ejemplo que veo a mi hijo que golpea también a su esposa haz de cuenta que se me retrocede el casete de todo aquello que yo viví verdad y digo nono puede ser yo también le digo a mi nuera pues te déjate porque este trae también trae la misma escuela que su papá</p>
			<p><b>95 </b>E: Ok ¿es el único que pasa por ese tipo de // sus otros dos hijos son así también con sus parejas?</p>
			<p><b>96 </b>M7: Por lo que cabe yo creo que sí según mi otra nuera de la de H1 dice que no que todavía no tiene eso de que la ande golpeando que no sé qué y N1 pues no así enojos normales, pero a golpes no de echo dije a N1 la primera el primer golpecito te dejas toda tu vida vas a ser maltratada</p>
			<p><b>97 </b>E: Ok ¿Cuántos tipos de violencia conoce?</p>
			<p><b>98 </b>M7: conozco varios de ahí del trabajo</p>
			<p><b>99 </b>E: ¿conoce algunas asociaciones instituciones leyes o códigos penales respecto a que apoyen a lo que es a las mujeres que viven violencia?</p>
			<p><b>100 </b>M7: No no conozco nada de eso</p>
			<p><b>101 </b>E: Nunca ha investigado</p>
			<p><b>102 </b>M7: No cuando la última vez que tuve el problema que me golpeó pues ya fui y puse la demanda y todo haz de cuenta que como no me hacían caso ni nada que porque querían que fuera con pruebas pero que más pruebas querían si yo iba toda moretoniada de los brazos y de la cara rajada de la cabeza.</p>
			<p><b>103 </b>E: Ok y en su opinión ¿Cómo podría erradicarse ese problema de la violencia?</p>
			<p><b>104 </b>M7: Pues entre parejas hablando</p>
			<p><b>105 </b>E: Perfecto ¡He! Me puede decir que mensaje les daría a aquellas mujeres que sufren violencia por parte de su pareja?</p>
			<p><b>106 </b>M7: Pues que no se dejen de ellos como te digo o sea digo que lo hablen si ven que no llegan a un acuerdo yo insisto mejor a una separación bien porque los afectados en este caso vienen siendo también los niños</p>
			<p><b>107 </b>E: Bueno por el momento sería todo y muchísimas gracias por el tiempo y las respuestas brindadas</p></br>
						
			<p><b>Fin.</b></p><br />

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
		</article>

		<article class="entrevista_2" id="entrevista2">
			<h2>Conversación 02 realizada el 04 de Marzo del 2017 a las 5:00 pm</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<audio controls controlsList="nodownload"><!-- poster="../../img/Log.jpg"-->
						<source src="../../aud/MSVD_Entrevista02.mp3" type="audio/mp3">
					</audio>
				</div>
			</div>
			<p><b>Tiempo total de la entrevista: </b>10:33 minutos</p><br />
			<p>Entrevista realizada por Esther Anahí Piña Ramirez</p>
			<p>Licenciada en psicología</p><br />
			<p>Deacuerdo a la ley Federal (2014) y Estatal (2015) de protección de víctimas, se han cambiado los nombres personales de las participantes como de sus familiares.</p>
			<p>También se omiten datos que pudieran comprometer la integridad de las mujeres quienes participan en este estudio.</p><br />
			<p><b>Ficha técnica: </b></p>
			<p>Sujeto de sexo femenino;54 años de edad; reside en el municipio de Apodaca, del Estado de Nuevo León México; trabaja en una Primaria dando 5to grado; duró 14 años de casada y decidió separarse por violencia; tiene 13 años de separada; tiene cuatro hijos mayores de edad; en su relato expresa haber experimentado violencia física.</p>
			<p>Para proteger la identidad de la víctima se ha omitido su nombre designado en la transcripción como <b>M8</b></p>
			<p>El lugar de la entrevista es una sala de un domicilio particular donde solo se encuentran la entrevistada (<b>M8</b>) y la entrevistadora (<b>E</b>).</p><br />
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
			
			<p><b>1 </b>E: Listo iniciamos con el cuestionario || ¿cuéntame en que municipio vives?</p>
			<p><b>2 </b>M8: Apodaca</p>
			<p><b>3 </b>E: ok / y ¿qué edad tienes?</p>
			<p><b>4 </b>M8: cincuenta y cuatro años</p>
			<p><b>5 </b>E: ¿cuál es tu profesión? ¿En donde trabajas?</p>
			<p><b>6 </b>M8: trabajo en una escuela / soy maestra</p>
			<p><b>7 </b>E: ok / es primaria / secundaria</p>
			<p><b>8 </b>M8: primaria / con niños de quinto grado</p> 
			<p><b>9 </b>E: ok / y ¿qué estado civil tienes?</p> 
			<p><b>10 </b>M8: fui casada || pero ya me divorcié hace quince años</p>
			<p><b>11 </b>E: ok / y cuánto tiempo duraste con lo que es tu pareja</p>
			<p><b>12 </b>M8: catorce años</p> 
			<p><b>13 </b>E: catorce || ok :: y ¿ tienes hijos?</p> 
			<p><b>14 </b>M8: si</p>
			<p><b>15 </b>E: ¿Cuántos hijos tienes?</p>
			<p><b>16 </b>M8: cuatro</p>
			<p><b>17 </b>E: ok ||  son mayores de edad o ||</p>
			<p><b>18 </b>M8: si ya son mayores de edad</p>
			<p><b>19 </b>E: ok / ¿viven con usted? O ellos ya se alejaron</p>
			<p><b>20 </b>M8: si || dos viven con migo</p>
			<p><b>21 </b>E: ok || y ¿cómo fue su infancia? Recuerda</p> 
			<p><b>22 </b>M8: este || pues mi infancia fue :: normal o sea este || mis padres se divorciaron desde que yo estaba chiquita / pero viví una infancia tranquila</p> 
			<p><b>23 </b>E: ok / y ¿recuerda como fue el matrimonio de sus padres?</p>
			<p><b>24 </b>M8: pues es que ellos se divorciaron cuando yo estaba muy chiquita || o sea no no recuerdo cual fue el trato yo tenía como tres años cuando ellos se separaron entonces mi papá siempre se hizo cargo de nosotros</p> 
			<p><b>25 </b>E: ok / ¿Qué clase de educación le brindaron respecto a cómo elegir a una pareja / o algo / no recuerda eso?</p>
			<p><b>26 </b>M8: este pues nosotros somos / fuimos puras niñas || mujeres en nuestra casa y este mi papá tenía muchos cuidados con nosotros pero si / si nos daba consejos / que tuviéramos mucho cuidado cuando nosotros empezáramos a crecer y tener novio / este si o sea algo normal</p>
			<p><b>27 </b>E: ok y recuerda ¿qué  educación le dieron respecto al rol que debe desempeñar una mujer / por ejemplo el de ama de casa o algo?</p>
			<p><b>28 </b>M8: No / este mi papá siempre nos decía que nos teníamos que preparar / este::  para que / para el futuro veda para que nosotros no dependiéramos de las personas y que teníamos que estudiar que teníamos que valernos para nosotras mismas</p> 
			<p><b>29 </b>E: ok / y ¿transmitiría usted esta enseñanza a sus hijos?</p> 
			<p><b>30 </b>M8: si / claro que sí</p>
			<p><b>31 </b>E: ok / y ¿qué piensa del divorcio?</p>
			<p><b>32 </b>M8: pues || pienso que / cuando es necesario:: este es mejor</p>
			<p><b>33 </b>E: ok ¿Qué piensa de las mujeres divorciadas o las madres solteras?</p>
			<p><b>34 </b>M8: este || pues yo pienso que / pues que son muy valientes porque tienen doble trabajo / y este mantener y ser el fuerte de la casa y pues eso no tiene que ver nada malo al contrario se merecen igual respeto</p>
			<p><b>35 </b>E: ok / y en su opinión cual considera usted que sería una causa que provoque un divorcio o la separación de una pareja?</p>
			<p><b>36 </b>M8: pues yo creo que hay muchas causas que provocan la separación este || pero yo creo que ahorita lo que mas es la infidelidad ||o el maltrato este el maltrato entre la pareja</p> 
			<p><b>37 </b>E: ok / y que piensa de la violencia</p> 
			<p><b>38 </b>M8: pues que la violencia || eso no se debe de pasar / o sea no debe de pasar desapercibida / o sea ya cuando hay violencia en un matrimonio yo creo que es mejor este que cada quien tome su camino porque este / si hay violencia en casa pues después se van repitiendo los patrones con los hijos / y al rato que ellos crezcan igual a lo mejor este pueden seguir el mismo patrón que tuvieron en casa entonces es mejor cuando hay ese tipo de problemas entre una pareja || yo creo que es lo mejor de llegar al divorcio</p>
			<p><b>39 </b>E: ok / usted considera que es correcto que la pareja le grite o pegue por cualquiera que sea la causa a su pareja?</p>
			<p><b>40 </b>M8: yo creo que no para eso existe la comunicación o sea no / no este no debería haber agresión por ninguno de los dos lados / yo creo que lo primero es / este que haya comunicación y hablarlo o sea no llegar a los golpes yo creo que hay soluciones y las soluciones se encuentran platicando / dialogando</p> 
			<p><b>41 </b>E: ok / y ¿cree que una mujer pueda darse cuenta que es víctima de violencia por parte de su pareja?</p>
			<p><b>42 </b>M8: claro que sí / si porque no nada más la violencia son los golpes / si no que la violencia también puede ser psicológica / puede || hay tipos de violencia y este cualquier tipo de violencia que sea pues es dañina en el matrimonio</p>
			<p><b>43 </b>E: ¿qué opina de aquellas mujeres que permiten que su pareja las lastimen de cualquier forma?</p>
			<p><b>44 </b>M8: pues que muchas veces esas || mujeres este vivieron eso en casa y lo ven / a lo mejor vieron a sus padres y lo ven como algo normal / cuando ellos llegan ha :: esta situación piensan que es normal yo creo que cuando una mujer ya llega a esto ya requiere apoyo profesional</p> 
			<p><b>45 </b>E: ok / y ¿cree que muchas mujeres llevan violencia en sus hogares?</p>
			<p><b>46 </b>M8: si muchas</p>
			<p><b>47 </b>E: ¿usted ha pasado por violencia?</p>
			<p><b>48 </b>M8: si</p>
			<p><b>49 </b>E: ok/ y ¿recuerda como fue? O sea lo vivió con su pareja anterior?</p>
			<p><b>50 </b>M8: si claro</p>
			<p><b>51 </b>E: ok || hay algo que le haya impactado o marcado en su relación de pareja en la relación ya tanto familiar o de amigos?</p>
			<p><b>52 </b>M8: este || pues algo que me haya marcado yo creo que más que nada fue la violencia psicológica</p> 
			<p><b>53 </b>E: ok ¿Cuál es su opinión de tener o no una relación?</p>
			<p><b>54 </b>M8: sobre tener una relación pues yo digo que una relación es muy bonita siempre y cuando haya respeto mutuo / este he:: haya dialogo haya comunicación haya confianza</p>
			<p><b>55 </b>E: ok y respecto a su relación pasada ¿usted se imaginaba que iba hacer a si su vida con su pareja anterior?</p>
			<p><b>56 </b>M8: no claro que no</p>
			<p><b>57 </b>E: ok ¿es lo que usted esperaba anterior mente? Cuando estaba pequeña o algo</p>
			<p><b>58 </b>M8: No / no</p>
			<p><b>59 </b>E: ok || que le gustaría cambiar / o no sé si nos vamos al pasado || he cree usted que cometió algún error / en escogerlo a el?</p>
			<p><b>60 </b>M8: este || pues la verdad es que yo creo / yo creo que no / yo creo que aquí lo que faltó fue no sé a lo mejor este respetarnos más / comunicación este resolver nuestras propias situaciones / este yo creo que eso fue lo que nos faltó</p>
			<p><b>61 </b>E: le gustaría que sus hijos tuvieran una pareja como la que usted tenía anteriormente?</p>
			<p><b>62 </b>M8: no || claro que no</p>
			<p><b>63 </b>E: Cuando era soltera / ¿cómo era su hombre ideal/ cómo lo soñaba?</p>
			<p><b>64 </b>M8: no pues este uno siempre cuando está soltera siempre quiere lo mejor y buscas y crees que el hombre que tu elegiste ese es el ideal pero pues / muchas veces nos equivocamos</p> 
			<p><b>65 </b>E: ¿Qué tipo de pareja le recomienda elegir a aquellas mujeres que aún / no se han casado?</p>
			<p><b>66 </b>M8: pues yo creo que más que nada este / e:: || que tengan / que tengan valor || que tengan principios || que sean buenos hijos que este y que sean hombres de bien</p>
			<p><b>67 </b>E: ¿Qué características tiene que tener un hombre como para casarse con él?</p>
			<p><b>68 </b>M8: que características! Yo creo que un hombre debe de tener sobre todo valores</p>
			<p><b>69 </b>E: ok / y ¿usted cuantos tipos de violencia conoce?</p>
			<p><b>70 </b>M8: pues la violencia ese psicológica / y la violencia física</p>
			<p><b>71 </b>E: y ¿usted conoce algunas asociaciones / instituciones o leyes / o códigos penales he de respecto lo que es la violencia en las mujeres?</p>
			<p><b>72 </b>M8: pues este / pues si me decían de algunas instituciones que te protegían pero muchas veces uno por miedo pues no  / no te sientes o estas amenazada y tienes miedo que otras personas se den cuenta de que estás siendo agredida</p> 
			<p><b>73 </b>E: ¿usted llegó alguna vez ha acercarse a alguna institución o a pedir ayuda?</p>
			<p><b>74 </b>M8: no / porque pues tenía miedo</p> 
			<p><b>75 </b>E: ok / y en su opinión ¿Cómo podría erradicarse ese problema?</p>
			<p><b>76 </b>M8: pues yo creo que || este cuando la pareja ya está muy dañada la mejor manera es el divorcio</p> 
			<p><b>77 </b>E: ok ¿Qué mensaje les daría aquellas mujeres que sufren de violencia por parte de su pareja?</p>
			<p><b>78 </b>M8: que se separen / que si ya no hay una solución en su matrimonio verdad que es mejor llegar a una solución antes de que dañen a sus hijos</p> 
			<p><b>79 </b>E: ok / bueno por mi parte sería todo || muchas gracias por el tiempo que nos ha brindado y las respuestas igual mente que brindó</p>
			<p><b>80 </b>M8: gracias</p><br />
						
			<p><b>Fin.</b></p><br />

			<p><b>Nota: </b></p>
			<p>Previo a realizarse la entrevista, se sostuvo una plática con M8, donde se le planteó sobre la investigación, la participante se mostró en acuerdo, debido a que afirmó, que efectivamente, ella había pasado por muchas cosas referentes al tema (evidenciándose segura de compartir la historia), tras la preparación del material, minutos previos al inicio de la entrevista, su actitud se demarco con mayor seriedad, lo que fue reflejado desde el inicio de la entrevista al limitarse a responder de forma vertiginosa a las preguntas, sin querer ahondar demasiado en su pasado, ni el tópico de su vida personal; sin embargo, cuando las preguntas de la guía terminaron y la grabadora se apagó, solicitó disculpas por “quedar mal”, afirmó, asegurando que le dio pena, miedo y vergüenza de compartir su historia, debido a que es una persona que hasta el momento cuenta con un status y un reconocimiento dentro del círculo social al que pertenecen la entrevistada y la entrevistadora.</p>

			<p><b>Referencias de la ley de víctimas: </b></p>
			<p>Estados Unidos Mexicanos, Presidencia de la Republica, Constitución Política. (Noviembre 28, 2014). Reglamento de la Ley General de Víctimas. Publicada en el Diario Oficial de la Federación.</p><br />

			<p>Rodrigo Medina de la Cruz, Gobernador Constitucional del Estado Libre y Soberano de Nuevo León. (Mayo 27, 2015). Ley de víctimas del Estado de Nuevo León. Ley publicada en P.O. # 154 de fecha sábado 07 de Diciembre de 2013.</p><br />

			<p><b>Referencias de la simbología: </b></p>
			<p>Tusón Valls, A. (1997). Análisis de la conversación. Editorial Ariel.</p><br />
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