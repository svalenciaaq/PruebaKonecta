function validarUpdate(){

    var  name,dni,tel,date,gen,client,sede;

    name= document.forms["delete"]["name"].value;
    dni= document.forms["delete"]["dni"].value;
    tel= document.forms["delete"]["tel"].value;
    date= document.forms["delete"]["date"].value;
    gen= document.forms["delete"]["gen"].value;
    client = document.forms["delete"]["client"].value;
    sede = document.forms["delete"]["sede"].value;


    if(name ==""){
        alert("Ingrese el nombre");
        document.getElementById("name").focus();
        return false;

    }


    if(tel ==""){
        alert("Ingrese el telefono");
        document.getElementById("tel").focus();
        return false;
    }else if(isNaN(tel)){
        alert("el telefono ingresada no es un numero");
        document.getElementById("tel").focus();
        return false;
    }


    if(dni ==""){
        alert("ingrese la cedula");
        document.getElementById("dni").focus();
        return false;
    }else if(isNaN(dni)){
        alert("La cedula ingresada no es un numero");
        document.getElementById("dni").focus();
        return false;
    }


    
    if(date ==""){
        alert("Ingrese la fecha");
        document.getElementById("date").focus();
        return false;
    }else {
        var edad =calcularEdad();
        if(edad  < 0){
            alert("La fecha ingresada no es posible");
            document.getElementById("date").focus();
            return false;
        }
    }


    if(gen == "notsel"){
        alert("Seleccione un genero");
        document.getElementById("gen").focus();
        return false;
    }
     

  if(client == ""){
      alert("ingrese el cliente");
      document.getElementById("client").focus();
      return false;
  }

  
  if(sede == "notsel2"){
    alert("Seleccione una sede");
    document.getElementById("sede").focus();
    return false;
}



   document.getElementById("formDel").submit();
  
   
}

function calcularEdad(){
    var fecha,año,mes,dia,año1,mes1,dia1,fecha1;

    fecha = document.getElementById("date").value.split("-");
    año = fecha[0];
    mes = fecha[1];
    dia = fecha[2];
    fecha1 = new Date();
    año1 = fecha1.getFullYear();
    mes1 = fecha1.getMonth();
    dia1= fecha1.getDay();


    edad = año1 - año;
    if(mes1 < mes && dia1 < dia){
        edad--;
    }
    

    
    return edad;

}