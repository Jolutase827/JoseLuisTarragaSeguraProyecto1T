fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?idUnico=${idUnico}&idProducto=${idProducto}`)
.then(response => response.json())
.then(data=> {
    if(data==false){
        const options= {
            method: 'POST',
            headers:{
                'Content-Type': 'aplication/json',
            },
            body: JSON.stringify({"idUnico": idUnico,"dniCliente":dni,"idProducto":idProducto,"cantidad":cantidad, "coste": precio*cantidad}),
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

    }else{
        const options= {
            method: 'PUT',
            headers:{
                'Content-Type': 'aplication/json',
            },
            body: JSON.stringify({"nlinea":data['nlinea'],"cantidad":cantidad+parseInt(data['cantidad']), "coste": precio*(cantidad+parseInt(data['cantidad']))}),
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
    }

})
.catch(error => console.error(error));



