// JavaScript Document
var voltaje = document.getElementById("voltaje");
var amperaje = document.getElementById("amperaje");
var pow = document.getElementById("potencia");


$(document).ready(function () {
  $("#formulario").validate({
      rules: {
        name: {
          required: true,
          minlength: 3
        },
        number: true,
        min: 0
      }
    }
  });
});


/*Mensaje que muestra la potencia del sistemas
para verificar su correcto funcionamiento */
function calculoPotencia() {
  var voltaje = document.getElementById("voltaje");
  var amperaje = document.getElementById("amperaje");
  var pow = document.getElementById("potencia");

  var potencia = voltaje.value * amperaje.value;
  if (potencia > 0) {
    alert("La potencia del sistema es: " + potencia + "KVA")
    potencia.innerHTML = potencia.value;
    return false;
  } else {
    return true;
  }
}


function verificarNombre() {
	  const input = document.getElementById('nombre');
  if(!input.checkValidity()) {
    alert('El campo no es válido.');
	  
  } else {
    alert('El campo es válido.');
  }
	
}
