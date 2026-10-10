# Dra. Dina Elizabeth Cortés Coss · Rediseño premium

Esta versión se basa en **Dra_Dina_Sitio_Trayectoria_Proyectos_Renovados**, conserva sus cambios anteriores de Trayectoria y Proyectos y mejora tres páginas adicionales:

- `premios.html`: nueva portada con medallón ilustrado, hitos destacados, 18 entradas del archivo original organizadas por año, buscador y filtros de tipo. Los términos "Nominación", "Premio" y "Reconocimiento" se conservan diferenciados.
- `publicaciones.html`: es la página que antes mostraba **Websites & Social Links**. Ahora incluye accesos a cinco plataformas académicas y seis redes sociales, en dos zonas visuales distintas, con enlaces externos tomados del proyecto anterior.
- `galeria.html`: portada fotográfica, galería de 15 imágenes originales, filtros temáticos y visor de pantalla completa con botones Anterior/Siguiente y controles de teclado (flechas y Escape).

## Abrir en VS Code

1. Extrae TODO el ZIP, incluida su carpeta interna.
2. Abre con VS Code **la carpeta que contiene directamente `index.html`**.
3. Abre Terminal > Nueva terminal; si ya tienes Python disponible, ejecuta:
   `py -m http.server 8765`
4. Mantén la terminal abierta y visita:
   - http://localhost:8765/index.html
   - http://localhost:8765/premios.html
   - http://localhost:8765/publicaciones.html
   - http://localhost:8765/galeria.html
5. Para detener el servidor, presiona `Ctrl + C` en la terminal.

Si el puerto 8765 ya está ocupado, detén el servidor anterior o usa otro puerto, por ejemplo `py -m http.server 8766` y cambia la URL.

## Archivos editados en esta entrega

- `premios.html`
- `publicaciones.html`
- `galeria.html`
- `css/dina-editorial.css` (nuevo)
- `js/dina-editorial.js` (nuevo)

Los otros apartados, incluidos Inicio, Acerca de mí, Trayectoria, Proyectos, Corpus, Cursos, Contacto y la versión en inglés, mantienen su implementación anterior. Los archivos originales y las funciones PHP existentes se conservan. Esta versión **no configura envío de correo ni WhatsApp**; ese trabajo permanece pendiente por acuerdo previo.

## Precauciones antes de publicar

- Verificar que los reconocimientos y destinos de enlace sigan actualizados, ya que su procedencia es el sitio previo.
- Confirmar con la Dra. Dina los rótulos editoriales de fotografías y las agrupaciones temáticas usadas para navegación.
- Probar los servicios PHP (formulario y acceso al corpus) en un servidor PHP real; `python -m http.server` solo sirve contenido estático.
- La familia de fuentes principal puede descargarse de Google Fonts al estar conectado a internet; la fuente de respaldo se utiliza sin conexión.
