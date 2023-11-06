const caracteres = document.getElementById('caracteres');
const mayuscula = document.getElementById('mayuscula');
const minuscula = document.getElementById('minuscula');
const numero = document.getElementById('numero');
const especial = document.getElementById('especial');
const contenedor = document.getElementById('contrenedorErroresContraseña');
const errorRepetir = document.getElementById('errorRepetir');
errorRepetir.style.display="none";
function cambiarABueno(valor){
    valor.getElementsByTagName('i')[0].classList= "bi bi-check2";
    valor.classList = "green";
}
function cambiarAMal(valor){
    valor.getElementsByTagName('i')[0].classList="bi bi-x";
    valor.classList = "red";
}

contraseña.addEventListener('click',()=>{
    contenedor.style.display = "grid";
})

function comprobarCampoVacío(campo, campodeError){
    if(campo.value.length>0){
        borrarErrorCampo(campo, campodeError);
        return true;
    }else{
        campo.style.borderColor = "red";
        campoVacio(campodeError);
        return false;
    }
}
function comprobarDniValido(){
    if(!/\d{8}[A-Z]$/.test(dni.value)){
        dni.style.borderColor = "red";
        errorDni.style.display = "block";
        errorDni.innerHTML = "<p class='red w-75'><i class='bi bi-x'></i> El formato de dni no es valido</p>";
        return false;
    }else{
        dni.style.borderColor = "gray";
        errorDni.style.display = "none";
        errorDni.innerHTML = "";
        return true;
    }
}
function borrarErrorCampo(campo,campodeError){
    campo.style.borderColor = "gray";
    campodeError.style.display = "none";
    campodeError.innerHTML = "";
}

function campoVacio(campodeError){
    campodeError.style.display = "block";
    campodeError.innerHTML = "<p class='red'><i class='bi bi-x'></i> Este campo no puede quedar vacio</p>";
}

rcontraaseña.addEventListener('keyup',enseñarErrorRepetir);
function enseñarErrorRepetir(){
    if(rcontraaseña.value!=contraseña.value){
        errorRepetir.style.display="block";
        rcontraaseña.style.borderColor="red"; 
    }else{
        errorRepetir.style.display="none";
        rcontraaseña.style.borderColor="gray"; 
    }
}
function enseñarErroresContraseña(){
    contenedor.style.display = "grid";
    let valor = true;
    if(contraseña.value.length<8){
        cambiarAMal(caracteres);
        valor =false;
    }else{
        cambiarABueno(caracteres);
    }
    if(/[\d]/.test(contraseña.value)){
        cambiarABueno(numero);
    }else{
        cambiarAMal(numero);
        valor =false;
    }
    if(/[\W]/.test(contraseña.value)){
        cambiarABueno(especial);
    }else{
        cambiarAMal(especial);
        valor =false;
    }
    if(/[A-Z]/.test(contraseña.value)){
        cambiarABueno(mayuscula);
    }else{
        cambiarAMal(mayuscula);
        valor =false;
    }
    if(/[a-z]/.test(contraseña.value)){
        cambiarABueno(minuscula);
    }else{
        cambiarAMal(minuscula);
        valor =false;
    }
    if(valor){
        contraseña.style.borderColor="gray"; 
    }else{
        contraseña.style.borderColor="red"; 
    }
} 
function comprobarTodosErrores(){
    if(!contraseñaValida()){
        return false;
    }
    if(!comprobarRepiteContraseña){
        return false;
    }
    if(!comprobarCampoVacío(nombre,errorNombre))
        return false;
    if(!comprobarCampoVacío(dni,errorDni))
        return false;
    if(!comprobarDniValido()){
        return false;
    }
    if(!comprobarCampoVacío(direccion,errorDireccion))
        return false;
    if(!comprobarCampoVacío(email,errorEmail))
        return false;
    return true;
}
function enseñarTodosErrores(){
    enseñarErrorRepetir();
    enseñarErroresContraseña();
    comprobarCampoVacío(nombre,errorNombre);
    if(comprobarCampoVacío(dni,errorDni))
        comprobarDniValido();
    comprobarCampoVacío(direccion,errorDireccion);
    comprobarCampoVacío(email,errorEmail);
}
contraseña.addEventListener('keyup',enseñarErroresContraseña);

