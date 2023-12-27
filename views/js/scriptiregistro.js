const nombre = document.getElementById('name');
const dni = document.getElementById('dni');
const direccion = document.getElementById('direccion');
const email = document.getElementById('email');
const contraseña = document.getElementById('pwd');
const rcontraaseña = document.getElementById('rpwd');
const formulario = document.getElementById('formulario');
const boton = document.getElementById('bregistro');
const errorNombre = document.getElementById('errorNombre'); 
const errorDni = document.getElementById('errorDNI'); 
const errorDireccion = document.getElementById('errorDireccion'); 
const errorEmail= document.getElementById('errorEmail'); 
const errorCampos = document.getElementById('errorCampos');
errorNombre.style.display = "none";
errorDni.style.display = "none";
errorDireccion.style.display = "none";
errorEmail.style.display = "none";

errorCampos.style.display="none";

function errorYaExisteUsuarioConEseEmail(){
    errorEmail.style.display = "block";
    errorEmail.innerHTML = "<p class='red'><i class='bi bi-x'></i> Ya existe usuario con ese email</p>";
    email.style.borderColor = "red";
}
function errorYaExisteUsuarioConEseDni(){
    dni.style.borderColor = "red";
    errorDni.style.display = "block";
    errorDni.innerHTML = "<p class='red'><i class='bi bi-x'></i> Ya existe usuario con ese dni</p>";
}

//Devuelve false si la contraseña no tiene buen formato
function contraseñaValida(){
    if(contraseña.value.length<8)
        return false;
    if(!/[\d]/.test(contraseña.value))
        return false;
    if(!/[\W]/.test(contraseña.value))
        return false;
    if(!/[A-Z]/.test(contraseña.value))
        return false;
    if(!/[a-z]/.test(contraseña.value))
        return false;

    return true;
}
//Devuelve false si no se repite la contraseña bien en su apartado
function comprobarRepiteContraseña(){
    if(rcontraaseña.value!=contraseña.value)
        return false;
    return true;
}

boton.addEventListener('click',()=>{
    if(comprobarTodosErrores()){
        const options= {
            method: 'POST',
            headers:{
                'Content-Type': 'aplication/json',
            },
            body: JSON.stringify({"dniCliente":dni.value,"nombre":nombre.value,"direccion":direccion.value,"email":email.value,"pwd": pwd.value}),
        };
        fetch('/JoseLuisTarragaSeguraProyecto1T/APICliente/clienteService.php',options)
        .then(response => response.json())
        .then(data=> {
            try{
                if(data=="1"){
                    errorYaExisteUsuarioConEseDni();
                    errorYaExisteUsuarioConEseEmail();
                    errorCampos.style.display="block";
                }else if(data=="2"){
                    errorYaExisteUsuarioConEseDni();
                    borrarErrorCampo(email,errorEmail);
                    errorCampos.style.display="block";
                }else if(data == "3"){
                    errorYaExisteUsuarioConEseEmail();
                    borrarErrorCampo(dni,errorDni);
                    errorCampos.style.display="block";
                }else{
                    formulario.submit();
                }
            }catch(error){
                    console.log(error);
                }
        })
        .catch(error => console.error(error));
    }else{
        enseñarTodosErrores();
        errorCampos.style.display="block";
    }
});




document.getElementById('inicioSesion').addEventListener('click',()=>{
    sessionStorage.setItem("iniciosesion","true");
});
