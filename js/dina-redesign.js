/* Navegación y accesibilidad del rediseño. La lógica anterior para cursos,
   galería y contacto no se elimina ni se sustituye. */
(function () {
  'use strict';
  function ready() {
    var toggle = document.querySelector('.dina-menu-toggle');
    var menu = document.getElementById('navbarResponsive');
    var more = document.querySelector('.dina-nav-more');
    var moreBtn = document.querySelector('.dina-more-btn');
    function closeMenu() {
      if (!toggle || !menu) return;
      menu.classList.remove('show');
      toggle.setAttribute('aria-expanded','false');
      toggle.innerHTML = '<i class="fas fa-bars" aria-hidden="true"></i>';
    }
    if (toggle && menu) {
      toggle.addEventListener('click',function () {
        var open = menu.classList.toggle('show');
        toggle.setAttribute('aria-expanded',String(open));
        toggle.innerHTML = open ? '<i class="fas fa-times" aria-hidden="true"></i>' : '<i class="fas fa-bars" aria-hidden="true"></i>';
      });
      menu.querySelectorAll('a').forEach(function(a){a.addEventListener('click',closeMenu)});
    }
    if (more && moreBtn) {
      moreBtn.addEventListener('click',function () {
        var open = more.classList.toggle('open');
        moreBtn.setAttribute('aria-expanded',String(open));
      });
      document.addEventListener('click',function(e){if(!more.contains(e.target)){more.classList.remove('open');moreBtn.setAttribute('aria-expanded','false')}});
    }
    document.addEventListener('keydown',function(e){if(e.key==='Escape'){closeMenu();if(more){more.classList.remove('open');moreBtn.setAttribute('aria-expanded','false')}}});
    // Enlaces multipágina reales: se respetan los href sin interceptar la navegación.
    var current=decodeURIComponent(location.pathname.split('/').pop() || 'index.html');
    document.querySelectorAll('.dina-nav-link, .dina-nav-cta, .dina-more-menu a').forEach(function(a){
      if(a.getAttribute('href') === current){
        a.classList.add('active');a.setAttribute('aria-current','page');
      }
    });
    document.querySelectorAll('img:not([loading])').forEach(function(img){
      if(!img.closest('.dina-hero-visual'))img.setAttribute('loading','lazy');
    });
  }
  if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',ready);else ready();
})();
