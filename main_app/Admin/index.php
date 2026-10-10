<?php
	include '../conexion.php';

	$usuarios="SELECT * FROM usuarios";
	$resUsuarios=$mysqli->query($usuarios);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Corpus Lingüísticos D.E</title>
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/estilosAdmin.css">
	<link rel="stylesheet" type="text/css" href="../../Icons/fonts.css">
	<script language="Javascript"> document.oncontextmenu = function(){return false} </script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<a class="titulo-menu">Corpus Lingüísticos D.E</a>				
				<li><a href="../logout.php"><span class="icon-log-out"></span>Cerrar Sesión</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<article class="espacio">
		</article>
		<article class="titulo">
			<h1>Usuarios Registrados</h1>
		</article>
		<article class="Mostrar">
			<table>
				<tr>
					<th width = "10%"><b>Id</b></th>
					<th><b>Nombre</b></th>
					<th><b>Apellidos</b></th>
					<th width = "35%"><b>Correo</b></th>
					<th width = "15%"><b>Usuario</b></th>
				</tr>
				<?php
					while ($registroUsuarios=$resUsuarios->fetch_array(MYSQLI_BOTH)) {
						echo '<tr>
						<td>'.nl2br($registroUsuarios['UserID']).'</td>
						<td>'.nl2br($registroUsuarios['Name']).'</td>
						<td>'.nl2br($registroUsuarios['LastName']).'</td>
						<td>'.nl2br($registroUsuarios['Email']).'</td>
						<td>'.nl2br($registroUsuarios['User']).'</td>
						</tr>';
					}
				?>
			</table>
		</article>
	</section>	

</body>
</html>
