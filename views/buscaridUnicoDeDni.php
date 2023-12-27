<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBASICSPORT</title>
</head>
<body>
    <?php
        if(isset($_POST['precio'])&&isset($_POST['cantidad'])){
            echo "<form id='formul'>
                    <input type='number' name='precio' value='".$_POST['precio']."'>
                  <input type='number' name='cantidad' value='".$_POST['cantidad']."'>
                  </form>";
        }
    ?>
    
    <script>
        const dni = '<?=$_COOKIE['dni']?>';
        let idUnico;
        fetch(`/JoseLuisTarragaSeguraProyecto1T/APICarrito/carritoService.php?dni=${dni}`)
        .then(response => response.json())
        .then(data => {
            if(data.length>0){
                <?php
                    if(isset($_GET['id'])){
                        echo "let formul = document.getElementById('formul');
                        formul.action = `vercarrito.php?idUnicoAPoner=`+data[0]['idUnico']+`&id='".$_GET['id']."'`;
                        formul.method = 'post';
                        formul.submit();";
                    }else{
                        echo "location.href = `vercarrito.php?idUnicoAPoner=`+data[0]['idUnico'];";
                    }
                ?>
            }else{
                location.href = `vercarrito.php?idUnicoAPoner=null`;
            }
        })
        .catch(error => console.error(error))
        .finally();


    </script>
</body>
</html>