# Guía rápida para hacer funcionar Corpus

## 1) No usar Python para Corpus
`py -m http.server` sirve para páginas HTML, CSS y JS, pero **no ejecuta PHP**. Por eso `corpus.php` y `formulario.php` no funcionan allí.

## 2) Usa XAMPP o Laragon
Instala uno de estos entornos y activa:
- Apache
- MySQL

## 3) Copia el proyecto
Coloca la carpeta del proyecto dentro de:
- `C:/xampp/htdocs/` si usas XAMPP
- `C:/laragon/www/` si usas Laragon

## 4) Crea la base de datos
Entra a **phpMyAdmin** y ejecuta el archivo:
- `main_app/setup_corpus.sql`

Eso crea la base de datos `corpus_dina` y su tabla `usuarios`. No hay cuentas ni contraseñas de prueba precreadas.

## 5) Verifica la conexión
El archivo `main_app/conexion.php` quedó configurado así:
- host: `localhost`
- usuario: `root`
- contraseña: `''`
- base de datos: `corpus_dina`

Si tu MySQL usa otra contraseña, cámbiala allí.

## 6) Cómo abrirlo
Ejemplo con XAMPP:

- `http://localhost/Dra_Dina_Web_Ajustes_Finales/index.html`
- `http://localhost/Dra_Dina_Web_Ajustes_Finales/corpus.php`

## 7) Registro y acceso
- Registro: `formulario.php`
- Login: `corpus.php`
- Panel de usuario: `main_app/User/index.php`
- Panel admin: `main_app/Admin/index.php`

## 8) Recomendación
Más adelante conviene mejorar seguridad:
- contraseñas cifradas
- validación de formularios
- recuperación de contraseña
- aprobación manual de registros
