<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://grupobimbo-com-custom01-assets.s3.amazonaws.com/s3fs-public/favicon.ico" type="image/vnd.microsoft.icon" />
    <title>Grupo Bimbo | Perfil </title>
</head>
<body>
    <font face="Tahoma" </font>
    <?php
        //Titulo
        echo '<center><h1>Perfil creado en Bimbo</h1></center></style>';
    ?>
    <body bgcolor="B0DDF9">
    <font face="Arimo" </font>
    <center>
    <?php
        //Variable para el nombre del usuario
        $Nombre= $_POST['Nombre'];
        echo "<h5>Su nombre es: " . $Nombre . "<br/></h5>";

        //Variable para el apellido del usuario
        $Apellido= $_POST['Apellido'];
        echo "<h5>Su apellido es: " . $Apellido . "<br/></h5>";
  
        //Variable para la edad del usuario
        $Edad= $_POST['Edad'];
        echo "<h5>Su edad es: " . $Edad . "<br/></h5>";

        //Condiciones para la edad del usuario
       
        if ($Edad <= 13) {
            echo "<h5>Tu eres un niñ@ de:" . $Edad . "<br/></h5>";
        } elseif ($Edad > 13 && $Edad < 19) {
            echo "<h5>Tu eres un adolescente de:" .  $Edad . "<br/></h5>";
        } else {
            echo "<h5>Tu eres un adulto de:" .  $Edad . "<br/></h5>";
        }

        //Variable para la fecha de nacimiento del usuario
        $Fecha_de_nacimiento= $_POST['Fecha_de_nacimiento'];
        echo "<h5>Usted nacio el: " . $Fecha_de_nacimiento . "<br/></h5>";

        //Variable para el correo del usuario
        $Correo= $_POST['Correo'];
        echo "<h5>Su correo electronico es: " . $Correo . "<br/></h5>";
        
        //Variable para la confirmación del correo del usuario
        $Confirmación_correo= $_POST['Confirmación_correo'];
        echo "<h5>Su correo electronico es: " . $Confirmación_correo . "<br/></h5>";

        //Variable para el # de celular del usuario
        $Celular= $_POST['Celular'];
        echo "<h5>Su número de celular es: " . $Celular . "<br/></h5>";

        //Variable para el # de telefono del usuario
        $Telefono= $_POST['Telefono'];
        echo "<h5>Su número de telefono es: " . $Telefono . "<br/></h5>";

        //Variable para la contraseña del usuario
        $Contraseña= $_POST['Contraseña'];
        echo "<h5>Su contraseña es: " . $Contraseña . "<br/></h5>";

        //Variable para la confirmación de contraseña del usuario
        $Confirmación_contraseña= $_POST['Confirmación_contraseña'];
        echo "<h5>Su contraseña es: " . $Confirmación_contraseña . "<br/></h5>";

        //Variable para el idioma del usuario
        $Idioma= $_POST['Idioma'];
        echo "<h5>El idioma elegido es: " . $Idioma . "<br/></h5>";
    ?>
    </center>
    <!--Formulario para volver a la pagina de crear un perfil-->
    <form action="Pagina-Bimbo.php" method="post">
    <center><p><input type="submit" name="submit" value="<< Volver"/></p></center>
    </form>
    
    <!--Formulario para ir al perfil del usuario-->
    <form action="Form-Compra.php" method="post">
    <center><p><input type="submit" name="submit" value="Compras >>"/></p></center>
    </form>
</body>
</html>