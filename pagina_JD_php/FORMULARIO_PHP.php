
<center>

    <!--Diseño de la letra de los datos almacenados-->
    <body bgcolor="#D7F6F5">
    <font face="Tahoma" </font>
   
    <?php
    //Estas son las variables principales
    $nombre = $_POST['nombre'];
    $Snombre = $_POST['Snombre'];
    $apellido = $_POST['apellido'];
    $Sapellido = $_POST['Sapellido'];
    $cargo = $_POST['cargo'];
    $nombreE = $_POST['nombreE'];
    $ContactoE = $_POST['contactoE'];
    $SedeP = $_POST['SedeP'];
    $CodPos = $_POST['CodPos'];
    $Npersonal = $_POST['Npersonal'];
    $Contacto = $_POST['Contacto'];
    $Comentarios = $_POST['Comentarios'];
    $fecha = $_POST['fecha'];

    //Estas son las variables erróneas
    $nombreErr = $_POST['nombre'];
    $apellidoErr = $_POST['apellido'];
    $cargoErr = $_POST['cargo'];
    $nombreEErr = $_POST['nombreE'];
    $SedePErr = $_POST['SedeP'];
    $ContactoErr = $_POST['contactoE'];
    $fechaErr = $_POST['fecha'];

    //Estas son las cantidades posibles
    $cant1 = $_POST['cant1'];
    $cant2 = $_POST['cant2'];
    $cant3 = $_POST['cant3'];
    $cant4 = $_POST['cant4'];
    $cant5 = $_POST['cant5'];
    $cant6 = $_POST['cant6'];

    //Este es el total de los precios por la cantidad
    $totgans = 2000 * $cant1;
    $tottort = 5000 * $cant2;
    $totping = 1500 * $cant3;
    $totpanart = 4500 * $cant4;
    $totpanbl = 5000 * $cant5;
    $totpanint = 6000 * $cant6;

    //Estas son las constantes de selección múltiple
    $subtotal = $totgans + $tottort + $totping + $totpanart + $totpanbl + $totpanint;
    $desc = $subtotal * 0.2;
    $total = $subtotal - $desc;
    $monto = $total - $desc;

    /*Dentro de la llave del anterior formulario se encuentra
el id de cada valor dentro del formulario en html*/

    echo "<h1>Datos del formulario recibidos desde la página web</h1>";
    echo " - El nombre del solicitante es: " . $nombre . "<br/>";
    echo " - El segundo nombre del solicitante es: " . $Snombre . "<br/>";
    echo " - El apellido del solicitante es: " . $apellido . "<br/>";
    echo " - El segundo apellido del solicitante es: " . $Sapellido . "<br/>";
    echo " - El cargo del solicitante es: " . $cargo . "<br/>";
    echo " - El email del usuario solicitante es: " . $ContactoE . "<br/>";
    echo " - El nombre de la empresa del solicitante es: " . $nombreE . "<br/>";
    echo " - La sede principal de la empresa del solicitante es: " . $SedeP . "<br/>";
    echo " - El código postal de la sede es: " . $CodPos . "<br/>";
    echo " - El número del personal en la empresa es: " . $Npersonal . "<br/>";
    echo " - El contacto de la empresa es: " . $Contacto . "<br/>";
    echo " - El mensaje dejado por el solicitando es: " . $Comentarios . "<br/>";
    echo " - La fecha del día de la solicitud: " . $fecha . "<br/>";
    echo " - El subtotal de los productos comprados es:" . $subtotal . "<br/>";


    /*EN ESTE APARTADO SE CANCELAN LAS LINEAS 71-109, YA QUE NO CUMPLEN LA FUNCIÓN DE UNA CONDICIÓN*/

    /*El siguiente es un condicional para que en caso de que no se llenen todos los espacios, se redirija al archivo html:
    if (!$_POST) {
        header('Location:Formulario_HTML.html');
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es el nombre:
    if (empty($_POST['nombre'])) {
        echo "El nombre es requerido";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es el apellido:
    if (empty($_POST['apellido'])) {
        echo "El apellido es requerido";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es el cargo:
    if (empty($_POST['cargo'])) {
        echo "Su cargo es requerido";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es el nombre de la empresa:
    if (empty($_POST['nombreE'])) {
        echo "El nombre de la empresa es requerido";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es la sede principal:
    if (empty($_POST['SedeP'])) {
        echo "La sede principal es requerida";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es el contacto:
    if (empty($_POST['Contacto'])) {
        echo "El email de contacto con la empresa es requerido";
    }

    //Los siguientes son condicionales para los campos obligatoriosn en este caso es la fecha:
    if (empty($_POST['fecha'])) {
        echo "La fecha es requerida";
*/


    //En esta parte se hacen los cálculos para poder determinar los descuentos.
    if ($subtotal > 30000) {
        $desc = $subtotal * 0.2;
        echo "- <strong>¡Felicidades! </strong> El monto total es mayor a $30.000, te regalamos un descuento del 20%. En total tienes que pagar: $" . $monto . "<br/>";
    } elseif ($subtotal = 30000) {
        $desc = $subtotal * 0.1;
        echo " - <strong>¡Felicidades! </strong> El monto total es igual a $30.000, te regalamos un descuento del 10%. En total tienes que pagar: $" . $monto . "<br/>";
    } else {
        ($subtotal < 30000);
        echo " - Lo sentimos, tu monto de productos no alcanza los $30.000, por lo tanto no podemos ofrecerte el descuento del 15%, tienes que pagar: $" . $subtotal . "<br/>";
    }
    ?>

    <?php
        echo "<h5> Si desea conocer el etiquetado del producto, dar clic en el siguiente boton.</h5>"
    ?>
    <form action="Formulario2.html" method="post">
        <center><p><input type="submit" name="submit" value="Solicitar"/></p></center>
    </form>
</center>