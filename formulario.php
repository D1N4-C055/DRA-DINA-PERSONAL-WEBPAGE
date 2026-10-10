<!DOCTYPE html>

<html lang="es">
<head><script src="js/dina-theme.js"></script>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Registro | Corpus Lingüísticos D.E.</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&amp;family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet"/>
<link href="css/dina-cursos-corpus.css" rel="stylesheet"/>
<link href="css/dina-theme-fixes.css" rel="stylesheet"/></head>
<body class="corpus-auth">
<div class="body-auth-shell">
<div class="dina-auth-topbar">
<a class="dina-auth-brand" href="index.html">
<span class="dina-auth-brandmark">D.</span>
<span class="dina-auth-brandtext"><strong>Dra. Dina Elizabeth Cortés Coss</strong><small>Registro a Corpus Lingüísticos D.E.</small></span>
</a>
<a class="dina-auth-linkback" href="corpus.php"><i class="fas fa-arrow-left"></i> Volver al acceso</a>
<button aria-label="Activar modo oscuro" aria-pressed="false" class="dina-theme-toggle" type="button"><i aria-hidden="true" class="fas fa-moon"></i><span class="dina-theme-label">Modo oscuro</span></button></div>
<div class="dina-auth-layout">
<aside class="dina-auth-side">
<div class="dina-auth-copy">
<span class="dina-auth-kicker"><i class="fas fa-user-plus"></i> Registro de usuarios</span>
<h1>Crear cuenta para consultar Corpus.</h1>
<p>Rediseñamos esta experiencia para que el registro se sienta más claro, más elegante y mucho más alineado con la identidad visual de la página principal.</p>
<div class="dina-auth-metrics">
<article><strong>1</strong><span>formulario limpio y fácil de completar.</span></article>
<article><strong>100%</strong><span>alineado con la identidad premium del sitio.</span></article>
<article><strong>Listo</strong><span>para integrarse con el backend PHP original.</span></article>
</div>
<ul class="dina-auth-list">
<li>Completa tus datos personales y define tu usuario.</li>
<li>Lee y acepta los términos y condiciones.</li>
<li>Una vez registrado, podrás iniciar sesión en la plataforma.</li>
</ul>
</div>
</aside>
<section aria-labelledby="registerTitle" class="dina-auth-panel">
<span class="dina-auth-kicker"><i class="fas fa-id-card"></i> Registro</span>
<h2 id="registerTitle" style="font-family:'Cormorant Garamond',serif;font-size:2.7rem;line-height:1;color:var(--dc-violet-deep);margin:1rem 0 1.2rem;">Solicitar acceso</h2>
<form action="main_app/registrar.php" class="dina-auth-form" method="post" name="formulario_registro">
<div class="dina-field-inline">
<div class="dina-field"><label for="nombre">Nombre</label><input id="nombre" name="nombre" placeholder="Nombre" required="" type="text"/></div>
<div class="dina-field"><label for="apellidos">Apellidos</label><input id="apellidos" name="apellidos" placeholder="Apellidos" required="" type="text"/></div>
</div>
<div class="dina-field"><label for="correo">Correo electrónico</label><input id="correo" name="correo" placeholder="correo@ejemplo.com" required="" type="email"/></div>
<div class="dina-field"><label for="usuario">Usuario</label><input id="usuario" name="usuario" placeholder="Elige un nombre de usuario" required="" type="text"/></div>
<div class="dina-field-inline">
<div class="dina-field"><label for="pass">Contraseña</label><input id="pass" name="pass" placeholder="Contraseña" required="" type="password"/></div>
<div class="dina-field"><label for="pass2">Repetir contraseña</label><input id="pass2" name="pass2" placeholder="Confirma tu contraseña" required="" type="password"/></div>
</div>
<label class="dina-check"><input id="terminos" name="terminos" required="" type="checkbox" value="true"/><span>Acepto los <a href="main_app/User/Reglamento.pdf" rel="noopener" target="_blank">términos y condiciones</a> del sistema.</span></label>
<button class="dina-auth-submit" id="btn-submit" type="submit"><i class="fas fa-paper-plane"></i> Enviar registro</button>
</form>
<p class="dina-auth-help"><strong>¿Ya tienes una cuenta?</strong> <a href="corpus.php">Ingresa aquí</a></p>
<div class="dina-auth-note"><i class="fas fa-circle-info"></i> Si el sistema muestra errores al registrar, revisa primero la conexión con la base de datos y que la tabla <code>usuarios</code> exista correctamente.</div>
</section>
</div>
</div>
<script src="js/dina-registro.js"></script>
</body>
</html>