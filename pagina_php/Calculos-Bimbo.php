<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://grupobimbo-com-custom01-assets.s3.amazonaws.com/s3fs-public/favicon.ico" type="image/vnd.microsoft.icon" />
    <title>Grupo Bimbo | Compras </title>
</head>
<body>
    <font face="Tahoma" </font>
    <?php
        //Titulo
        echo '<center><h1>Pago de los productos</h1></center>';
    ?>

    <!--Formulario para la compra de productos-->

    <body bgcolor="B0DDF9">
    <font face="Arimo" </font>
    <center>
    <?php
        //Variable para el primer producto 
        $Producto1= $_POST['Producto1'];
        echo "<h5>Su primer producto a comprar es: " . $Producto1 . "<br/></h5>";

        //Variable para el precio del primer producto
        $precio1= $_POST['precio1'];
        echo "<h5>El precio de su primer producto es: $" . $precio1 . "<br/></h5>";

        //Variable para la cantidad del primer producto 
        $cant1= $_POST['cant1'];
        echo "<h5>La cantidad comprada del primer producto es: " . $cant1 . "<br/></h5>";
  
        //Valor total del primer producto por la cantidad
        echo "<h5>El precio total del primer producto es: $" . $precio1 * $cant1 . "<br/></h5>";

        //Esta es la variable que calcula el total del producto 1
        $totalpro1= $precio1 * $cant1;


        //Variable para el segundo producto 
        $Producto2= $_POST['Producto2'];
        echo "<h5>Su segundo producto a comprar es: " . $Producto2 . "<br/></h5>";

        //Variable para el precio del segundo producto
        $precio2= $_POST['precio2'];
        echo "<h5>El precio de su segundo producto es: $" . $precio2 . "<br/></h5>";

        //Variable para la cantidad del segundo producto 
        $cant2= $_POST['cant2'];
        echo "<h5>La cantidad comprada del segundo producto es: " . $cant2 . "<br/></h5>";
  
        //Valor total del segundo producto por la cantidad
        echo "<h5>El precio total del segundo producto es: $" . $precio2 * $cant2 . "<br/></h5>";

        //Esta es la variable que calcula el total del producto 2
        $totalpro2= $precio2 * $cant2;

        //Variable para el tercer producto 
        $Producto3= $_POST['Producto3'];
        echo "<h5>Su tercer producto a comprar es: " . $Producto3 . "<br/></h5>";

        //Variable para el precio del tercer producto
        $precio3= $_POST['precio3'];
        echo "<h5>El precio de su tercer producto es: $" . $precio3 . "<br/></h5>";

        //Variable para la cantidad del tercer producto 
        $cant3= $_POST['cant3'];
        echo "<h5>La cantidad comprada del tercer producto es: " . $cant3 . "<br/></h5>";
  
        //Valor total del tercer producto por la cantidad
        echo "<h5>El precio total del tercer producto es: $" . $precio3 * $cant3 . "<br/></h5>";

        //Esta es la variable que calcula el total del producto 3
        $totalpro3= $precio3 * $cant3;

        //Esta es la variable que calcula el total de los productos comprados
        $total= $totalpro1 + $totalpro2 + $totalpro3;
        echo "<h5>El total a pagar de su compra es: $" . $total . "<br/></h5>";
    ?>
    </center>

    <!--Formulario para volver a la pagina de crear un perfil-->

    <form action="Pagina-Bimbo.php" method="post">
        <center><p><input type="submit" name="submit" value="<< Volver pagina de inicio"/></p></center>
    </form>
</body>
</html>