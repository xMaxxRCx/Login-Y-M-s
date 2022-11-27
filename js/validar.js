function validar(){
    var nam = document.getElementById('nickname').value;
    var nom = document.getElementById('Nombres').value;
    var apl = document.getElementById('Apellidos').value;
    var em = document.getElementById('mail').value;
    var cont = document.getElementById('password').value;
    var tpu = document.getElementById('user_free').value;

    if(nam == ""){
        alert("Ingresa tu nickname");
    } 
    else if (nom == ""){
        alert("Ingreas tu Nombre");
    }
    else if (apl == ""){
        alert("Ingresa tus Apellidos");
    }
    else if (em == ""){
        alert("Ingresa tu Email");
    }
    else if (cont == ""){
        alert("Ingresa tu contraseña");
    }
    else if (tpu == ""){
        alert("Seleccionalo");
    }

}