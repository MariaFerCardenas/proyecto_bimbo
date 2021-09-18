<center>

    <!--Diseño de la letra de los datos almacenados-->
    <body bgcolor="#D7F6F5">
    <font face="Tahoma" </font>

<?php
    //Estas son las variables del formulario
    $idProducto = $_POST['idProducto'];
    $valorProd = $_POST ['valorProd'];
    $oferta = $_POST ['oferta'];

    //Estas son las variables del costo de cada producto
    $Gansito = 2000;
    $Tortillas = 5000;
    $Pinguino = 1500;
    $Pan_artesano = 4500;
    $Pan_blanco = 5000;
    $Pan_integral = 6000;

    //Esto es lo que le aparecera al usuario
    echo "<h1>Datos del formulario recibidos desde la página web</h1>";
    echo " - El número de identificación del producto es: " . $idProducto . "<br/>";
    echo " - El costo cobrado por el producto es: " . $valorProd . "<br/>";
    echo " - La oferta fue aplicada: " . $oferta . "<br/>";

    //Formulas matematicas para calcular si hay un reembolso del producto
    if ($Gansito > 2000) {
        $reembolso = $valorProd - $Gansito;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Gansito = 2000);  
        $reembolso = $valorProd - $Gansito;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }

    if ($Tortillas > 5000) {
        $reembolso = $valorProd - $Tortillas;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Tortillas = 5000);  
        $reembolso = $valorProd - $Tortillas;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }
  
    if ($Pinguino > 1500) {
        $reembolso = $valorProd - $Pinguino;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Pinguino = 1500);  
        $reembolso = $valorProd - $Pinguino;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }

    if ($Pan_artesano > 4500) {
        $reembolso = $valorProd - $Pan_artesano;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Pan_artesano = 4500);  
        $reembolso = $valorProd - $Pan_artesano;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }

    if ($Pan_blanco > 5000) {
        $reembolso = $valorProd - $Pan_blanco;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Pan_blanco = 5000);  
        $reembolso = $valorProd - $Pan_blanco;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }

    if ($Pan_integral > 5000) {
        $reembolso = $valorProd - $Pan_integral;
        echo "- El reembolso del producto es: $" . $reembolso ."<br/>";
    } else { ($Pan_integral = 5000);  
        $reembolso = $valorProd - $Pan_integral;
        echo "- Usted no tiene ningún reembolso: $" . $reembolso ."<br/>";
    }
   
?>
</center>