# Dra. Dina — Ajustes de cursos, corpus, móvil, tema oscuro y contacto

## Cambios visibles
- **Cursos y formación**: regresó al encabezado sencillo y al título **Tienda de cursos**. Se retiraron bloques de texto internos sobre el rediseño, rutas formativas, tarjetas “experiencia formativa” y cierre promocional.
- **Tarjetas**: se agregó separación horizontal y vertical real entre cursos, especialmente en Educación e Inclusión; las descripciones se muestran completas.
- **Corpus**: se restauró la portada pública de la versión anterior, con los dos botones de acceso y registro. **PHP/MySQL siguen siendo necesarios**.
- **Menú**: se quitó el enlace a Inglés y el traductor. Se agregó un botón de modo oscuro/claro con preferencia guardada en el navegador.
- **Móvil**: se reforzaron los estilos del menú, las tarjetas y los formularios.
- **Contacto**: formulario preparado para **FormSubmit**, destino `dinaelizabeth.contacto@gmail.com`; alternativa mailto incluida.

## Vista previa rápida
Extrae el ZIP en una carpeta nueva, abre en VS Code esa carpeta que contiene directamente `index.html` y ejecuta `py -m http.server 8765` y visita `http://localhost:8765`.
Esto funciona para HTML/CSS/JS. PHP requiere Apache/PHP y MySQL.

## Activación del formulario de Contacto
1. Visita `contacto.html`, llena el formulario con datos de prueba y envíalo.
2. FormSubmit enviará un **correo de activación** a `dinaelizabeth.contacto@gmail.com`.
3. La Dra. Dina debe abrirlo y confirmar la activación.
4. Vuelve a mandar un mensaje de prueba y verifica que llegue a la bandeja de entrada y correo no deseado.
5. El formulario usa un servicio externo; confirma que su manejo de datos cumple con el aviso de privacidad antes de publicarlo. No solicita información sensible.
6. La confirmación visual que muestra FormSubmit es gestionada por ese servicio; el sitio no puede garantizar entrega a la bandeja final.

## Corpus
El diseño público se restauró tal como estaba antes de la ampliación de Cursos/Corpus. Se conservaron los archivos PHP, el acceso y registro. Para usarlos, necesitas un servidor compatible con PHP y MySQL. El archivo SQL crea solo estructura local (ya NO crea un administrador con una contraseña pública). Para una puesta en producción es **necesaria una revisión de seguridad** del backend heredado, contraseñas, sesiones y permisos de registro.

## Notas
- No se cambió el contenido de Trayectoria, Proyectos, Premios, Publicaciones o Galería, salvo el menú y modo oscuro.
- El modo oscuro incluye estilos para todas las páginas visibles, con algunas ilustraciones y fotografías originales sin recolorear.
- Si cambias el correo destinatario, modifica `action` en `contacto.html` y sigue la activación con la nueva dirección.
