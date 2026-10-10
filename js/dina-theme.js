(function(){
  var KEY='dina-theme-preference';
  try{ if(localStorage.getItem(KEY)==='dark') document.documentElement.setAttribute('data-theme','dark'); }catch(e){}
  function updateButtons(){
    var active=document.documentElement.getAttribute('data-theme')==='dark';
    document.querySelectorAll('.dina-theme-toggle').forEach(function(button){
      button.setAttribute('aria-pressed',String(active));
      button.setAttribute('aria-label',active?'Activar modo claro':'Activar modo oscuro');
      button.setAttribute('title',active?'Activar modo claro':'Activar modo oscuro');
      var icon=button.querySelector('i');if(icon) icon.className=active?'fas fa-sun':'fas fa-moon';
      var label=button.querySelector('.dina-theme-label');if(label)label.textContent=active?'Modo claro':'Modo oscuro';
    });
  }
  document.addEventListener('DOMContentLoaded',function(){
    document.querySelectorAll('.dina-theme-toggle').forEach(function(button){
      button.addEventListener('click',function(){
        var dark=document.documentElement.getAttribute('data-theme')==='dark';
        if(dark)document.documentElement.removeAttribute('data-theme');
        else document.documentElement.setAttribute('data-theme','dark');
        try{localStorage.setItem(KEY,dark?'light':'dark');}catch(e){}
        updateButtons();
      });
    });
    updateButtons();
  });
})();
