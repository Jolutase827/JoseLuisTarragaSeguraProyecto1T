const dnioEmail = document.getElementById('nombreCorreo');
const pwd = document.getElementById('contraseña');
const botonInicio = document.getElementById('botonInicio');
const mensajeIDmal = document.getElementById('mensajeErrorId');
const mensajePWDmal = document.getElementById('mensajeErrorPWD');
const form = document.getElementById('formularioInicioSesion');

botonInicio.addEventListener('click',()=>{
    mensajePWDmal.style.display = "none";
    mensajeIDmal.style.display = "none";
    fetch(`/JoseLuisTarragaSeguraProyecto1T/APICliente/clienteService.php?id=${dnioEmail.value}&pwd=${pwd.value}`)
    .then(response => response.json())
    .then(data=> {
            try{
                if(data=="notExistUser"){
                    mensajeIDmal.style.display = "block";
                }else if(data=="pwdIncorrect"){
                    mensajePWDmal.style.display = "block";
                }else{
                    nombreCorreo.value = data['dniCliente'];
                    pwd.value= data['nombre'];
                    form.submit();
                }
            }catch(error){
                console.log(error);
            }
        })
    .catch(error => console.error(error));
});