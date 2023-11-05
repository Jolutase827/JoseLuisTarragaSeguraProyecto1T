const nombre = document.getElementById('name');
const apellido = document.getElementById('lastname');
const direccion = document.getElementById('direccion');
const email = document.getElementById('email');
const contraseña = document.getElementById('pwd');
const rcontraaseña = document.getElementById('rpwd');



document.getElementById('inicioSesion').addEventListener('click',()=>{
    sessionStorage.setItem("iniciosesion","true");
});
