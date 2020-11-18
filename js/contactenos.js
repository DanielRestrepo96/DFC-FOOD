
/*contactanos*/
document.getElementById("envio").onclick=function(){
	nom=document.getElementById("formGroupExampleInput").value
	ped=document.getElementById("formGroupExampleInput2").value
	dir=document.getElementById("formGroupExampleInput5").value


	alert("señor "+nom + ","+"su pedido de "+ped+" se enviara a la siguiente dirección "+dir)
}