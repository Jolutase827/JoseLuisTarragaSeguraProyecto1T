const main = document.getElementById('main');
let producto;
let primerbloque;
let nombre;
let marca;
let coste;
let casiAgotado;
let segundoBloque;
let contenedorTrush;
let spanCantidad;
let menos;
let inputNumero;
let costeTotal = document.createElement('strong');
let suma;
let costeCompleto=0;
let valoresProductos;
let valoresProducto;
let array = [];
let aux;


fetch(`/JoseLuisTarragaSeguraProyecto1T/APIProducto/productoService.php`)
.then(response1 => response1.json())
.then(data1=>{
    valoresProductos = data1;        
})
.catch(error1=>console.log(error1))
.finally(()=>fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?idUnico=${idUnico}`)
.then(response => response.json())
.then(data=> {
        if(data.length >0){
            let productos = document.createElement('div');
            productos.classList = "container contenedorProductos sombra row d-flex r pb-5 pe-4 ps-4";
            data.forEach(element => {
                valoresProducto = valoresProductos.filter(product=> product['idProducto']==element['idProducto'])[0];
                producto = document.createElement('div');
                primerbloque = document.createElement('div');
                nombre = document.createElement('h3');
                marca = document.createElement('p');
                coste = document.createElement('p');
                casiAgotado = document.createElement('p');
                segundoBloque = document.createElement('div');
                contenedorTrush = document.createElement('h4');
                spanCantidad = document.createElement('span');
                menos = document.createElement('strong');
                inputNumero = document.createElement('input');
                suma = document.createElement('strong');
                costeCompleto += parseInt(element['coste']);
                producto.classList= "row m-0 contenedorProducto pb-4 pt-5";
                producto.innerHTML = "<img src='/JoseLuisTarragaSeguraProyecto1T/imagenes/"+valoresProducto['foto']+"' alt='foto producto' class='col-3' height='300px'/>";
                primerbloque.classList = "col-4 d-flex flex-column";
                nombre.textContent = valoresProducto['nombre'];
                marca.textContent = "Marca: "+valoresProducto['marca'];
                nombre.classList = "h1size";
                coste.textContent = "Coste: "+element['coste']+"€";
                casiAgotado.classList = "mt-auto casiagotado";
                casiAgotado.innerHTML ='<i class="bi bi-hourglass-split"></i> Casi agotado';
                segundoBloque.classList = "d-flex justify-content-between flex-column align-items-end col-5";
                contenedorTrush.classList = "animacionDeSombra";
                contenedorTrush.innerHTML = '<i class="bi bi-trash"></i>';
                contenedorTrush.addEventListener('click',()=>{
                    const options= {
                        method: 'DELETE',
                        headers:{
                            'Content-Type': 'aplication/json',
                        },
                        body: JSON.stringify({"nlinea": element['nlinea']}),
                    };
                    fetch('/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php',options)
                    .then(response2=>response2.json())
                    .then(data2=>console.log(data2))
                    .catch(error2 => console.error(error2))
                    .finally(()=>location.replace('vercarrito.php'));
                })
                spanCantidad.classList = 'sombra cantidad';
                menos.classList = "rounded-left";
                menos.textContent = "-";
                inputNumero.classList = "formaNumero";
                inputNumero.value = element['cantidad'];
                inputNumero.type = "text";
                inputNumero.name = "cantidad";
                suma.classList = "rounded-right";
                suma.textContent = "+";
                inputNumero.id = "input"+element['nlinea'];
                coste.id = "coste"+element['nlinea'];
                aux = inputNumero;
                array.push({"nlinea":element['nlinea'],"cantidad":element['cantidad'],'precio':element['coste']/element['cantidad']});
                aux.addEventListener('keyup', ()=>{
                    document.getElementById('coste'+element['nlinea']).textContent =  "Coste: "+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value))+"€" ;
                    costeTotal.textContent = "Coste total: "+(costeCompleto-(element['coste']/element['cantidad'])+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value)))+"€";
                    array.filter(elemento=> elemento['nlinea']==element['nlinea'])[0]['cantidad']=document.getElementById("input"+element['nlinea']).value;
                    console.log(array);
                });
                suma.addEventListener('click',()=>{
                    document.getElementById("input"+element['nlinea']).value = parseInt(document.getElementById("input"+element['nlinea']).value)+1;
                    document.getElementById('coste'+element['nlinea']).textContent =  "Coste: "+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value))+"€" ;
                    costeTotal.textContent = "Coste total: "+(costeCompleto-(element['coste']/element['cantidad'])+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value)))+"€";
                    array.filter(elemento=> elemento['nlinea']==element['nlinea'])[0]['cantidad']=document.getElementById("input"+element['nlinea']).value;
                    console.log(array);
                })
                menos.addEventListener('click', ()=>{
                    if(document.getElementById("input"+element['nlinea']).value>1){
                        document.getElementById("input"+element['nlinea']).value = parseInt(document.getElementById("input"+element['nlinea']).value)-1;
                        document.getElementById('coste'+element['nlinea']).textContent =  "Coste: "+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value))+"€" ;
                        costeTotal.textContent = "Coste total: "+(costeCompleto-(element['coste']/element['cantidad'])+((element['coste']/element['cantidad'])* parseInt(document.getElementById("input"+element['nlinea']).value)))+"€";
                        array.filter(elemento=> elemento['nlinea']==element['nlinea'])[0]['cantidad']=document.getElementById("input"+element['nlinea']).value;
                        console.log(array);
                    }
                });
                primerbloque.append(nombre);
                primerbloque.append(marca);
                primerbloque.append(coste);
                primerbloque.append(casiAgotado);
                spanCantidad.append(menos);
                spanCantidad.append(inputNumero);
                spanCantidad.append(suma);
                segundoBloque.append(contenedorTrush);
                segundoBloque.append(spanCantidad);
                producto.append(primerbloque);
                producto.append(segundoBloque);
                productos.append(producto);

            });
            let divComprar = document.createElement('div');
            let divBotones = document.createElement('div');
            let botonComprar = document.createElement('button');
            let botonActualizar = document.createElement('button');
            divComprar.classList = "row d-flex justify-content-between";
            costeTotal.classList = "col-3";
            costeTotal.textContent = "Coste total: "+costeCompleto+"€";
            divBotones.classList = "col-4 row m-0 mt-4 p-0 d-flex justify-content-between"
            botonComprar.classList = "btn botoncomprar  col-6";
            botonActualizar.classList = "btn botoncomprar col-4";
            botonActualizar.innerHTML="<i class='bi bi-arrow-clockwise'></i> Actualizar";
            botonComprar.innerHTML = '<i class="bi bi-wallet2"></i> Pagar';
            botonComprar.addEventListener('click',()=> location.replace('confirmar.php'));
            botonActualizar.addEventListener('click',()=>{
                array.forEach(element => {
                    const options= {
                        method: 'PUT',
                        headers:{
                            'Content-Type': 'aplication/json',
                        },
                        body: JSON.stringify({"nlinea":element['nlinea'],"cantidad":parseInt(element['cantidad']), "coste": element['precio']*parseInt(element['cantidad'])}),
                    };
                    fetch('/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php',options)
                    .then(response => response.json())
                    .then(data=> {
                        try{
                            console.log(data);
                        }catch(error){
                                console.log(error);
                        }
                    })
                    .catch(error => console.error(error))
                    .finally(()=>location.replace('vercarrito.php'));
                });
            });


            divBotones.append(botonActualizar);
            divBotones.append(botonComprar);
            divComprar.append(costeTotal);
            divComprar.append(divBotones);
            productos.append(divComprar);
            main.append(productos);
        }else{
            main.innerHTML= `<div class="container contenedorProductos sombra row d-flex align-items-center pb-5 pe-4 ps-4">
                <div class="row">
                    <h1 class="h1size text-center"><i class="bi bi-cart-x-fill"></i> NO HAY PRODUCTOS DISPONIBLES</h1>
                </div>
            </div> `;
        }   
})
.catch(error => console.error(error)));

