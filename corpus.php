<?php
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['UserType'] == "Admin"){
        header('Location: main_app/Admin/');
        exit;
    } elseif ($_SESSION['usuario']['UserType'] == "User") {
        header('Location: main_app/User/index.php');
        exit;
    }
}
?>
<!DOCTYPE html>

<html lang="es">
<head><script src="js/dina-theme.js"></script>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="Acceso a la plataforma Corpus Lingüísticos D.E." name="description"/>
<title>Ingresar a Corpus Lingüísticos D.E.</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&amp;family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet"/>
<link href="css/dina-cursos-corpus.css" rel="stylesheet"/>
<script>
    function firstExample(event) {
      if (event) event.preventDefault();
      alert("¿Desea ponerse en contacto con los investigadores o directivos de Corpus Lingüísticos D.E?

Remita un correo electrónico a: dinaelizabeth.contacto@gmail.com");
    }
  </script>
<link href="css/dina-theme-fixes.css" rel="stylesheet"/></head>
<body class="corpus-auth">
<div class="body-auth-shell">
<div class="dina-auth-topbar">
<a class="dina-auth-brand" href="index.html">
<span class="dina-auth-brandmark">D.</span>
<span class="dina-auth-brandtext"><strong>Dra. Dina Elizabeth Cortés Coss</strong><small>Corpus Lingüísticos D.E.</small></span>
</a>
<a class="dina-auth-linkback" href="corpus.html"><i class="fas fa-arrow-left"></i> Volver a la presentación</a>
<button aria-label="Activar modo oscuro" aria-pressed="false" class="dina-theme-toggle" type="button"><i aria-hidden="true" class="fas fa-moon"></i><span class="dina-theme-label">Modo oscuro</span></button></div>
<div class="dina-auth-layout">
<aside class="dina-auth-side">
<div class="dina-auth-copy">
<span class="dina-auth-kicker"><i class="fas fa-fingerprint"></i> Acceso protegido</span>
<h1>Iniciar sesión en Corpus.</h1>
<p>Este acceso conecta a la plataforma de corpus lingüísticos y recursos de investigación. El rediseño mantiene la funcionalidad original, pero con una experiencia mucho más elegante, clara y profesional.</p>
<div class="dina-auth-metrics">
<article><strong>4</strong><span>colecciones principales de corpus.</span></article>
<article><strong>+1</strong><span>panel de acceso para usuarios registrados.</span></article>
<article><strong>PHP</strong><span>sistema original preservado y mejor presentado.</span></article>
</div>
<ul class="dina-auth-list">
<li>Si ya tienes cuenta, escribe tu usuario y contraseña.</li>
<li>Si aún no tienes acceso, crea una cuenta desde el registro.</li>
<li>Si necesitas apoyo o autorización, utiliza el botón de información.</li>
</ul>
</div>
</aside>
<section aria-labelledby="loginTitle" class="dina-auth-panel">
<div class="error"><span>Datos de ingreso no válidos, inténtalo de nuevo por favor.</span></div>
<span class="dina-auth-kicker"><i class="fas fa-right-to-bracket"></i> Iniciar sesión</span>
<h2 id="loginTitle" style="font-family:'Cormorant Garamond',serif;font-size:2.7rem;line-height:1;color:var(--dc-violet-deep);margin:1rem 0 1.2rem;">Bienvenida a la plataforma</h2>
<form action="" class="dina-auth-form" id="formlog">
<div class="dina-field">
<label for="userlog">Usuario</label>
<input class="form-control" id="userlog" name="userlog" placeholder="Escribe tu usuario" required="" type="text"/>
</div>
<div class="dina-field">
<label for="passlog">Contraseña</label>
<input class="form-control" id="passlog" name="passlog" placeholder="Escribe tu contraseña" required="" type="password"/>
</div>
<div class="dina-form-row">
<input class="botonlog" type="submit" value="Iniciar sesión"/>
<button class="info-btn" onclick="firstExample(event)"><i class="fas fa-circle-info"></i> Información</button>
</div>
</form>
<p class="dina-auth-help"><strong>¿No tienes una cuenta?</strong> <a href="formulario.php">Regístrate aquí</a></p>
<div class="dina-auth-note"><i class="fas fa-shield-heart"></i> Recomendación: si estás probando en local, asegúrate de usar XAMPP o Laragon con Apache y MySQL activos para que el sistema funcione correctamente.</div>
</section>
</div>
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
