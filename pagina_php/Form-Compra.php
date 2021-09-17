<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos-compras.css">
    <link rel="shortcut icon" href="https://grupobimbo-com-custom01-assets.s3.amazonaws.com/s3fs-public/favicon.ico" type="image/vnd.microsoft.icon" />
    <title>Grupo Bimbo | Compras </title>
</head>
<body>
    <!--Titulo de la pagina de compras-->
    <center><h1 class="titulo">Compra de productos</h1><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"><img class="imagen" src="Imagenes/compra.png"></center>

    <!--Formulario para realizar una compra-->
    <form action="Calculos-Bimbo.php" method="post">
            <p class="prod1"> Producto 1 <input type="text" name="Producto1" /> </p>
            <p class="precio1"> Precio del producto 1 <input type="int" name="precio1" /> </p>
            <p class="cant1"> Cantidad del producto 1 <input type="int" name="cant1" /> </p>
            <p class="prod2"> Producto 2 <input type="text" name="Producto2" /> </p>
            <p class="precio2"> Precio del producto 2 <input type="int" name="precio2" /> </p>
            <p class="cant2"> Cantidad del producto 2 <input type="int" name="cant2" /> </p>
            <p class="prod3"> Producto 3 <input type="text" name="Producto3" /> </p>
            <p class="precio3"> Precio del producto 3 <input type="int" name="precio3" /> </p>
            <p class="cant3">Cantidad del producto 3 <input type="int" name="cant3" /> </p>
            <center><p><input type="submit" name="submit" value="Calcular productos >>" /></p></center>
            <div class="frase">
                <center><p>“Con el cariño de siempre” de Bimbo</p></center>
                <center><p class="fra1">Grupo Bimbo & María Cárdenas 2021 © Todos los Derechos Reservados</p></center>
            </div>
    </form>
</body>
</html>