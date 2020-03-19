 function validar(){
    var  name,dni,tel,date,gen,client,sede;

    name= document.forms["register"]["name"].value;
    dni= document.forms["register"]["dni"].value;
    tel= document.forms["register"]["tel"].value;
    date= document.forms["register"]["date"].value;
    gen= document.forms["register"]["gen"].value;
    client = document.forms["register"]["client"].value;
    sede = document.forms["register"]["sede"]


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
     

  if(client == ""){
      alert("ingrese el cliente");
      document.getElementById("client").focus();
      return false;
  }
   document.getElementById("myForm").submit();
  
   
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