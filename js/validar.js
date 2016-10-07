
//alert("llamado al archivo jas exitos");

function validacion() {

	var valor = document.getElementById("cedula").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert("INGRESE NUMERO DE CEDULA");
 			 return false;
			}
	val = document.getElementById("cedula").value;
	var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
 
	if( !(/^[E,V]\d{7,8}$/. test(val)) ) {
		alert("Incorrecto vuelva a ingresar la cedula ejm: V00000000  / E00000000");
	  return false;
	}
 	var valor = document.getElementById("nombre").value;
	if( valor == ""){
		alert("Registre nombre");
 			 return false;
			}
	if( !(/^[a-z,A-Z]/. test(valor))) {
		alert("Nombre invalido");
 			 return false;
			}

	var valor = document.getElementById("apellido").value;
	if( valor == ""){
		alert("Registre el Apellido");
 			 return false;
			}

	if( !(/^[a-z,A-Z]/. test(valor))) {
		alert("Apellido invalido");
 			 return false;
			}



	var indice = document.getElementById("carrera").selectedIndex;
		if( indice == null || indice == 0 ) {
		alert("Seleccione  la carrera");
 			 return false;
			}

	
 
	
}
