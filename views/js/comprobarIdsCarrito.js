let idUnicoNuevo;
let carritoAgeno = false;
const anyadirAlCarrito = ()=>{
    fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?dni=${dni}`)
    .then(response1 => response1.json())
    .then(data1 => {
        if(data1.length>0){
            idUnicoNuevo = data1[0]['idUnico'];
        }else{
            idUnicoNuevo = idUnico;
        }
    })
    .catch(error1 => console.error(error1))
    .finally(()=>{
        const options= {
            method: 'PUT',
            headers:{
                'Content-Type': 'aplication/json',
            },
            body: JSON.stringify({"idUnico":idUnico,"dniCliente":dni, "idUnicoNuevo": idUnicoNuevo}),
        };
        fetch('/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php',options)
        .then(response2 => response2.json())
        .then(data2=> {
            console.log(data2);
        })
        .catch(error1 => console.error(error1))
        .finally(()=>location.replace(`remplazarOborrarCarrito.php?idUnico=${idUnicoNuevo}`));
    });
};
const poneridCarritoDelDni = ()=>{
    fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?dni=${dni}`)
    .then(response3 => response3.json())
    .then(data3 =>{
        if(data3.length>0){
            location.replace(`remplazarOborrarCarrito.php?idUnico=${data3[0]['idUnico']}`);
        }else{
            location.replace(`remplazarOborrarCarrito.php`);
        }
    })
    .catch(error3=> console.log(error3));
};
fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?idUnico=${idUnico}`)
.then(response => response.json())
.then(data =>{
    if(data.length>0){
        carritoAgeno = data[0]['dniCliente']==null;
    }
})
.catch(error=>console.log(error))
.finally(()=>{
    if(carritoAgeno){
        anyadirAlCarrito();
    }else{
        poneridCarritoDelDni();
    }
});


