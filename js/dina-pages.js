// Interacciones de las páginas de cursos y galería; no hay navegación SPA.
document.addEventListener('DOMContentLoaded', function(){
  if (document.querySelector('#tienda')) {
    document.querySelectorAll('.course-card-button').forEach(function(button){
      button.addEventListener('click', function(event){
        event.preventDefault();
        var card=button.closest('.course-card');
        var modal=document.querySelector('#courseDetailModal');
        if(!card || !modal || !window.jQuery) return;
        var title=card.querySelector('.course-card-title');
        var category=card.querySelector('.course-card-badge');
        var description=card.querySelector('.course-card-text');
        modal.querySelector('#courseDetailModalLabel').textContent=title ? title.textContent.trim() : 'Curso';
        modal.querySelector('#courseDetailModalCategory').textContent=category ? category.textContent.trim() : '';
        modal.querySelector('#courseDetailModalText').textContent=description ? description.textContent.trim() : '';
        window.jQuery('#courseDetailModal').modal('show');
      });
    });
    setupTiendaFilters();
  }
  if (document.querySelector('#galeria') && document.getElementById('galleryLightbox')) initGalleryLightbox();
});

    function setupTiendaFilters() {
      var currentTiendaFilter = 'Todos';
      var filterButtons = document.querySelectorAll('#tienda .filter-pill');
      var categoryBlocks = Array.from(document.querySelectorAll('#tienda .category-block[data-category]'));
      var featuredCards = Array.from(document.querySelectorAll('#tienda .featured-courses-slider .course-card.featured'));
      var featuredWrapper = document.querySelector('#tienda .featured-courses-wrapper');

      var featuredData = [
        {
          category: 'Liderazgo y Desarrollo Profesional',
          badge: 'Gestión y liderazgo',
          title: 'Liderazgo Organizacional y Mejora Continua de Procesos',
          text: 'Una formación estratégica diseñada para mejorar resultados, coordinación de equipos y cultura de calidad.',
          icon: 'fas fa-award'
        },
        {
          category: 'Educación e Inclusión',
          badge: 'Inclusión educativa',
          title: 'Educación Inclusiva: Derechos y Diversidad',
          text: 'Una experiencia formativa que aporta herramientas para crear ambientes educativos más justos y accesibles.',
          icon: 'fas fa-hands-helping'
        },
        {
          category: 'Innovación y Tecnología',
          badge: 'Innovación',
          title: 'Innovación Tecnológica Aplicada a la Educación',
          text: 'Un curso práctico para incorporar tecnología educativa de vanguardia con enfoque pedagógico.',
          icon: 'fas fa-robot'
        },
        {
          category: 'Idiomas y Comunicación',
          badge: 'Inglés',
          title: 'Inglés aplicado, habilidades técnicas e instituciones educativas',
          text: 'Aprende inglés especializado para contextos académicos, técnicos y colaborativos.',
          icon: 'fas fa-globe'
        },
        {
          category: 'Bienestar y Desarrollo Humano',
          badge: 'Autocuidado',
          title: 'Inteligencia Emocional y Autocuidado en el Ámbito Profesional',
          text: 'Herramientas para comprender, manejar y potenciar tu bienestar dentro del entorno laboral.',
          icon: 'fas fa-heartbeat'
        },
        {
          category: 'Seguridad y Sustentabilidad',
          badge: 'Seguridad',
          title: 'Formación Integral en Seguridad y Manejo de Emergencias en Entornos Educativos y Corporativos',
          text: 'Prepara entornos educativos y corporativos con protocolos claros y atención segura ante emergencias.',
          icon: 'fas fa-first-aid'
        }
      ];

      function renderFeatured(filter) {
        if (!featuredCards.length) {
          return;
        }

        var available = featuredData.filter(function(item) {
          return filter === 'Todos' || item.category === filter;
        });

        if (!available.length) {
          featuredWrapper.style.display = 'none';
          return;
        }

        featuredWrapper.style.display = '';
        var start = 0;
        featuredCards.forEach(function(card, index) {
          var item = available[(start + index) % available.length];
          card.dataset.category = item.category;
          card.querySelector('.course-card-badge').textContent = item.badge;
          card.querySelector('.course-card-title').textContent = item.title;
          card.querySelector('.course-card-text').textContent = item.text;
          var icon = card.querySelector('.course-card-media i');
          if (icon) {
            icon.className = item.icon;
          }
          card.style.display = '';
        });
      }

      function applyTiendaFilter(filter) {
        currentTiendaFilter = filter;

        filterButtons.forEach(function(button) {
          button.classList.toggle('active', button.dataset.filter === filter);
        });

        categoryBlocks.forEach(function(block) {
          block.style.display = filter === 'Todos' || block.dataset.category === filter ? '' : 'none';
        });

        renderFeatured(filter);
      }

      filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          applyTiendaFilter(button.dataset.filter);
        });
      });

      applyTiendaFilter(currentTiendaFilter);

      setInterval(function() {
        if (featuredWrapper.style.display === 'none') {
          return;
        }
        featuredData.push(featuredData.shift());
        renderFeatured(currentTiendaFilter);
      }, 6000);
    }

    function initGalleryLightbox() {
      var galleryItems = Array.from(document.querySelectorAll('#galeria .gallery-lightbox-trigger'));
      var lightbox = document.getElementById('galleryLightbox');
      var lightboxImage = document.getElementById('galleryLightboxImage');
      var lightboxCaption = document.getElementById('galleryLightboxCaption');
      var closeButton = lightbox.querySelector('.gallery-lightbox-close');
      var prevButton = lightbox.querySelector('.gallery-lightbox-prev');
      var nextButton = lightbox.querySelector('.gallery-lightbox-next');
      var backdrop = lightbox.querySelector('.gallery-lightbox-backdrop');
      var currentIndex = 0;
      var items = galleryItems.map(function(item) {
        var image = item.querySelector('img');
        return {
          src: image ? image.getAttribute('src') : '',
          alt: image ? image.getAttribute('alt') : '',
          title: image ? image.getAttribute('alt') : ''
        };
      });

      function openLightbox(index) {
        if (!items[index]) {
          return;
        }
        currentIndex = index;
        lightboxImage.src = items[index].src;
        lightboxImage.alt = items[index].alt || 'Galería';
        lightboxCaption.textContent = items[index].title || '';
        lightbox.classList.remove('d-none');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
      }

      function closeLightbox() {
        lightbox.classList.add('d-none');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }

      function showPrevious() {
        openLightbox((currentIndex - 1 + items.length) % items.length);
      }

      function showNext() {
        openLightbox((currentIndex + 1) % items.length);
      }

      galleryItems.forEach(function(item, index) {
        item.addEventListener('click', function() {
          openLightbox(index);
        });
      });

      closeButton.addEventListener('click', closeLightbox);
      backdrop.addEventListener('click', closeLightbox);
      prevButton.addEventListener('click', showPrevious);
      nextButton.addEventListener('click', showNext);

      document.addEventListener('keydown', function(event) {
        if (lightbox.classList.contains('d-none')) {
          return;
        }
        if (event.key === 'Escape') {
          closeLightbox();
        }
        if (event.key === 'ArrowLeft') {
          showPrevious();
        }
        if (event.key === 'ArrowRight') {
          showNext();
        }
      });
    }
