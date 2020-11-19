/*login*/

//window.location.replace('.//principal.html');
 	//window.location.replace(".//principal.html");
 	
document.getElementById('ingresar').onclick= function(){
	//window.location.replace('.//principal.html');
	user=document.getElementById("usuario").value;
	contra=document.getElementById("password").value;

	if(user=="admin" && contra=="1234"){
			
			
			document.write("Bienvenido");
			window.location.replace('.//principal.html');
		
	}else{
		alert("Usuario o contraseña incorrectos");
		alert("por favor verifique los datos")
	}
}
console.log(document.getElementById('ingresar').value);

function ingres(){
	window.location.replace('.//principal.html');
}