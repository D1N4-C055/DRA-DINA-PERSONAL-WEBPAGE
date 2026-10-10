/* Filtros progresivos para los proyectos de la Dra. Dina.
 * HTML permanece visible si JavaScript esta deshabilitado. */
(()=>{
  'use strict';
  const container=document.getElementById('dr-project-grid');
  if(!container)return;
  const cards=Array.from(container.querySelectorAll('.dr-project-card'));
  const filters=Array.from(document.querySelectorAll('.dr-filter[data-filter]'));
  const search=document.getElementById('dr-search');
  const sort=document.getElementById('dr-sort');
  const count=document.getElementById('dr-count');
  const empty=document.getElementById('dr-empty');
  const reset=document.getElementById('dr-reset');
  let active='todos';
  const normalize=(s)=>String(s).normalize('NFD').replace(/[\u0300-\u036f]/g,'').toLocaleLowerCase('es').trim();
  const update=()=>{
    const term=normalize(search.value);
    let shown=0;
    cards.forEach(card=>{
      const cat=card.dataset.categories.split(' ');
      const matches=(active==='todos'||cat.includes(active))&&(!term||normalize(card.textContent).includes(term));
      card.hidden=!matches;
      if(matches)shown++;
    });
    const mode=sort.value;
    const ordered=[...cards].sort((a,b)=>{
      if(mode==='oldest')return Number(a.dataset.year)-Number(b.dataset.year)||Number(a.dataset.originalOrder)-Number(b.dataset.originalOrder);
      if(mode==='az')return a.querySelector('h3').textContent.localeCompare(b.querySelector('h3').textContent,'es');
      return Number(b.dataset.year)-Number(a.dataset.year)||Number(a.dataset.originalOrder)-Number(b.dataset.originalOrder);
    });
    ordered.forEach(card=>container.appendChild(card));
    count.textContent=`Mostrando ${shown} de ${cards.length} ${shown===1?'proyecto':'proyectos'}`;
    empty.hidden=shown!==0;
  };
  filters.forEach(btn=>btn.addEventListener('click',()=>{
    active=btn.dataset.filter;
    filters.forEach(b=>{
      const selected=b===btn;
      b.classList.toggle('active',selected);
      b.setAttribute('aria-pressed',String(selected));
    });
    update();
  }));
  search.addEventListener('input',update);
  sort.addEventListener('change',update);
  reset.addEventListener('click',()=>{
    search.value='';sort.value='recent';filters[0].click();search.focus();
  });
  update();
})();
