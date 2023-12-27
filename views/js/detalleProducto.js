const sumar = document.getElementById('sumar');
const restar = document.getElementById('restar');
const cantidad = document.getElementById('cantidadAnyadir');
const botonComprar = document.getElementById('botonComprar');
const precioDeLaCantidad = document.getElementById('precio');
const formularioDetalle = document.getElementById('formulario');
let cantidadMomentanea = cantidad.value;
precioDeLaCantidad.innerHTML = precio;

botonComprar.addEventListener('click',()=>{
    if(/\d/){
        formularioDetalle.submit();
    }
})

cantidad.addEventListener('keyup', ()=>{
    cantidadMomentanea = cantidad.value;
    precioDeLaCantidad.innerHTML =  precio * cantidadMomentanea;
});
sumar.addEventListener('click',()=>{
    if(cantidad.value<stock){
        cantidadMomentanea++;
        cantidad.value = cantidadMomentanea;
        precioDeLaCantidad.innerHTML = precio * cantidadMomentanea;
    }
})
restar.addEventListener('click', ()=>{
    if(cantidad.value>1){
        cantidadMomentanea--;
        cantidad.value = cantidadMomentanea;
        precioDeLaCantidad.innerHTML = precio * cantidadMomentanea;
    }
});