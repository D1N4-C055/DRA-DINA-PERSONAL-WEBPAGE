document.addEventListener('DOMContentLoaded',function(){
  var form=document.querySelector('form[name="formulario_registro"]');
  if(!form)return;
  form.addEventListener('submit',function(e){
    var password=form.querySelector('#pass');
    var confirmation=form.querySelector('#pass2');
    if(password && confirmation && password.value!==confirmation.value){
      e.preventDefault();
      confirmation.setCustomValidity('Las contraseñas no coinciden.');
      confirmation.reportValidity();
      confirmation.focus();
    }
  });
  var pass2=form.querySelector('#pass2');
  if(pass2)pass2.addEventListener('input',function(){pass2.setCustomValidity('');});
});
