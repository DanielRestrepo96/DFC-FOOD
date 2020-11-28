/*login*/

//window.location.replace('.//principal.html');
 	//window.location.replace(".//principal.html");
//document.write("<center style='background-color: black; color:blue;   margin-top:250px; font-size:1700%;border:3px;' >Bienvenido</center>"); 	

//


document.getElementById('ingresar').onclick= function(){
	//window.location.replace('.//principal.html');
	user=document.getElementById("usuario").value;
	contra=document.getElementById("password").value;

	if(user=="admin" && contra=="1234"){
			
		document.write("<body style='background-color:black'><center><p style='font-size:1200%; font-family:seans serif; margin-top:15%; background-color:red'>Bienvenido</p> \
		</center></body>");
			
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