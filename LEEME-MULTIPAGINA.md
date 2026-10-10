# Sitio web de la Dra. Dina — Versión multipágina

Esta versión conserva el diseño violeta/coral/turquesa del prototipo y separa cada opción del menú en una página individual.

## Para abrir en Visual Studio Code
1. Descomprime el ZIP y abre la **carpeta completa** en VS Code.
2. Abre `index.html` y usa **Open with Live Server**.
3. Pulsa las opciones del menú. Cada una abre su propio archivo HTML y mantiene el mismo encabezado.

| Página | Archivo |
| --- | --- |
| Inicio | `index.html` |
| Acerca de mí | `acerca-de-mi.html` |
| Trayectoria | `trayectoria.html` |
| Proyectos | `proyectos.html` |
| Corpus | `corpus.html` |
| Premios y distinciones | `premios.html` |
| Publicaciones y enlaces | `publicaciones.html` |
| Cursos y formación | `cursos.html` |
| Galería | `galeria.html` |
| Contacto | `contacto.html` |

## Importante: Corpus y formularios
`corpus.html` es una página de presentación nueva; el enlace de ingreso va a **`corpus.php`**, la aplicación PHP de acceso original. El registro sigue en **`formulario.php`**. Estos archivos y `main_app/` permanecen sin modificar. Live Server **no ejecuta PHP**; para el acceso, registro y lógica del corpus se necesita un servidor PHP, base de datos y configuración original del sistema.

## Conservación de archivos
- `sitio-completo-respaldo.html`: copia del prototipo previo de una sola página.
- `sitio-original.html`: la copia anterior del sitio, sin alterar.
- `ingles.html`: versión en inglés original, pendiente de adaptar a la misma navegación multipágina.
- `css/dina-redesign.css`: estilos actuales y nuevos estilos de las páginas internas.
- `js/dina-redesign.js`: menú responsive y marcado activo por URL.
- `js/dina-pages.js`: interacciones de cursos y galería.

No se migró ni se reescribió la autenticación PHP. Probar el formulario de contacto y las integraciones en un servidor adecuado antes de publicar. Verifica también los enlaces externos de publicaciones y redes sociales.
