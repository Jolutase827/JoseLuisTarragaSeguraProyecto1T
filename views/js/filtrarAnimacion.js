let activo = false;
document.getElementById('filtrar').innerHTML="<i class='bi bi-chevron-down'></i><strong>Productos</strong>";
document.getElementById('filtrar').addEventListener('click',()=>{
    if(activo){
        document.getElementById('filtrar').innerHTML="<i class='bi bi-chevron-down'></i><strong>Productos</strong>";
        activo = false;
    }else{
        document.getElementById('filtrar').innerHTML="<i class='bi bi-chevron-up'></i><strong>Productos</strong>";
        activo = true;
    }
});