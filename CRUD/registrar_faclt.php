<?php
include("../conexion/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro facultades</title>
</head>
<body>
    <form action="registrar_faclt.php" method="post">
        <label for="">Nombre de la facultad</label> <br>
        <input type="text" name="n_facult" placeholder="nombre de la facultad"> <br> 
        <label for="">Semestres</label> <br>
        <input type="number" name="semes" placeholder="semestres"> <br>
        <label for="">valor</label> <br>
        <input type="number" name="val" placeholder="valor de la carrera"> <br>
        <input type="submit" name="registrar_facul" value="registrar"> 
        <a href="../modulos/facultades.php">regresar</a>
    </form>
    
</body>
</html>

<?php 
    if(isset($_POST["registrar_facul"])){
        $n_facultad=$_POST["n_facult"];
        $semes=$_POST["semes"];
        $val=$_POST["val"];
        $ejecuF = $conexion->query("INSERT INTO facultad (nombre_facultad, semestres, valor)
                    VALUES('$n_facultad','$semes','$val')");
            if($ejecuF){
                echo "los datos se agregaron satisfactoriamente";
            }else{
                echo "los datos no fueron agregados";
            }
        


    }
?>