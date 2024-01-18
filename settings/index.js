document.getElementById("btn_registrarse").addEventListener("click", registrarse);
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciar_sesion);


let contenedor = document.querySelector(".container");
let form_register = document.querySelector(".register_form");
let form_loggin = document.querySelector(".loggin_form");
let caja_register = document.querySelector(".register_box");
let caja_loggin = document.querySelector(".loggin_box");
let logginRegisterContainer = document.querySelector(".loggin-register");


function iniciar_sesion() {
    form_register.style.display = "none";
    contenedor.style.lef = "410px";
    form_loggin.style.display = "block";
    caja_register.style.opacity = "1";
    caja_loggin.style.opacity = "0";
    logginRegisterContainer.style.left = "10px";
}


function registrarse() {
    form_register.style.display = "block";
    contenedor.style.lef = "410px";
    form_loggin.style.display = "none";
    caja_register.style.opacity = "0";
    caja_loggin.style.opacity = "1";
    logginRegisterContainer.style.left = "410px";
}