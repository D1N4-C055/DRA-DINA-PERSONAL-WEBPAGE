<?php
	// Agregar coneccion DB
	include '../conexion.php';
	// Recibir datos del formulario html
	$titulo = $_POST["titulo"];
	$liga = $_POST["liga"];
	$correo = $_POST["correo"];
	// Query
	$insertar = "INSERT INTO comentarios (TitleComment, PathComment, EmailComment) VALUES ('$titulo', '$liga','$correo')";
	// Ejecutar query
	if (!empty($liga)) {
		$resultado = mysqli_query($mysqli, $insertar);
		echo '<script>
				alert("Su comentario a sido agregado exitosamente");
				window.location.href="Aportaciones.php";
				</script>';
		/*echo '<script language="javascript">window.location="Aportaciones.php"</script>';*/
		/*sleep(5);
		header("Location:". $_SERVER['HTTP_REFERER']);
		die();*/
	} else {
		echo '<script> 
		alert("No ha sido posible agregar sus comentarios");
		window.history.go(-1);
		</script>';
	}
	/*
	if ($resultado) {
		echo '<script> 
				alert("No ha sido posible agregar sus comentarios");
				window.history.go(-1);
				</script>';
	} else {
		echo '<script> 
				alert("Su comentario a sido agregado exitosamente");
				window.history.go(-1);
				</script>';
	}*/
	// Cerrar coneccion
	mysqli_close($mysqli);
?>