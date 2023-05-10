<?php 
include("../conexion/conexion.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro software</title>
</head>
<body>
        <form action="registrar_soft.php" method="post">
            <label for="">Nombre del programa</label> <br>
            <input type="text" placeholder="ingrese nombre del software" name="nombre_soft" required> <br>
            <label for="">valor del software</label> <br>
            <input type="number" placeholder="ingrese valor del software" name="valor_soft" required> <br>
            <input type="submit" name="registrar_soft" value="registrar"> <br>
            <a href="../modulos/software.php">regresar</a>
        </form>
</body>
</html>

<?php 
    if(isset($_POST['registrar_soft'])){
        $namesft = $_POST['nombre_soft'];
        $valorsft = $_POST['valor_soft'];
        $ejecsfot = $conexion->query("INSERT INTO software (nombre_programa, valor_software)
        VALUES('$namesft','$valorsft')");
        if($ejecsfot){
            echo "datos ingresados correctamente";
        }else{
            echo "los datos no se ingresaron";
        }
    }
?>

