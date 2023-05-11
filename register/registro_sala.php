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
    <link rel="stylesheet" href="../register/style.css">
    <title>registro estudiante</title>
</head>
<body>
    <div class="container">
        <form action="registro_sala.php" method="post">
        <div class="ingreso">
        <input type="text" placeholder="0" id="id_estudiante" name="estudiante" class="ingreso1">
        <input type="button" onclick="del()" value="<--" class="eliminar">
        </div>
        

        <div id="fila">
            <input type="button" class="tecla" onclick="display('1')" id="1" value="1">
            <input type="button" class="tecla" onclick="display('2')" id="2" value="2">
            <input type="button" class="tecla" onclick="display('3')" id="3" value="3">
          
        </div>

        <div id="fila">
            <input type="button" class="tecla" onclick="display('4')" id="4" value="4">
            <input type="button" class="tecla" onclick="display('5')" id="5" value="5">
            <input type="button" class="tecla" onclick="display('6')" id="6" value="6">
        </div>

        <div id="fila">
        <input type="button" class="tecla" onclick="display('7')" id="7" value="7">
        <input type="button" class="tecla" onclick="display('8')" id="8" value="8">
        <input type="button" class="tecla" onclick="display('9')" id="9" value="9">
        </div>

        <div id="fila">
        <input type="button" class="tecla cero" onclick="display('0')" id="0" value="0">
        <input type="submit" value="registrar" name="registrar_registro">
        <a href="#" class="cta">Registrar nuevo estudiante</a>
        </div>
        </form>
        
        <div class="modal-container">
            <div class="modal modal-close">
                <p class="close">X</p>
                <div class="modal-textos">
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
                </div>
            </div>
        </div>
    </div>


    


        <script src="script.js"></script>
</body>
</html>


<?php 
if(isset($_POST['registrar_registro'])){
    $numero = $_POST["estudiante"];
    echo "numero registrado " . $numero;
}

?>

