var enviar=document.querySelector("#enviar");
var Actualizar=document.querySelector("#actualizar");
var usuario=document.querySelector("#usuario");
var cancelar=document.querySelector(".cancelar");
var aceptar=document.querySelector(".aceptar");
enviar.addEventListener("click",(e)=>{
    
    var usuario=document.querySelector("#usuario");
    var nombre=document.querySelector("#nombre");

    var mensaje=document.querySelector("#mensaje");
    if (mensaje.value.length<=0) {
        e.preventDefault();
        alert("No puedes dejar el mensaje en blanco")
    }
    else if(mensaje.value.length>=9000){
        e.preventDefault();
        alert("No puedes Escribir mas de 9.000 caracteres en el mensaje")
    }
    else{
        nombre.value=usuario.innerHTML
    }
});
usuario.addEventListener("click",(e)=>{
    var salir=document.querySelector(".salir").style.visibility="visible";
});
cancelar.addEventListener("click",(e)=>{
    var salir=document.querySelector(".salir").style.visibility="hidden";
});
aceptar.addEventListener("click",(e)=>{
    location.href="salir.php"
});
Actualizar.addEventListener("click",(e)=>{
    location.reload("")
});