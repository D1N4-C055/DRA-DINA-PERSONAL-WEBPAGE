# Dra. Dina — revisión de modo oscuro e iconos

Esta versión parte de **Dra_Dina_Web_Ajustes_Finales** y conserva sus diez páginas públicas, sus datos, los filtros, el menú multipágina y la portada anterior de Corpus.

## Ajustes

- Corrección de textos demasiado oscuros sobre tarjetas oscuras en **Publicaciones y enlaces**: Google Scholar, UANL, Web of Science, YouTube, redes y enlace de contacto.
- Corrección de los controles y enlaces de **Trayectoria** y **Proyectos**: filtros, buscador, enlaces secundarios y navegación entre secciones.
- Corrección de contraste y legibilidad de los campos, descripciones y enlaces de **Contacto** en modo oscuro.
- Mejora del color de iconos y controles de **Cursos**, especialmente el apartado de Seguridad y Sustentabilidad.
- Eliminación de la dependencia de iconos de la CDN externa: los iconos se cargan del archivo **vendor/fontawesome-free/css/all.min.css** (ya incluido en el proyecto); se sustituyeron clases de iconos incompatibles por otras disponibles en la versión local.
- Ajustes adicionales de contraste en títulos editoriales, botones principales, etiquetas e iconos del pie de página.
- Se conserva el botón Claro/Oscuro en todas las páginas y los estados de navegación móvil.

## Cómo probar en VS Code (Windows)

1. Extrae el ZIP en una carpeta nueva.
2. Abre en VS Code la carpeta que contiene directamente `index.html`.
3. En la terminal abierta dentro de esa carpeta ejecuta:

   ```powershell
   py -m http.server 8765
   ```

4. Abre `http://localhost:8765/index.html` en Brave o Chrome.
5. Cambia al modo oscuro y recorre **Cursos**, **Trayectoria**, **Proyectos**, **Publicaciones y enlaces**, **Contacto**, **Premios**, **Galería** y **Corpus**.
6. Revisa también el sitio desde el móvil o con las herramientas del navegador (F12, vista de dispositivos).

Si tenías otra versión abierta, detén el servidor anterior con `Ctrl+C` y actualiza el navegador con `Ctrl+Shift+R`.

## Pruebas realizadas

- Se revisó el contraste de textos y controles relevantes con el navegador Chromium en contenido local embebido; no se detectaron las deficiencias principales que mostraban las capturas después de aplicar los cambios.
- Se comprobó que diez páginas públicas no presentaban desbordamiento horizontal a 360, 390, 768 y 1440 píxeles, con estilos embebidos.
- Se comprobó la interacción del interruptor Claro/Oscuro, del menú responsive y el cierre mediante Escape en las diez páginas públicas.
- Se comprobó que los iconos HTML utilizados están definidos en la versión local de Font Awesome.

**Límite de las pruebas:** El navegador del entorno no permite navegar directamente a servidores localhost ni a archivos `file://`. Las pruebas visuales se hicieron con el HTML y los CSS embebidos; hay que verificar imágenes, fuentes, recursos externos y PHP en el equipo real. La configuración de envío de Contacto con FormSubmit requiere activación y prueba real con la cuenta de correo de la Dra. Dina.

## Corpus y seguridad

El diseño anterior de `corpus.html` se conserva. El inicio de sesión, el registro y los paneles `PHP` requieren Apache/PHP/MySQL, como explican `GUIA-CORPUS-FUNCIONAMIENTO.md` y `LEEME-ESTA-VERSION.md`.

**No publiques el sistema PHP actual sin una revisión de seguridad:** la versión contiene un esquema heredado que utiliza contraseñas sin hash y un usuario de prueba. Hay que eliminar credenciales de prueba y usar contraseñas cifradas y una base de datos protegida antes de hacerlo público.
