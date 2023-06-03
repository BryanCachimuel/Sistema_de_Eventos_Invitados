function verContrasenia(){
    let mostrar = document.getElementById("password");
    if(mostrar.type === "password"){
        mostrar.type = "text";
    }else{
        mostrar.type = "password";
    }
}

function compararContrasenias(){
    let contrasenia = document.getElementById("password");
    let confirmar_contrasenia = document.getElementById("confirmar_password");
    if(contrasenia.type === "password" && confirmar_contrasenia.type === "password"){
        contrasenia.type = "text";
        confirmar_contrasenia.type = "text";
    }else{
        contrasenia.type = "password";
        confirmar_contrasenia.type = "password";
    }
}