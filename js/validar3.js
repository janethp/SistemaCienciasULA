
function validacion() {

vr = document.getElementById("email").value;
	if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(vr)) ) {
		alert('ingrese bien el email');
 	 return false;
	}

}
