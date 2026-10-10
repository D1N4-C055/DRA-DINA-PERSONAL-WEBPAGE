# Actualización de Trayectoria y Proyectos · Dra. Dina

Esta entrega conserva el sitio multipágina y su estilo violeta, coral y turquesa. Solo se renovaron **Trayectoria** y **Proyectos**.

## Cambios principales
- `trayectoria.html`: recorrido visual vertical con las **4 etapas académicas** y una sección diferenciada con **3 certificaciones**; se conservan las instituciones, los títulos y los logotipos disponibles.
- `proyectos.html`: catálogo de **15 iniciativas** con tarjetas uniformes, categorías temáticas, buscador y ordenamiento por fecha o nombre. El filtrado funciona solo con JavaScript del navegador, sin backend.
- `css/dina-secciones.css`: estilos encapsulados para estas dos páginas.
- `js/dina-secciones.js`: filtros, búsqueda y ordenación, con tarjetas visibles incluso si JavaScript falla.

## Cómo abrir sin problemas
1. Extrae el archivo ZIP completo, nunca abras el HTML dentro del ZIP.
2. En VS Code, abre **la carpeta que contiene `index.html`**.
3. Desde esa carpeta ejecuta en la terminal `py -m http.server 8765`.
4. Abre `http://localhost:8765/trayectoria.html` o `http://localhost:8765/proyectos.html`.
5. Para detener el servidor presiona `Ctrl + C`.

Si aparece que el puerto 8765 ya esta en uso, cierra la terminal que lo está ejecutando o utiliza otro puerto, por ejemplo 8766, y modifica la URL.

## Sobre el contenido
- Las fechas, los títulos académicos y las descripciones provienen del proyecto anterior. No se inventaron nuevas fechas ni resultados.
- Las categorías de Proyectos son **una propuesta editorial de navegación**, no etiquetas oficiales entregadas por la doctora.
- En el registro original 3 títulos indicaban «vigente»; el estado se conserva atribuido al sitio anterior, pero se debe **verificar con la Dra. Dina** antes de publicarlo como dato actual.
- Se eliminó un texto duplicado dentro de la descripción de «El sonido del silencio», pues ya existe como proyecto separado «Universidad socialmente saludable».
- En el proyecto «more life» aparecía una URL con apariencia de enlace de ejemplo; no se dejó como enlace activo sin comprobar su validez.
- El sistema PHP de Corpus y el formulario de contacto no fueron modificados. `py -m http.server` no ejecuta PHP ni envía correos por sí solo.
