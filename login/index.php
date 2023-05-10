
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Universidad externado de Colombia</h2>
    <?php 
        include("../conexion/conexion.php");
        include("../validaciones/login.php");
        ?>
    <!-- <form  method="post" action="../validaciones/login.php"> al colocar el action me carga la pagina -->
        <form method="post">
            <label for="user">usuario</label> <br>
        <input type="text" placeholder="ingrese usuario" name="user"> <br>
            <label for="password">contraseña</label> <br>
        <input type="password" placeholder="ingrese contrasena" name="passwords"> <br>
        <input type="submit" value="ingresar" name="login">
        
    </form>
    
</body>
</html>