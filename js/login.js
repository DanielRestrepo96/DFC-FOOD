/*login*/
var user="";
var contra="";
document.getElementById("ingresan").onclick=function alerta(){

 user=document.getElementById("usuario").value;
 contra=document.getElementById("password").value;
 var pagina= "../principal.html"

 
 if (user=="admin" && contra=="1234"){
 	/*window.open("../principal.html","_self")*/



 	window.location.replace(pagina,"_self");
 	alert("has ingresado")
 	
 	
 	
 } else{
 	alert("usuario y contraseña incorrectos")
  }
}