<?php
include("../conexion/conexion.php");
    $select_facult=$conexion->query("SELECT nombre_facultad FROM facultad");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro estudiante</title>
</head>
<body>
    <form action="registrar_est.php" method="post">
        
    <label for="">numero de identificacion</label> <br>
    <input type="number" placeholder="ingrese numero de documento" name="id_est" required> <br>

    <label for="">nombre y apellidos Completos</label> <br>
    <input type="text" placeholder="ingrese nombres y apellidos" name="nameAndLastName" required> <br> <br>

    <label for="">facultad a la que pertenece</label> <br>
    <select name="facultad" required>
        <option >seleccionar...</option>
        <?php 
            while($datos = mysqli_fetch_array($select_facult)){ //utilizamos este metodo de verificacion al ?> 
        <option value="<?php echo $datos['nombre_facultad']; ?>"> <?php echo $datos['nombre_facultad'];?> </option>
        <?php }?> 
    </select> <br>

    <label for="">Numero celular</label> <br>
    <input type="number" placeholder="ingrese su numero celular"  name="n_cel" required> <br>

    <label for="">Correo</label> <br>
    <input type="email" placeholder="ingrese correo institucional" name="correo" required> <br>

    <input type="submit" value="registrar"  name="registrar_est">

    <a href="../modulos/estudiantes.php">regresar</a>
    </form>    
</body>
</html>

<?php 
    if(isset($_POST['registrar_est'])){
        $identificacion = $_POST['id_est'];
        $name = $_POST['nameAndLastName'];
        $facult = $_POST['facultad'];
        $numc = $_POST['n_cel'];
        $correo = $_POST['correo'];
        $validacion =$conexion->query("INSERT INTO estudiante(id_estudiante, nombre_estudiante, nombre_facultad, numero, correo)
                        VALUES('$identificacion','$name','$facult','$numc','$correo')");
        if($validacion){
            echo "datos ingresados correctamente";
        }else{
            echo "los datos no se pudieron ingresar";
        }    
}
    
?>
