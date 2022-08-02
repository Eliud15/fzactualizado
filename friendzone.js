var enviar=document.querySelector("#enviar");
var Actualizar=document.querySelector("#actualizar");
var usuario=document.querySelector("#usuario");
var cancelar=document.querySelector(".cancelar");
var aceptar=document.querySelector(".aceptar");
var body=document.querySelector("#body");
document.addEventListener("DOMContentLoaded",scrolldown);

usuario.addEventListener("click",()=>{
     var salir=document.querySelector(".salir")
    salir.classList.add('aparecer')
    salir.style.visibility="visible"
    
});
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
    window.scroll(0,900000000000000)
});

cancelar.addEventListener("click",(e)=>{
    var salir=document.querySelector(".salir")
    salir.classList.remove('aparecer')
    salir.style.visibility="hidden";
    
});
aceptar.addEventListener("click",(e)=>{
    location.href="salir.php"
});
Actualizar.addEventListener("click",(e)=>{
    location.reload("")
    scrolldown() 
    window.scroll(0,900000000000000)
});
function scrolldown() {
    window.scroll({
        top: 9000000000000,
        left: 0,
        behavior: 'smooth'
      })
      
}