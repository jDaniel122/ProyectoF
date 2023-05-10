<?php
include("../conexion/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registroCable</title>
</head>
<body>
    <form action="registrar_cbl.php" method="post">
        <label for="">tipo de cable</label> <br>
        <input type="text" name="tip_cable" placeholder="ingrese el tipo de cable"> <br>
        <label for="">cantidad de cables</label> <br>
        <input type="number" name="cant_cable" placeholder="ingrese la cantidad de ellos"> <br>
        <input type="submit" value="registrar" name="registrar_cable">
        <a href="../modulos/cables.php">regresar</a>
    </form>
    

</body>
</html>


<?php
    if(isset($_POST["registrar_cable"])){
            $tip_cable=$_POST["tip_cable"];
            $cant_cable=$_POST["cant_cable"];
            $ejecuC = "INSERT INTO ca_cables (tipo_cable, cantidad)
                        VALUE('$tip_cable', '$cant_cable')";
            $validC = mysqli_query($conexion,$ejecuC);
            if(!$validC){
                echo "los datos no fueron agregados";
            }else{
                echo "los datos se agregaron satisfactoriamente";
            }
    }
?>



