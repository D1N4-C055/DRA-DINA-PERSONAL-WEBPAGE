# Rediseño visual — Dra. Dina Elizabeth Cortés Coss

**Primera versión navegable**, creada a partir del sitio entregado y de la propuesta visual de julio de 2026. Se inspira en las superficies translúcidas, el tratamiento tipográfico, los degradados suaves y las tarjetas del proyecto BAF, pero usa una paleta propia.

## Archivos modificados

- `index.html`: nueva portada, encabezado, navegación responsive, accesos rápidos y bloque de colaboración. Conserva las secciones de biografía, educación, proyectos, premios, enlaces, cursos, galería y contacto y su contenido existente.
- `css/dina-redesign.css`: sistema de colores y rediseño visual. Se carga **después** de los estilos antiguos.
- `js/dina-redesign.js`: menú para celular, desplegable de navegación y mejoras de accesibilidad.
- `sitio-original.html`: copia íntegra del `index.html` original antes de modificarlo.

Los scripts previos de tienda/cursos, galería, traducción y contacto se mantienen. `corpus.php`, `formulario.php`, `main_app/` y sus rutas PHP no se reescribieron para evitar cambiar el sistema de usuarios o bases de datos.

## Cómo previsualizar

Para ver la portada basta abrir `index.html` en un navegador, aunque ciertas funciones deben comprobarse en un servidor local con PHP. Por ejemplo:

```bash
php -S localhost:8000
```

Luego abre `http://localhost:8000`. Para subirla al hosting existente, haz primero una copia de seguridad y sustituye los archivos *después de probar los enlaces y el formulario en entorno de pruebas*.

## Próximas validaciones necesarias

1. Confirmar con la Dra. Dina los textos del hero y la selección de fotografía principal.
2. Revisar correo, enlaces y datos reales en la sección de contacto. Se retiró de la nueva portada el teléfono de ejemplo `+52 81 1234 5678` que figuraba en el sitio original; se puede reincorporar cuando la Dra. Dina confirme uno real.
3. Probar el envío del formulario `mail/contact_me.php` y las credenciales/sesiones de `corpus.php` en servidor PHP con la base de datos configurada. **No están verificados en este prototipo**.
4. Aplicar una segunda fase visual a las páginas internas del sistema de corpus y a `ingles.html`, que mantienen la versión anterior.
5. Revisar contrastes, accesibilidad y experiencia móvil en dispositivos reales.

## Paleta

- Violeta principal `#6C63A8`
- Coral `#F28C8C`
- Turquesa `#4DB6AC`
- Crema `#FFF8F2`
- Azul tinta `#243B53`

Tipografías: Cormorant Garamond para encabezados (inspiración BAF) e Inter para textos (propuesta). Se obtienen por Google Fonts, con fuentes de respaldo locales.
