<?php
include('../conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de salas</title>
</head>
<body>
    <form action="" method="post">
        <label for="">nombre de la sala</label> <br>
        <input type="text" placeholder="digite el id de la sala" name="id_sala" required> <br>
        <label for="">cantidad de equipos en sala</label> <br>
        <input type="number" placeholder="digite la cantidad de equipos en la sala" name="cantidadE" required> <br>
        <input type="submit" value="registrar_sala" name= 'registrar_salas'> <br>
        <a href="../modulos/salas.php">regresar</a>
    </form>
</body>
</html>

<?php
    if(isset($_POST['registrar_salas'])){
        $names= $_POST['id_sala'];
        $cant= $_POST['cantidadE'];
        $funcion=$conexion->query("INSERT INTO sala(id_sala, cantidad_equipos)
                                    VALUES('$names','$cant')");
        if($funcion){
            echo "datos ingresados correctamente";
        }else{
            echo "los datos NO se agregaron";
        }
    }
?>