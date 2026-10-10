// Visor fotográfico: clic para ampliar, Escape para cerrar.
  (() => {
    const box = document.getElementById('cf-lightbox');
    const image = document.getElementById('cf-lightbox-img');
    const caption = document.getElementById('cf-lightbox-caption');
    const close = box.querySelector('.cf-lightbox-close');
    let previousFocus;
    function hide(){ box.hidden = true; document.body.style.overflow = ''; image.removeAttribute('src'); previousFocus?.focus(); }
    document.querySelectorAll('.cf-photo').forEach(button => {
      button.addEventListener('click', () => {
        const photo = button.querySelector('img');
        previousFocus = button;
        image.src = photo.getAttribute('src');
        image.alt = photo.alt;
        caption.textContent = button.dataset.caption || '';
        box.hidden = false;
        document.body.style.overflow = 'hidden';
        close.focus();
      });
    });
    close.addEventListener('click', hide);
    box.addEventListener('click', e => { if (e.target === box) hide(); });
    document.addEventListener('keydown', e => { if (!box.hidden && e.key === 'Escape') hide(); });
  })();
