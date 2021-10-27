funtion validar(){
  var numeroTelefono=document.getElementById('#telefono');
  var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
  var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco
 
  if(numeroTelefono.value=='')
     alert('campo es obligatorio');
  else if(expresionRegular2.test(numeroTelefono.value))
    alert('error existen espacios en blanco');
  else if(!expresionRegular1.test(numeroTelefono.value))
    alert('Numero de telefono incorrecto');