/* registrarse*/

var name="";
var corre="";
var cont="";
document.getElementById("ingreso").onclick=function resgistro(){
	name=document.getElementById("nombre").value;
	corre=document.getElementById("correo").value;
	cont=document.getElementById("contrasena").value;
	console.log("ingreso")
	if(name=="Angel" & cont=="123456" & corre=="angel123@gmail.com"){
		alert(" El usuario a hiso registrado correctamente")
	}else{
		alert("usuario ya existe")
	}
}