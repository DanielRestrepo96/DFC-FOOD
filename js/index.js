


/*index*/
document.getElementById("formulario").style.fontWeight="bold";




document.getElementById("comidarap").onchange = function (){
  food=document.getElementById("comidarap").value
  if (food== "EMPANADAS"){
    document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                      <option value='POLLO'>POLLO</option> \
                                                      <option value='CARNE'>CARNE</option> \ ";  

    document.getElementById("tipocomida").onchange= function EMPANADAS(){
     tipo=document.getElementById("tipocomida").value;
     if( tipo== "CARNE"){

      document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                  <option value='QUINCE'>15</option> \
                                                  <option value='VEINTE'>20</option> ";

      document.getElementById("valorpro").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                      <option value='cincomil'>$ 5.000</option> \
                                                      <option value='diezmil'>$ 10.000 + GASEOSA</option> ";
    }
    if(tipo=="POLLO"){
      document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                    <option value='QUINCE'>15</option> \
                                                    <option value='VEINTE'>20</option> ";

      document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='CINCOMIL'>$ 5.000</option> \
                                                        <option value='VEINTE'$> 10.000 + GASEOSA</option> ";
    }  
  }

}
if (food== "SALCHIPAPAS"){
  document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                    <option value='SALCHIPAPASESPECIALES'> SALCHIPAPAS ESPECIALES</option> \
                                                    <option value='SALCHIPAPASSENCILLAS'>SALCHIPAPAS SENCILLAS</option> \  ";  
      //salchipapas
      document.getElementById("tipocomida").onchange= function SALCHIPAPAS(){
        tipo=document.getElementById("tipocomida").value;
        if( tipo== "SALCHIPAPASESPECIALES"){
          document.getElementById("canti").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='ESPECIALUNO'>1</option> \ ";

          document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                            <option value='sientemil'>$ 7.000</option> \
                                                            <option value='oncemil'>$ 11.000 + GASEOSA</option> ";
        }
        if(tipo=="SALCHIPAPASSENCILLAS"){
          document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                       <option value='SENCILLAUNO'>1</option> \ ";
          document.getElementById("valorpro").innerHTML= "<option value='CINCOMIL'>$ 5.000</option> \
                                                          <option value='OCHOMIL'>$ 8.000 + GASEOSA</option> ";
        }
      }

    }
    if (food== "PERROS"){
      document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                        <option value='PERROS ESPECIALES'>PERROS ESPECIALES</option> \
                                                        <option value='PERROS SENCILLOS'>PERROS SENCILLOS</option> \  "; 
      //PERROS 
      document.getElementById("tipocomida").onchange= function SALCHIPAPAS(){
        tipo=document.getElementById("tipocomida").value;

        if( tipo== "PERROS ESPECIALES"){
          document.getElementById("canti").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='ESPECIALUNO'>1</option> \ ";

          document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                            <option value='sientemil'>$ 7.000</option> \
                                                            <option value='oncemil'>$ 13.000 + LIMONADA</option> ";
        }
        if(tipo=="PERROS SENCILLOS"){
          document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                       <option value='SENCILLAUNO'>1</option> \ ";
          document.getElementById("valorpro").innerHTML= "<option value='SEISQUINIENTOS'>$ 6.500</option> \
                                                          <option value='SIETEQUINIENTOS'>$ 7.500 + GASEOSA</option> ";
        }
      }

    }
    if (food== "HAMBURGUESAS"){
      document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option>\
                                                        <option value='HAMBURGUESAS ESPECIALES'>HAMBURGUESAS ESPECIALES</option> \
                                                        <option value='HAMBURGUESAS SENCILLAS'>HAMBURGUESAS SENCILLAS</option> \  ";  

      //HAMBURGUESA
      document.getElementById("tipocomida").onchange= function SALCHIPAPAS(){
        tipo=document.getElementById("tipocomida").value;
        if( tipo== "HAMBURGUESAS ESPECIALES"){
          document.getElementById("canti").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='ESPECIALUNO'>1</option> \ ";

          document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                            <option value='NUEVEMIL'>$ 9.000</option> \
                                                            <option value='DOCEQUINIENTOS'>$ 12.500 + GASEOSA</option> ";
        }
        if(tipo=="HAMBURGUESAS SENCILLAS"){
          document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                       <option value='SENCILLAUNO'>1</option> \ ";
          document.getElementById("valorpro").innerHTML= "<option value='OCHOOMIL'>$ 8.000</option> \
                                                          <option value='DIEZMIL'>$ 10.000 + GASEOSA</option> ";
        }
      }
    }
    if (food== "ALITAS BBQ"){
      document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                        <option value='ALITAS ESPECIALES'>ALITAS ESPECIALES</option> \
                                                        <option value='ALITAS SENCILLAS'>ALITAS SENCILLAS</option> \  ";  

      //ALITAS
      document.getElementById("tipocomida").onchange= function SALCHIPAPAS(){
        tipo=document.getElementById("tipocomida").value;
        if( tipo== "ALITAS ESPECIALES"){
          document.getElementById("canti").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='ESPECIALUNO'>1</option> \ ";

          document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                            <option value='DOCEMIL'>$ 12.000</option> \
                                                            <option value='VEINTEMIL'>$ 20.000 + GASEOSA</option> ";
        }
        if(tipo=="ALITAS SENCILLAS"){
          document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                       <option value='SENCILLAUNO'>1</option> \ ";
          document.getElementById("valorpro").innerHTML= "<option value='OCHOMIL'>$ 8.000</option> \
                                                          <option value='DIEZYOCHOMIL'>$ 18.000 + GASEOSA</option> ";
        }
      } 
    }
    if (food== "MANDINGAS"){
      document.getElementById("tipocomida").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                        <option value='MANDINGAS ESPECIALES'>MANDINGAS ESPECIALES</option> \
                                                        <option value='MANDINGAS SENCILLAS'>MANDINGAS SENCILLAS</option> \  "; 
      //MANDINGAS 
      document.getElementById("tipocomida").onchange= function SALCHIPAPAS(){
        tipo=document.getElementById("tipocomida").value;
        if( tipo== "MANDINGAS ESPECIALES"){
          document.getElementById("canti").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                        <option value='ESPECIALUNO'>1</option> \ ";

          document.getElementById("valorpro").innerHTML= " <option value='seleccione'>seleccione</option> \
                                                            <option value='QUINCEMIL'>$ 15.000</option> \
                                                            <option value='VEINTEMIL'>$ 20.000 + GASEOSA</option> ";
        }
        if(tipo=="MANDINGAS SENCILLAS"){
          document.getElementById("canti").innerHTML= "<option value='seleccione'>seleccione</option> \
                                                       <option value='SENCILLAUNO'>1</option> \ ";
          document.getElementById("valorpro").innerHTML= "<option value='NUVEMIL'>$ 9.000</option> \
                                                          <option value='DIEZYSEISMIL'>$ 16.000 + GASEOSA</option> ";
        }
      }
    }

  }

document.getElementById("comp").onclick= function(){
  dir=document.getElementById("direc").value;
  nom=document.getElementById("name").value;
	alert("Compra exitosa"+","+"señor "+nom+" y será enviada a la dirección " + dir);
}

document.getElementById("cance").onclick=function(){
	alert("compra cancelada")
}








