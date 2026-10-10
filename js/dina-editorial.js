/* Interacciones puntuales de Premios, Enlaces y Galería. Vanilla JS, sin dependencias. */
(function () {
  'use strict';

  function installAwards() {
    var list = document.getElementById('de-awards-list');
    if (!list) return;
    var buttons = Array.from(document.querySelectorAll('[data-award-filter]'));
    var cards = Array.from(list.querySelectorAll('.de-award'));
    var groups = Array.from(list.querySelectorAll('.de-year-group'));
    var search = document.getElementById('de-award-search');
    var counter = document.getElementById('de-award-count');
    var empty = document.getElementById('de-award-empty');
    var selected = 'todos';
    function update() {
      var term = (search ? search.value : '').trim().toLocaleLowerCase('es');
      var visible = 0;
      cards.forEach(function (card) {
        var category = card.dataset.kind || '';
        var data = (card.dataset.search || '').toLocaleLowerCase('es');
        var show = (selected === 'todos' || selected === category) && (!term || data.includes(term));
        card.hidden = !show;
        if (show) visible++;
      });
      groups.forEach(function (group) {
        group.hidden = !group.querySelector('.de-award:not([hidden])');
      });
      if (counter) counter.textContent = String(visible);
      if (empty) empty.hidden = visible !== 0;
    }
    buttons.forEach(function (button) {
      button.addEventListener('click', function () {
        selected = button.dataset.awardFilter;
        buttons.forEach(function (b) {
          var active = b === button;
          b.classList.toggle('is-active', active);
          b.setAttribute('aria-pressed', String(active));
        });
        update();
      });
    });
    if (search) search.addEventListener('input', update);
    update();
  }

  function installGallery() {
    var modal = document.getElementById('de-lightbox');
    if (!modal) return;
    var items = Array.from(document.querySelectorAll('.de-photo-card[data-photo-index]'));
    var filters = Array.from(document.querySelectorAll('[data-photo-filter]'));
    var counter = document.getElementById('de-gallery-visible-count');
    var image = document.getElementById('de-lightbox-image');
    var title = document.getElementById('de-lightbox-caption');
    var cat = document.getElementById('de-lightbox-category');
    var position = document.getElementById('de-lightbox-position');
    var close = modal.querySelector('.de-lightbox-close');
    var previous = modal.querySelector('.de-lightbox-previous');
    var next = modal.querySelector('.de-lightbox-next');
    var selected = 0;
    var returnFocus = null;
    var oldOverflow = '';

    function visibleItems() { return items.filter(function (item) { return !item.hidden; }); }
    function setFilter(filter) {
      var total = 0;
      items.forEach(function (item) {
        var matches = filter === 'todos' || item.dataset.category === filter;
        item.hidden = !matches;
        if (matches) total++;
      });
      filters.forEach(function (button) {
        var active = button.dataset.photoFilter === filter;
        button.classList.toggle('is-active', active);
        button.setAttribute('aria-pressed', String(active));
      });
      if (counter) counter.textContent = String(total);
    }
    function updateModal(item) {
      var img = item.querySelector('img');
      var data = visibleItems();
      selected = data.indexOf(item);
      if (!img || selected < 0) return;
      image.src = img.getAttribute('src');
      image.alt = img.alt || 'Fotografía de la galería';
      var label = item.querySelector('.de-photo-category');
      var caption = item.querySelector('.de-photo-overlay strong');
      cat.textContent = label ? label.textContent : '';
      title.textContent = caption ? caption.textContent : img.alt;
      position.textContent = (selected + 1) + ' / ' + data.length;
    }
    function open(item) {
      returnFocus = document.activeElement;
      oldOverflow = document.body.style.overflow;
      updateModal(item);
      modal.hidden = false;
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      close.focus();
    }
    function dismiss() {
      if (modal.hidden) return;
      modal.hidden = true;
      modal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = oldOverflow;
      image.removeAttribute('src');
      if (returnFocus && typeof returnFocus.focus === 'function') returnFocus.focus();
    }
    function navigate(step) {
      var visible = visibleItems();
      if (!visible.length) return;
      var nextIndex = (selected + step + visible.length) % visible.length;
      updateModal(visible[nextIndex]);
    }
    filters.forEach(function (b) { b.addEventListener('click', function () { setFilter(b.dataset.photoFilter); }); });
    items.forEach(function (item) { item.addEventListener('click', function () { open(item); }); });
    close.addEventListener('click', dismiss);
    previous.addEventListener('click', function () { navigate(-1); });
    next.addEventListener('click', function () { navigate(1); });
    modal.addEventListener('click', function (ev) { if (ev.target === modal) dismiss(); });
    document.addEventListener('keydown', function (ev) {
      if (modal.hidden) return;
      if (ev.key === 'Escape') { ev.preventDefault(); dismiss(); }
      if (ev.key === 'ArrowLeft') { ev.preventDefault(); navigate(-1); }
      if (ev.key === 'ArrowRight') { ev.preventDefault(); navigate(1); }
      if (ev.key === 'Tab') {
        var focusables = [close, previous, next];
        var n = focusables.indexOf(document.activeElement);
        if (ev.shiftKey && (n === 0 || n === -1)) { ev.preventDefault(); next.focus(); }
        if (!ev.shiftKey && (n === 2 || n === -1)) { ev.preventDefault(); close.focus(); }
      }
    });
    setFilter('todos');
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () { installAwards(); installGallery(); });
  } else {
    installAwards(); installGallery();
  }
})();
